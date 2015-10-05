<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;

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
    }
}
