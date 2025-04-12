<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/maintenance' => [[['_route' => 'app_maintenance_index', '_controller' => 'App\\Controller\\MaintenanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/maintenance/new' => [[['_route' => 'app_maintenance_new', '_controller' => 'App\\Controller\\MaintenanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trottinette' => [[['_route' => 'app_trottinette_index', '_controller' => 'App\\Controller\\TrottinetteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/trottinette/new' => [[['_route' => 'app_trottinette_new', '_controller' => 'App\\Controller\\TrottinetteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/maintenance/([^/]++)(?'
                    .'|(*:232)'
                    .'|/edit(*:245)'
                    .'|(*:253)'
                .')'
                .'|/trottinette/([^/]++)(?'
                    .'|(*:286)'
                    .'|/edit(*:299)'
                    .'|(*:307)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        232 => [[['_route' => 'app_maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'app_maintenance_edit', '_controller' => 'App\\Controller\\MaintenanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        253 => [[['_route' => 'app_maintenance_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        286 => [[['_route' => 'app_trottinette_show', '_controller' => 'App\\Controller\\TrottinetteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        299 => [[['_route' => 'app_trottinette_edit', '_controller' => 'App\\Controller\\TrottinetteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [
            [['_route' => 'app_trottinette_delete', '_controller' => 'App\\Controller\\TrottinetteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
