<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\TestCommand;

class TestCommandTest extends AbstractCommandTest
{
    public function testCommandIsFound()
    {
        $this->application->add(new TestCommand($this->config));

        $this->assertCommandIsFound('mongrate:test', TestCommand::class);
    }

}
