<?php

namespace Mongrate\MongrateBundle\Command;

class DownCommand extends \Mongrate\Command\DownCommand
{
    use ExtendsStandaloneMongrateCommandTrait;

    public function __construct(array $config)
    {
        parent::__construct(null, $config);
    }
}
