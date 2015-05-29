<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\ToggleMigrationCommand;

class ToggleMigrationCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testCommandIsFound()
    {
        $config = [
            'migrations_directory' => '/',
            'mongodb_server' => 'localhost',
            'mongodb_db' => 'test'
        ];

        $application = new Application();
        $application->add(new ToggleMigrationCommand($config));

        $command = $application->find('mongrate:toggle');
        $this->assertEquals('mongrate:toggle', $command->getName());
    }

}
