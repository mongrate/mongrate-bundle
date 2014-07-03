<?php

namespace Mongrate\MongrateBundle\Command;

class DownCommand extends \Mongrate\Command\DownCommand
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
