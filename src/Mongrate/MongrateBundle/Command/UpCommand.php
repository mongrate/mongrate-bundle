<?php

namespace Mongrate\MongrateBundle\Command;

use Mongrate\Configuration;
use Mongrate\MongrateBundle\Service\ContainerAwareMigrationService;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class UpCommand extends \Mongrate\Command\UpCommand implements ContainerAwareInterface
{
    use ExtendsStandaloneMongrateCommandTrait;
    use ContainerAwareTrait;

    /**
     * @var ContainerAwareMigrationService
     */
    protected $service;

    public function __construct(array $config)
    {
        parent::__construct(null, $config);
    }

    /**
     * {@inheritdoc}
     */
    protected function getMigrationService(Configuration $configuration)
    {
        return new ContainerAwareMigrationService($configuration);
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->service->setContainer($this->container);
    }
}
