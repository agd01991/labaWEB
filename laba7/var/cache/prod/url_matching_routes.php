<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/test' => [[['_route' => 'app_api_test_index', '_controller' => 'App\\Api\\Controller\\TestController::index'], null, ['GET' => 0], null, true, false, null]],
        '/api/test/users' => [[['_route' => 'app_api_test_users', '_controller' => 'App\\Api\\Controller\\TestController::users'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_core_default_index', '_controller' => 'App\\Core\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
