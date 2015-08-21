<?php

namespace Mongrate\MongrateBundle\Command;

class TestCommand extends \Mongrate\Command\TestMigrationCommand
{
    use ExtendsStandaloneMongrateCommandTrait;

    public function __construct(array $config)
    {
        parent::__construct(null, $config);
    }
}
