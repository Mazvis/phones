<?php

namespace Phones\StatProviders\GsmArenaComBasemarkOSIIBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('phones_stat_providers_gsm_arena_com_basemark_os_ii');

        return $treeBuilder;
    }
}
