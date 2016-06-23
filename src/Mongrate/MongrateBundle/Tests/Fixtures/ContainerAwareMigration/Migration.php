<?php

Namespace Mongrate\Migrations;

use Mongrate\Migration\Migration;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class ContainerAwareMigration implements ContainerAwareInterface
{
    use ContainerAwareTrait;
    use Migration;
}
