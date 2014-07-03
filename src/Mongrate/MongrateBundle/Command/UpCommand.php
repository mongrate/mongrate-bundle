<?php

namespace Mongrate\MongrateBundle\Command;

class UpCommand extends \Mongrate\Command\UpCommand
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
