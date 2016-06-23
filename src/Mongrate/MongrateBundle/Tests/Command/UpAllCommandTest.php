<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\UpAllCommand;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class UpAllCommandTest extends AbstractCommandTest
{
    public function testCommandIsFound()
    {
        $this->application->add(new UpAllCommand($this->config));

        $this->assertCommandIsFound('mongrate:up-all', UpAllCommand::class);
    }


    public function testIsContainerAware()
    {
        $this->assertIsContainerAware('mongrate:up-all', UpAllCommand::class);
    }

    public function testIsContainerWasInjectedToService()
    {
        $this->assertContainerWasInjectedToService('mongrate:up-all', UpAllCommand::class);
    }
}
