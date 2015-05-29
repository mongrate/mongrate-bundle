<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\ListCommand;

class ListCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testCommandIsFound()
    {
        $config = [
            'migrations_directory' => '/',
            'mongodb_server' => 'localhost',
            'mongodb_db' => 'test'
        ];

        $application = new Application();
        $application->add(new ListCommand($config));

        $command = $application->find('mongrate:list-migrations');
        $this->assertEquals('mongrate:list-migrations', $command->getName());
    }

}
