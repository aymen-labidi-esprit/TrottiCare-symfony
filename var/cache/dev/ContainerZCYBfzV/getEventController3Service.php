<?php

namespace ContainerZCYBfzV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventController3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EventController' shared autowired service.
     *
     * @return \App\Controller\EventController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EventController.php';

        $container->services['App\\Controller\\EventController'] = $instance = new \App\Controller\EventController(($container->privates['App\\Repository\\ParticipationRepository'] ?? $container->load('getParticipationRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\EventController', $container));

        return $instance;
    }
}
