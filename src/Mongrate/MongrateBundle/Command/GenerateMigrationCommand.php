<?php

namespace Mongrate\MongrateBundle\Command;

class GenerateMigrationCommand extends \Mongrate\Command\GenerateMigrationCommand
{
    use ExtendsStandaloneMongrateCommandTrait;

    public function __construct(array $config)
    {
        parent::__construct(null, $config);
    }
}
