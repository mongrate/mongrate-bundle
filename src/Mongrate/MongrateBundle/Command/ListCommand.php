<?php

namespace Mongrate\MongrateBundle\Command;

class ListCommand extends \Mongrate\Command\ListCommand
{
    use ExtendsStandaloneMongrateCommandTrait;

    public function __construct(array $config)
    {
        parent::__construct(null, $config);
    }
}
