<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\ToggleMigrationCommand;

class ToggleMigrationCommandTest extends AbstractCommandTest
{
    public function testCommandIsFound()
    {
        $this->application->add(new ToggleMigrationCommand($this->config));

        $this->assertCommandIsFound('mongrate:toggle');
    }
}
