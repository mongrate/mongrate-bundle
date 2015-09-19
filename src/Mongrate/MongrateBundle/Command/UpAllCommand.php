<?php

namespace Mongrate\MongrateBundle\Command;

class UpAllCommand extends \Mongrate\Command\UpAllCommand
{
    use ExtendsStandaloneMongrateCommandTrait;

    public function __construct(array $config)
    {
        parent::__construct(null, $config);
    }
}
