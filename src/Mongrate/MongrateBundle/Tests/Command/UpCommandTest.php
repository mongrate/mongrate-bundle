<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\UpCommand;

class UpCommandTest extends AbstractCommandTest
{
    public function testCommandIsFound()
    {
        $this->application->add(new UpCommand($this->config));

        $this->assertCommandIsFound('mongrate:up');
    }
}
