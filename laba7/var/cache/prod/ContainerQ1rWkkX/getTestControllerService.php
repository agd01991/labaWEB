<?php

namespace ContainerQ1rWkkX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Api\Controller\TestController' shared autowired service.
     *
     * @return \App\Api\Controller\TestController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['App\\Api\\Controller\\TestController'] = new \App\Api\Controller\TestController();
    }
}
