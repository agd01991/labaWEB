<?php

namespace ContainerQ1rWkkX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_User_Provider_Concrete_BackendUsersService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.user.provider.concrete.backend_users' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\InMemoryUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.user.provider.concrete.backend_users'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider(['admin' => ['password' => '$argon2id$v=19$m=65536,t=4,p=1$6mZC8uc59kA+GG0mXgXNsA$OgD9cwenw/xJpzpILFAEuqTMU6HVOVlP+2CSyrsLtv0', 'roles' => [0 => 'ROLE_ADMIN']]]);
    }
}
