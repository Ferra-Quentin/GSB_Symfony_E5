<?php

namespace ContainerEJiVxiE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ergdaz4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ergdaz4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ergdaz4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CrudEtatController::delete' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\CrudEtatController::edit' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\CrudEtatController::index' => ['privates', '.service_locator.GInIfSI', 'get_ServiceLocator_GInIfSIService', true],
            'App\\Controller\\CrudEtatController::show' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\FichefraisCrudController::delete' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\FichefraisCrudController::edit' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\FichefraisCrudController::index' => ['privates', '.service_locator.51IKJyZ', 'get_ServiceLocator_51IKJyZService', true],
            'App\\Controller\\FichefraisCrudController::show' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\FraisforfaitCrudController::delete' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'App\\Controller\\FraisforfaitCrudController::edit' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'App\\Controller\\FraisforfaitCrudController::index' => ['privates', '.service_locator..BZndp8', 'get_ServiceLocator__BZndp8Service', true],
            'App\\Controller\\FraisforfaitCrudController::show' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CrudEtatController:delete' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\CrudEtatController:edit' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\CrudEtatController:index' => ['privates', '.service_locator.GInIfSI', 'get_ServiceLocator_GInIfSIService', true],
            'App\\Controller\\CrudEtatController:show' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\FichefraisCrudController:delete' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\FichefraisCrudController:edit' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\FichefraisCrudController:index' => ['privates', '.service_locator.51IKJyZ', 'get_ServiceLocator_51IKJyZService', true],
            'App\\Controller\\FichefraisCrudController:show' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\FraisforfaitCrudController:delete' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'App\\Controller\\FraisforfaitCrudController:edit' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'App\\Controller\\FraisforfaitCrudController:index' => ['privates', '.service_locator..BZndp8', 'get_ServiceLocator__BZndp8Service', true],
            'App\\Controller\\FraisforfaitCrudController:show' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CrudEtatController::delete' => '?',
            'App\\Controller\\CrudEtatController::edit' => '?',
            'App\\Controller\\CrudEtatController::index' => '?',
            'App\\Controller\\CrudEtatController::show' => '?',
            'App\\Controller\\FichefraisCrudController::delete' => '?',
            'App\\Controller\\FichefraisCrudController::edit' => '?',
            'App\\Controller\\FichefraisCrudController::index' => '?',
            'App\\Controller\\FichefraisCrudController::show' => '?',
            'App\\Controller\\FraisforfaitCrudController::delete' => '?',
            'App\\Controller\\FraisforfaitCrudController::edit' => '?',
            'App\\Controller\\FraisforfaitCrudController::index' => '?',
            'App\\Controller\\FraisforfaitCrudController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CrudEtatController:delete' => '?',
            'App\\Controller\\CrudEtatController:edit' => '?',
            'App\\Controller\\CrudEtatController:index' => '?',
            'App\\Controller\\CrudEtatController:show' => '?',
            'App\\Controller\\FichefraisCrudController:delete' => '?',
            'App\\Controller\\FichefraisCrudController:edit' => '?',
            'App\\Controller\\FichefraisCrudController:index' => '?',
            'App\\Controller\\FichefraisCrudController:show' => '?',
            'App\\Controller\\FraisforfaitCrudController:delete' => '?',
            'App\\Controller\\FraisforfaitCrudController:edit' => '?',
            'App\\Controller\\FraisforfaitCrudController:index' => '?',
            'App\\Controller\\FraisforfaitCrudController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
