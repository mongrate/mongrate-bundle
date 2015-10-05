<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\UpAllCommand;

class UpAllCommandTest extends AbstractCommandTest
{
    public function testCommandIsFound()
    {
        $this->application->add(new UpAllCommand($this->config));

        $this->assertCommandIsFound('mongrate:up-all', UpAllCommand::class);
    }
}
