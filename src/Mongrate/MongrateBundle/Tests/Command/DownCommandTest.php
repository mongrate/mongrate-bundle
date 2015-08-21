<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\DownCommand;

class DownCommandTest extends AbstractCommandTest
{
    public function testCommandIsFound()
    {
        $this->application->add(new DownCommand($this->config));

        $this->assertCommandIsFound('mongrate:down');
    }
}
