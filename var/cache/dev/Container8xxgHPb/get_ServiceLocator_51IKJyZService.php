<?php

namespace Container8xxgHPb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_51IKJyZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.51IKJyZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.51IKJyZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fichefraisRepository' => ['privates', 'App\\Repository\\FichefraisRepository', 'getFichefraisRepositoryService', true],
        ], [
            'fichefraisRepository' => 'App\\Repository\\FichefraisRepository',
        ]);
    }
}
