<?php

namespace ContainerZCYBfzV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotifier_TransportFactory_TwilioService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'notifier.transport_factory.twilio' shared service.
     *
     * @return \Symfony\Component\Notifier\Bridge\Twilio\TwilioTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/notifier/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/notifier/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twilio-notifier/TwilioTransportFactory.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['notifier.transport_factory.twilio'])) {
            return $container->privates['notifier.transport_factory.twilio'];
        }

        return $container->privates['notifier.transport_factory.twilio'] = new \Symfony\Component\Notifier\Bridge\Twilio\TwilioTransportFactory($a, ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)));
    }
}
