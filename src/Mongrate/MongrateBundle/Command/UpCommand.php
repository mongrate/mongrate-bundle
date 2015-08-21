<?php

namespace Mongrate\MongrateBundle\Command;

class UpCommand extends \Mongrate\Command\UpCommand
{
    use ExtendsStandaloneMongrateCommandTrait;

    public function __construct(array $config)
    {
        parent::__construct(null, $config);
    }
}
