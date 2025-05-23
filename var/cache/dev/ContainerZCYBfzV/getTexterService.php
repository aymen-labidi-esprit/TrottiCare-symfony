<?php

namespace ContainerZCYBfzV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTexterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'texter' shared service.
     *
     * @return \Symfony\Component\Notifier\Texter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/notifier/Transport/TransportInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/notifier/TexterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/notifier/Texter.php';

        $a = ($container->privates['texter.transports'] ?? $container->load('getTexter_TransportsService'));

        if (isset($container->privates['texter'])) {
            return $container->privates['texter'];
        }
        $b = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['texter'])) {
            return $container->privates['texter'];
        }
        $c = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['texter'])) {
            return $container->privates['texter'];
        }

        return $container->privates['texter'] = new \Symfony\Component\Notifier\Texter($a, $b, $c);
    }
}
