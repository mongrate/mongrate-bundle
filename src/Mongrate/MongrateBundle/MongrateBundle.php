<?php

namespace Mongrate\MongrateBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Console\Application;

class MongrateBundle extends Bundle
{
    public function registerCommands(Application $application)
    {
        $config = $application->getKernel()
            ->getContainer()
            ->getParameter('mongrate_bundle');

        $application->add(new \Mongrate\MongrateBundle\Command\ToggleMigrationCommand($config));
        $application->add(new \Mongrate\MongrateBundle\Command\GenerateMigrationCommand($config));
        $application->add(new \Mongrate\MongrateBundle\Command\UpCommand($config));
        $application->add(new \Mongrate\MongrateBundle\Command\DownCommand($config));
    }
}
