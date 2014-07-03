<?php

namespace Mongrate\MongrateBundle\Command;

class GenerateMigrationCommand extends \Mongrate\Command\GenerateMigrationCommand
{
    public function __construct(array $config)
    {
        parent::__construct(null, $config);
    }

    protected function configure()
    {
        parent::configure();
        $this->setName('mongrate:' . $this->getName());
    }
}
