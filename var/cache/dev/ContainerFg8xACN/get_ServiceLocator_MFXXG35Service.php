<?php

namespace ContainerFg8xACN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MFXXG35Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mFXXG35' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mFXXG35'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'libraryRepository' => ['privates', 'App\\Repository\\LibraryRepository', 'getLibraryRepositoryService', true],
        ], [
            'libraryRepository' => 'App\\Repository\\LibraryRepository',
        ]);
    }
}
