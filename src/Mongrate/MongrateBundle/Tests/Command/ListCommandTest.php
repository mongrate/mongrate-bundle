<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\ListCommand;

class ListCommandTest extends AbstractCommandTest
{
    public function testCommandIsFound()
    {
        $this->application->add(new ListCommand($this->config));

        $this->assertCommandIsFound('mongrate:list-migrations', ListCommand::class);
    }
}
