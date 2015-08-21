<?php

namespace Mongrate\MongrateBundle\Command;

class ToggleMigrationCommand extends \Mongrate\Command\ToggleMigrationCommand
{
    use ExtendsStandaloneMongrateCommandTrait;

    public function __construct(array $config)
    {
        parent::__construct(null, $config);
    }
}
