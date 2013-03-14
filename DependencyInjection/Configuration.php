<?php

namespace Userfriendly\UtilityBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $node = $treeBuilder->root( 'userfriendly_utility' );
        $node
            ->children()
                ->scalarNode( 'website_domain' )->cannotBeEmpty()->defaultValue( 'example.com' )->end()
                ->scalarNode( 'system_email_username' )->defaultValue( 'no-reply' )->end()
            ->end()
        ;
        return $treeBuilder;
    }
}
