<?php

namespace Mongrate\MongrateBundle\Tests\Service;

use Mongrate\Configuration;
use Mongrate\Model\Migration;
use Mongrate\Model\Name;
use Mongrate\MongrateBundle\Service\ContainerAwareMigrationService;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ContainerAwareMigrationServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ContainerAwareMigrationService
     */
    protected $service;

    public function setUp()
    {
        $config = [
            'migrations_directory' => 'src/Mongrate/MongrateBundle/Tests/Fixtures/',
            'mongodb_server' => 'localhost',
            'mongodb_db' => 'test'
        ];

        $this->service = new ContainerAwareMigrationService(new Configuration($config));
        $this->service->setContainer(new Container());
    }

    public function testContainerInjectedToAwareMigration ()
    {
        $migration = $this->service->createMigrationInstance(
            new Name('ContainerAwareMigration'),
            new NullOutput()
        );

        self::assertAttributeInstanceOf(
            ContainerInterface::class,
            'container',
            $migration,
            'Container wasn\'t injected to a Migration by the Service'
        );
    }
}
