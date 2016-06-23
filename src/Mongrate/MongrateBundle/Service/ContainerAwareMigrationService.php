<?php

namespace Mongrate\MongrateBundle\Service;

use Mongrate\Model\Name;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Mongrate\Service\MigrationService;

class ContainerAwareMigrationService extends MigrationService implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function createMigrationInstance(Name $name, OutputInterface $output)
    {
        $migration = parent::createMigrationInstance($name, $output);

        if ($migration instanceof ContainerAwareInterface) {
            $migration->setContainer($this->container);
        }

        return $migration;
    }
}
