<?php

namespace ContainerQ1rWkkX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Api\Utils\AuthService' shared autowired service.
     *
     * @return \App\Api\Utils\AuthService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Api\\Utils\\AuthService'] = new \App\Api\Utils\AuthService();
    }
}