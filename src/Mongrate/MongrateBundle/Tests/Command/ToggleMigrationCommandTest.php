<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\ToggleMigrationCommand;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class ToggleMigrationCommandTest extends AbstractCommandTest
{
    public function testCommandIsFound()
    {
        $this->application->add(new ToggleMigrationCommand($this->config));

        $this->assertCommandIsFound('mongrate:toggle', ToggleMigrationCommand::class);
    }

    public function testIsContainerAware()
    {
        $this->assertIsContainerAware('mongrate:toggle', ToggleMigrationCommand::class);
    }

    public function testIsContainerWasInjectedToService()
    {
        $this->assertContainerWasInjectedToService('mongrate:toggle', ToggleMigrationCommand::class);
    }
}
