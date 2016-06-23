<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Mongrate\MongrateBundle\MongrateBundle;
use Mongrate\MongrateBundle\Tests\TestKernel;
use Symfony\Component\Console\Application;
use Symfony\Bundle\FrameworkBundle\Console\Application as FrameworkApplication;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class AbstractCommandTest extends \PHPUnit_Framework_TestCase
{
    protected $application;

    protected $config;

    public function setUp()
    {
        $this->application = new Application();

        $this->config = [
            'migrations_directory' => '/',
            'mongodb_server' => 'localhost',
            'mongodb_db' => 'test'
        ];
    }

    protected function assertCommandIsFound($name, $class)
    {
        $command = $this->application->find($name);
        $this->assertEquals($name, $command->getName());
        $this->assertNotEmpty($command->getDescription());
        $this->assertInstanceOf($class, $command);

        $this->assertCommandIsRegisteredInBundle($name, $class);
    }

    private function assertCommandIsRegisteredInBundle($name, $class)
    {
        $mockContainer = $this->getMockBuilder('Symfony\Component\DependencyInjection\Container')
            ->setMethods(['getParameter'])
            ->getMock();
        $mockContainer->expects($this->any())
            ->method('getParameter')
            ->with('mongrate_bundle')
            ->will($this->returnValue($this->config));

        $kernel = new TestKernel($mockContainer);

        $frameworkApplication = new FrameworkApplication($kernel);

        $bundle = new MongrateBundle();
        $bundle->registerCommands($frameworkApplication);

        $this->assertInstanceOf($class, $frameworkApplication->find($name));
    }

    public function assertIsContainerAware($name, $class)
    {
        self::assertInstanceOf(
            ContainerAwareInterface::class,
            new $class($this->config),
            sprintf('The %s command is not instance of ContainerAwareInterface', $name)
        );
    }

    public function assertContainerWasInjectedToService($name, $class)
    {
        $this->application->add(new $class($this->config));

        $command = $this->application->get($name);

        $command->setContainer(new Container());
        $command->initialize(New ArrayInput([]), new NullOutput());

        self::assertAttributeInstanceOf(
            ContainerInterface::class,
            'container',
            \PHPUnit_Framework_Assert::getObjectAttribute($command, 'service'),
            sprintf('Container wasn\'t injected to the MigrationService by %s command', $name)
        );
    }
}
