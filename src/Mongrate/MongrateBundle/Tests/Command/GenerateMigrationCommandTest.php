<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\GenerateMigrationCommand;

class GenerateMigrationCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testCommandIsFound()
    {
        $config = [
            'migrations_directory' => '/',
            'mongodb_server' => 'localhost',
            'mongodb_db' => 'test'
        ];

        $application = new Application();
        $application->add(new GenerateMigrationCommand($config));

        $command = $application->find('mongrate:generate-migration');
        $this->assertEquals('mongrate:generate-migration', $command->getName());
    }

}
