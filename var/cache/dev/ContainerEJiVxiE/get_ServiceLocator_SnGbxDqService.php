<?php

namespace ContainerEJiVxiE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SnGbxDqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.snGbxDq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.snGbxDq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fichefrai' => ['privates', '.errored..service_locator.snGbxDq.App\\Entity\\Fichefrais', NULL, 'Cannot autowire service ".service_locator.snGbxDq": it references class "App\\Entity\\Fichefrais" but no such service exists.'],
        ], [
            'fichefrai' => 'App\\Entity\\Fichefrais',
        ]);
    }
}
