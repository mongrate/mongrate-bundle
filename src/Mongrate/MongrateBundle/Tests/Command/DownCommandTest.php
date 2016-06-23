<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\DownCommand;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class DownCommandTest extends AbstractCommandTest
{
    public function testCommandIsFound()
    {
        $this->application->add(new DownCommand($this->config));

        $this->assertCommandIsFound('mongrate:down', DownCommand::class);
    }

    public function testIsContainerAware()
    {
        $this->assertIsContainerAware('mongrate:down', DownCommand::class);
    }

    public function testIsContainerWasInjectedToService()
    {
        $this->assertContainerWasInjectedToService('mongrate:down', DownCommand::class);
    }
}
