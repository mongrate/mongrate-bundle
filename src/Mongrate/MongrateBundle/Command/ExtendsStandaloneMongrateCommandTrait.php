<?php

namespace Mongrate\MongrateBundle\Command;

trait ExtendsStandaloneMongrateCommandTrait
{
    protected function configure()
    {
        parent::configure();
        $this->setName('mongrate:' . $this->getName());
    }
}
