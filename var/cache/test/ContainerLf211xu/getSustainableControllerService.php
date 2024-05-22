<?php

namespace ContainerLf211xu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSustainableControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\SustainableController' shared autowired service.
     *
     * @return \App\Controller\SustainableController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SustainableController.php';

        $container->services['App\\Controller\\SustainableController'] = $instance = new \App\Controller\SustainableController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\SustainableController', $container));

        return $instance;
    }
}
