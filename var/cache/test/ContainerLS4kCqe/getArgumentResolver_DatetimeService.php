<?php

namespace ContainerLS4kCqe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_DatetimeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'argument_resolver.datetime' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/DateTimeValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/clock/src/ClockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/clock/ClockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/clock/Clock.php';

        return $container->privates['argument_resolver.datetime'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver(($container->privates['clock'] ??= new \Symfony\Component\Clock\Clock()));
    }
}
