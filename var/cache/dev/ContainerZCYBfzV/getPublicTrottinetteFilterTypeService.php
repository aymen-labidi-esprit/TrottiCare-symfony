<?php

namespace ContainerZCYBfzV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublicTrottinetteFilterTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\PublicTrottinetteFilterType' shared autowired service.
     *
     * @return \App\Form\PublicTrottinetteFilterType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PublicTrottinetteFilterType.php';

        return $container->privates['App\\Form\\PublicTrottinetteFilterType'] = new \App\Form\PublicTrottinetteFilterType();
    }
}
