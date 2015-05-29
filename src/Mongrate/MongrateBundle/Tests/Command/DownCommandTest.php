<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\DownCommand;

class DownCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testCommandIsFound()
    {
        $config = [
            'migrations_directory' => '/',
            'mongodb_server' => 'localhost',
            'mongodb_db' => 'test'
        ];

        $application = new Application();
        $application->add(new DownCommand($config));

        $command = $application->find('mongrate:down');
        $this->assertEquals('mongrate:down', $command->getName());
    }

}
