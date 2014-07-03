<?php

namespace Mongrate\MongrateBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('mongrate');

        $rootNode
            ->children()
                ->scalarNode('mongodb_server')
                ->end()
                ->scalarNode('mongodb_db')
                ->end()
                ->scalarNode('migrations_directory')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
