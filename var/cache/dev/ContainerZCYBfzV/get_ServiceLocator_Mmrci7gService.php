<?php

namespace ContainerZCYBfzV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mmrci7gService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mmrci7g' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mmrci7g'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'event' => ['privates', '.errored..service_locator.mmrci7g.App\\Entity\\Event', NULL, 'Cannot autowire service ".service_locator.mmrci7g": it needs an instance of "App\\Entity\\Event" but this type has been excluded in "config/services.yaml".'],
            'utilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'event' => 'App\\Entity\\Event',
            'utilisateurRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
