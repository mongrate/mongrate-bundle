<?php

namespace Mongrate\MongrateBundle\Command;

class ToggleMigrationCommand extends \Mongrate\Command\ToggleMigrationCommand
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
