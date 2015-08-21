<?php

namespace Mongrate\MongrateBundle\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Mongrate\MongrateBundle\Command\GenerateMigrationCommand;

class GenerateMigrationCommandTest extends AbstractCommandTest
{
    public function testCommandIsFound()
    {
        $this->application->add(new GenerateMigrationCommand($this->config));

        $this->assertCommandIsFound('mongrate:generate-migration');
    }
}
