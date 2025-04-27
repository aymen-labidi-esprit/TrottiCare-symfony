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
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::dashboard'], null, null, null, true, false, null]],
        '/admin/events' => [[['_route' => 'app_admin_events', '_controller' => 'App\\Controller\\Admin\\EventController::events'], null, null, null, true, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_utilisateur_index', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateurs/new' => [[['_route' => 'admin_utilisateur_new', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client/dashboard' => [[['_route' => 'client_dashboard', '_controller' => 'App\\Controller\\Client\\DashboardController::dashboard'], null, null, null, false, false, null]],
        '/client/dashboard/qr-scan' => [[['_route' => 'client_qr_scan', '_controller' => 'App\\Controller\\Client\\DashboardController::qrScan'], null, ['GET' => 0], null, false, false, null]],
        '/client/dashboard/map' => [[['_route' => 'client_map_display', '_controller' => 'App\\Controller\\Client\\DashboardController::mapDisplay'], null, ['GET' => 0], null, false, false, null]],
        '/mon-profil' => [[['_route' => 'app_client_profile_view', '_controller' => 'App\\Controller\\Client\\ProfileController::view'], null, null, null, false, false, null]],
        '/mon-profil/edit' => [[['_route' => 'app_client_profile_edit', '_controller' => 'App\\Controller\\Client\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/partenaire/dashboard' => [[['_route' => 'app_partenaire_dashboard', '_controller' => 'App\\Controller\\Partenaire\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/maintenance' => [[['_route' => 'app_maintenance_index', '_controller' => 'App\\Controller\\MaintenanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/maintenance/new' => [[['_route' => 'app_maintenance_new', '_controller' => 'App\\Controller\\MaintenanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/point-relais' => [[['_route' => 'point_relais_index', '_controller' => 'App\\Controller\\PointRelaisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/point-relais/new' => [[['_route' => 'point_relais_new', '_controller' => 'App\\Controller\\PointRelaisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/events' => [[['_route' => 'app_public_events', '_controller' => 'App\\Controller\\PublicEventController::events'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/reservations/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trottinettes' => [[['_route' => 'app_trottinette_index', '_controller' => 'App\\Controller\\TrottinetteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/trottinettes/new' => [[['_route' => 'app_trottinette_new', '_controller' => 'App\\Controller\\TrottinetteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamations' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamations/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/trottinettes/new' => [[['_route' => 'admin_trottinette_new', '_controller' => 'App\\Controller\\Admin\\TrottinetteController::new'], null, null, null, false, false, null]],
        '/admin/trottinettes' => [[['_route' => 'admin_trottinette_index', '_controller' => 'App\\Controller\\Admin\\TrottinetteController::index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|events/(?'
                        .'|([^/]++)(?'
                            .'|/participants(*:246)'
                            .'|(*:254)'
                        .')'
                        .'|new(*:266)'
                        .'|([^/]++)(?'
                            .'|/edit(*:290)'
                            .'|(*:298)'
                        .')'
                    .')'
                    .'|utilisateurs/([^/]++)(?'
                        .'|(*:332)'
                        .'|/edit(*:345)'
                        .'|(*:353)'
                    .')'
                    .'|maintenance/([^/]++)(?'
                        .'|(*:385)'
                        .'|/edit(*:398)'
                        .'|(*:406)'
                    .')'
                    .'|point\\-relais/([^/]++)(?'
                        .'|(*:440)'
                        .'|/edit(*:453)'
                        .'|(*:461)'
                    .')'
                    .'|reservations/([^/]++)(?'
                        .'|(*:494)'
                        .'|/edit(*:507)'
                        .'|(*:515)'
                    .')'
                    .'|trottinettes/(?'
                        .'|(\\d+)(*:545)'
                        .'|(\\d+)/edit(*:563)'
                        .'|(\\d+)/delete(*:583)'
                    .')'
                .')'
                .'|/re(?'
                    .'|servation/create/([^/]++)(*:624)'
                    .'|clamation(?'
                        .'|/([^/]++)(?'
                            .'|(*:656)'
                            .'|/(?'
                                .'|edit(*:672)'
                                .'|repondre(*:688)'
                            .')'
                            .'|(*:697)'
                        .')'
                        .'|s/(?'
                            .'|(\\d+)(*:716)'
                            .'|(\\d+)/edit(*:734)'
                            .'|(\\d+)/delete(*:754)'
                        .')'
                    .')'
                .')'
                .'|/event(?'
                    .'|s/([^/]++)(?'
                        .'|(*:787)'
                        .'|/participate(*:807)'
                    .')'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|participa(?'
                                .'|te(*:846)'
                                .'|nts(*:857)'
                            .')'
                            .'|cancel\\-participation(*:887)'
                            .'|edit(*:899)'
                        .')'
                        .'|(*:908)'
                    .')'
                .')'
                .'|/trottinettes/(?'
                    .'|(\\d+)(*:940)'
                    .'|(\\d+)/edit(*:958)'
                    .'|(\\d+)/delete(*:978)'
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
        246 => [[['_route' => 'app_admin_event_participants', '_controller' => 'App\\Controller\\Admin\\EventController::eventParticipants'], ['id'], null, null, false, false, null]],
        254 => [[['_route' => 'app_admin_event_show', '_controller' => 'App\\Controller\\Admin\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'app_admin_event_new', '_controller' => 'App\\Controller\\Admin\\EventController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'app_admin_event_edit', '_controller' => 'App\\Controller\\Admin\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        298 => [[['_route' => 'app_admin_event_delete', '_controller' => 'App\\Controller\\Admin\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        332 => [[['_route' => 'admin_utilisateur_show', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        345 => [[['_route' => 'admin_utilisateur_edit', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [[['_route' => 'admin_utilisateur_delete', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        385 => [[['_route' => 'app_maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'app_maintenance_edit', '_controller' => 'App\\Controller\\MaintenanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [[['_route' => 'app_maintenance_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        440 => [[['_route' => 'point_relais_show', '_controller' => 'App\\Controller\\PointRelaisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        453 => [[['_route' => 'point_relais_edit', '_controller' => 'App\\Controller\\PointRelaisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        461 => [[['_route' => 'point_relais_delete', '_controller' => 'App\\Controller\\PointRelaisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        494 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        507 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        515 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        545 => [[['_route' => 'admin_trottinette_show', '_controller' => 'App\\Controller\\Admin\\TrottinetteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        563 => [[['_route' => 'admin_trottinette_edit', '_controller' => 'App\\Controller\\Admin\\TrottinetteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        583 => [[['_route' => 'admin_trottinette_delete', '_controller' => 'App\\Controller\\Admin\\TrottinetteController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        624 => [[['_route' => 'reservation_create', '_controller' => 'App\\Controller\\Client\\ReservationController::create'], ['trottinette_id'], ['POST' => 0], null, false, true, null]],
        656 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        672 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        688 => [[['_route' => 'reclamation_repondre', '_controller' => 'App\\Controller\\ReclamationController::repondre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        697 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        716 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        734 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        754 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        787 => [[['_route' => 'app_public_event_show', '_controller' => 'App\\Controller\\PublicEventController::show'], ['id'], null, null, false, true, null]],
        807 => [[['_route' => 'app_public_event_participate', '_controller' => 'App\\Controller\\PublicEventController::participate'], ['id'], ['POST' => 0], null, false, false, null]],
        846 => [[['_route' => 'app_event_participate', '_controller' => 'App\\Controller\\EventController::participate'], ['id'], ['POST' => 0], null, false, false, null]],
        857 => [[['_route' => 'app_event_participants', '_controller' => 'App\\Controller\\EventController::participants'], ['id'], ['GET' => 0], null, false, false, null]],
        887 => [[['_route' => 'app_event_cancel_participation', '_controller' => 'App\\Controller\\EventController::cancelParticipation'], ['id'], ['POST' => 0], null, false, false, null]],
        899 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        908 => [
            [['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        940 => [[['_route' => 'app_trottinette_show', '_controller' => 'App\\Controller\\TrottinetteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        958 => [[['_route' => 'app_trottinette_edit', '_controller' => 'App\\Controller\\TrottinetteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        978 => [
            [['_route' => 'app_trottinette_delete', '_controller' => 'App\\Controller\\TrottinetteController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
