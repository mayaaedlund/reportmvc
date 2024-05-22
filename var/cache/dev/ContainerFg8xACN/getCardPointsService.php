<?php

namespace ContainerFg8xACN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCardPointsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Card\CardPoints' shared autowired service.
     *
     * @return \App\Card\CardPoints
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Card/Card.php';
        include_once \dirname(__DIR__, 4).'/src/Card/CardPoints.php';

        return $container->privates['App\\Card\\CardPoints'] = new \App\Card\CardPoints();
    }
}
