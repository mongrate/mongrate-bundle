<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Mongrate\MongrateBundle\MongrateBundle;
use Symfony\Component\Console\Application;
use Symfony\Bundle\FrameworkBundle\Console\Application as FrameworkApplication;

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
        $mockContainer->expects($this->once())
            ->method('getParameter')
            ->will($this->returnValue($this->config));

        $mockKernel = $this->getMockBuilder('Symfony\Component\HttpKernel\Kernel')
            ->disableOriginalConstructor()
            ->setMethods(['getContainer'])
            ->getMockForAbstractClass();
        $mockKernel->expects($this->once())
            ->method('getContainer')
            ->will($this->returnValue($mockContainer));

        $frameworkApplication = new FrameworkApplication($mockKernel);

        $bundle = new MongrateBundle();
        $bundle->registerCommands($frameworkApplication);

        $this->assertInstanceOf($class, $frameworkApplication->find($name));
    }
}
