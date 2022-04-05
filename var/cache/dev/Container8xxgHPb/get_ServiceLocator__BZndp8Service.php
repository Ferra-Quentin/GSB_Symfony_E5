<?php

namespace Container8xxgHPb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__BZndp8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..BZndp8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..BZndp8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fraisforfaitRepository' => ['privates', 'App\\Repository\\FraisforfaitRepository', 'getFraisforfaitRepositoryService', true],
        ], [
            'fraisforfaitRepository' => 'App\\Repository\\FraisforfaitRepository',
        ]);
    }
}