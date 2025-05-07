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
        '/admin/events/generate-details' => [[['_route' => 'app_admin_event_generate_details', '_controller' => 'App\\Controller\\Admin\\EventController::generateDetailsFromDescription'], null, ['POST' => 0], null, false, false, null]],
        '/admin/events' => [[['_route' => 'app_admin_events', '_controller' => 'App\\Controller\\Admin\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/events/new' => [[['_route' => 'app_admin_event_new', '_controller' => 'App\\Controller\\Admin\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/maintenance' => [[['_route' => 'admin_maintenance_index', '_controller' => 'App\\Controller\\Admin\\MaintenanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/maintenance/calendar' => [[['_route' => 'admin_maintenance_calendar', '_controller' => 'App\\Controller\\Admin\\MaintenanceController::calendarView'], null, ['GET' => 0], null, false, false, null]],
        '/admin/maintenance/new' => [[['_route' => 'admin_maintenance_new', '_controller' => 'App\\Controller\\Admin\\MaintenanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_utilisateur_index', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateurs/new' => [[['_route' => 'admin_utilisateur_new', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chat' => [[['_route' => 'chat', '_controller' => 'App\\Controller\\ChatController::chatPage'], null, null, null, false, false, null]],
        '/chat/message' => [[['_route' => 'chat_message', '_controller' => 'App\\Controller\\ChatController::chatMessage'], null, ['POST' => 0], null, false, false, null]],
        '/client/dashboard' => [[['_route' => 'client_dashboard', '_controller' => 'App\\Controller\\Client\\DashboardController::dashboard'], null, null, null, false, false, null]],
        '/client/dashboard/qr-scan' => [[['_route' => 'client_qr_scan', '_controller' => 'App\\Controller\\Client\\DashboardController::qrScan'], null, ['GET' => 0], null, false, false, null]],
        '/client/dashboard/map' => [[['_route' => 'client_map_display', '_controller' => 'App\\Controller\\Client\\DashboardController::mapDisplay'], null, ['GET' => 0], null, false, false, null]],
        '/client/event' => [[['_route' => 'client_event_index', '_controller' => 'App\\Controller\\Client\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/event/new' => [[['_route' => 'client_event_new', '_controller' => 'App\\Controller\\Client\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mon-profil' => [[['_route' => 'app_client_profile_view', '_controller' => 'App\\Controller\\Client\\ProfileController::view'], null, ['GET' => 0], null, false, false, null]],
        '/mon-profil/edit' => [[['_route' => 'app_client_profile_edit', '_controller' => 'App\\Controller\\Client\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mon-profil/setup-face' => [[['_route' => 'app_client_profile_setup_face', '_controller' => 'App\\Controller\\Client\\ProfileController::setupFacialRecognition'], null, ['POST' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\Client\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\Client\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connexion-page' => [[['_route' => 'app_login_page', '_controller' => 'App\\Controller\\LoginController::loginPage'], null, ['GET' => 0], null, false, false, null]],
        '/login/authenticate-password' => [[['_route' => 'app_login_authenticate_password', '_controller' => 'App\\Controller\\LoginController::loginAuthenticatePassword'], null, ['POST' => 0], null, false, false, null]],
        '/login/check-email-caps' => [[['_route' => 'app_login_check_email_caps', '_controller' => 'App\\Controller\\LoginController::checkEmailAndCapabilities'], null, ['POST' => 0], null, false, false, null]],
        '/login/authenticate-face' => [[['_route' => 'app_login_authenticate_face', '_controller' => 'App\\Controller\\LoginController::authenticateFace'], null, ['POST' => 0], null, false, false, null]],
        '/partenaire/dashboard' => [[['_route' => 'app_partenaire_dashboard', '_controller' => 'App\\Controller\\Partenaire\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/point-relais' => [[['_route' => 'point_relais_index', '_controller' => 'App\\Controller\\PointRelaisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/point-relais/new' => [[['_route' => 'point_relais_new', '_controller' => 'App\\Controller\\PointRelaisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trottinettes' => [
            [['_route' => 'public_trottinette_index', '_controller' => 'App\\Controller\\Public\\PublicTrottinetteController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_trottinette_index', '_controller' => 'App\\Controller\\TrottinetteController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\Public\\ResetPasswordController::request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\Public\\ResetPasswordController::checkEmail'], null, ['GET' => 0], null, false, false, null]],
        '/events' => [[['_route' => 'public_event_index', '_controller' => 'App\\Controller\\PublicEventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamations/create' => [[['_route' => 'create_reclamation', '_controller' => 'App\\Controller\\ReclamationController::createReclamation'], null, null, null, false, false, null]],
        '/reclamations' => [
            [['_route' => 'reclamation_list', '_controller' => 'App\\Controller\\ReclamationController::listReclamations'], null, null, null, false, false, null],
            [['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/admin/reclamations' => [[['_route' => 'admin_reclamations', '_controller' => 'App\\Controller\\ReclamationController::manageReclamations'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/reservations/stats' => [[['_route' => 'reservation_stats', '_controller' => 'App\\Controller\\ReservationController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservations/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trottinettes/new' => [[['_route' => 'app_trottinette_new', '_controller' => 'App\\Controller\\TrottinetteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamations/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/trottinettes/new' => [[['_route' => 'admin_trottinette_new', '_controller' => 'App\\Controller\\Admin\\TrottinetteController::new'], null, null, null, false, false, null]],
        '/admin/trottinettes' => [[['_route' => 'admin_trottinette_index', '_controller' => 'App\\Controller\\Admin\\TrottinetteController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:133)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:170)'
                                .'|router(*:184)'
                                .'|exception(?'
                                    .'|(*:204)'
                                    .'|\\.css(*:217)'
                                .')'
                            .')'
                            .'|(*:227)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|events/(?'
                        .'|(\\d+)(*:263)'
                        .'|(\\d+)/edit(*:281)'
                        .'|(\\d+)(*:294)'
                        .'|(\\d+)/participants(*:320)'
                    .')'
                    .'|maintenance/([^/]++)(?'
                        .'|(*:352)'
                        .'|/edit(*:365)'
                        .'|(*:373)'
                    .')'
                    .'|utilisateurs/([^/]++)(?'
                        .'|(*:406)'
                        .'|/edit(*:419)'
                        .'|(*:427)'
                    .')'
                    .'|point\\-relais/([^/]++)(?'
                        .'|(*:461)'
                        .'|/edit(*:474)'
                        .'|(*:482)'
                    .')'
                    .'|re(?'
                        .'|clamation/([^/]++)/(?'
                            .'|edit(*:522)'
                            .'|delete(*:536)'
                            .'|add_response(*:556)'
                            .'|responses(*:573)'
                        .')'
                        .'|s(?'
                            .'|ponse/([^/]++)/(?'
                                .'|edit(*:608)'
                                .'|delete(*:622)'
                            .')'
                            .'|ervations/([^/]++)(?'
                                .'|(*:652)'
                                .'|/edit(*:665)'
                                .'|(*:673)'
                            .')'
                        .')'
                    .')'
                    .'|trottinettes/(?'
                        .'|(\\d+)(*:705)'
                        .'|(\\d+)/edit(*:723)'
                        .'|(\\d+)/delete(*:743)'
                    .')'
                .')'
                .'|/client/event/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|participa(?'
                                .'|te(*:799)'
                                .'|nts(*:810)'
                            .')'
                            .'|cancel\\-participation(*:840)'
                            .'|edit(*:852)'
                        .')'
                        .'|(*:861)'
                    .')'
                    .'|participation/(\\d+)/confirmation(*:902)'
                .')'
                .'|/re(?'
                    .'|clamation(?'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|(*:944)'
                                .'|/edit(*:957)'
                                .'|(*:965)'
                            .')'
                            .'|reclamation/([^/]++)/repondre(*:1003)'
                            .'|([^/]++)/(?'
                                .'|edit(*:1028)'
                                .'|delete(*:1043)'
                            .')'
                        .')'
                        .'|s/(?'
                            .'|(\\d+)(?'
                                .'|(*:1067)'
                            .')'
                            .'|(\\d+)/edit(*:1087)'
                            .'|(\\d+)/delete(*:1108)'
                        .')'
                    .')'
                    .'|se(?'
                        .'|rvation/create/([^/]++)(*:1147)'
                        .'|t\\-password/reset(?:/([^/]++))?(*:1187)'
                    .')'
                .')'
                .'|/event(?'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|participa(?'
                                .'|te(*:1237)'
                                .'|nts(*:1249)'
                            .')'
                            .'|cancel\\-participation(*:1280)'
                            .'|edit(*:1293)'
                        .')'
                        .'|(*:1303)'
                    .')'
                    .'|s/(?'
                        .'|(\\d+)(*:1323)'
                        .'|([^/]++)/ticket(*:1347)'
                    .')'
                .')'
                .'|/participation/(\\d+)/details(*:1386)'
                .'|/trottinettes/(?'
                    .'|(\\d+)(*:1417)'
                    .'|(\\d+)/edit(*:1436)'
                    .'|(\\d+)/delete(*:1457)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        133 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        204 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        217 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        227 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        263 => [[['_route' => 'app_admin_event_show', '_controller' => 'App\\Controller\\Admin\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        281 => [[['_route' => 'app_admin_event_edit', '_controller' => 'App\\Controller\\Admin\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        294 => [[['_route' => 'app_admin_event_delete', '_controller' => 'App\\Controller\\Admin\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        320 => [[['_route' => 'app_admin_event_participants', '_controller' => 'App\\Controller\\Admin\\EventController::eventParticipants'], ['id'], ['GET' => 0], null, false, false, null]],
        352 => [[['_route' => 'admin_maintenance_show', '_controller' => 'App\\Controller\\Admin\\MaintenanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        365 => [[['_route' => 'admin_maintenance_edit', '_controller' => 'App\\Controller\\Admin\\MaintenanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        373 => [[['_route' => 'admin_maintenance_delete', '_controller' => 'App\\Controller\\Admin\\MaintenanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        406 => [[['_route' => 'admin_utilisateur_show', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        419 => [[['_route' => 'admin_utilisateur_edit', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        427 => [[['_route' => 'admin_utilisateur_delete', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        461 => [[['_route' => 'point_relais_show', '_controller' => 'App\\Controller\\PointRelaisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        474 => [[['_route' => 'point_relais_edit', '_controller' => 'App\\Controller\\PointRelaisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        482 => [[['_route' => 'point_relais_delete', '_controller' => 'App\\Controller\\PointRelaisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        522 => [[['_route' => 'edit_reclamation', '_controller' => 'App\\Controller\\ReclamationController::editReclamationAdmin'], ['id'], null, null, false, false, null]],
        536 => [[['_route' => 'delete_reclamation', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamationAdmin'], ['id'], null, null, false, false, null]],
        556 => [[['_route' => 'add_response', '_controller' => 'App\\Controller\\ReclamationController::addResponse'], ['id'], null, null, false, false, null]],
        573 => [[['_route' => 'view_responses', '_controller' => 'App\\Controller\\ReclamationController::viewResponses'], ['id'], null, null, false, false, null]],
        608 => [[['_route' => 'edit_response', '_controller' => 'App\\Controller\\ReclamationController::editResponse'], ['id'], null, null, false, false, null]],
        622 => [[['_route' => 'delete_response', '_controller' => 'App\\Controller\\ReclamationController::deleteResponse'], ['id'], null, null, false, false, null]],
        652 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        665 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        673 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        705 => [[['_route' => 'admin_trottinette_show', '_controller' => 'App\\Controller\\Admin\\TrottinetteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        723 => [[['_route' => 'admin_trottinette_edit', '_controller' => 'App\\Controller\\Admin\\TrottinetteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        743 => [[['_route' => 'admin_trottinette_delete', '_controller' => 'App\\Controller\\Admin\\TrottinetteController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        799 => [[['_route' => 'client_event_participate', '_controller' => 'App\\Controller\\Client\\EventController::participate'], ['id'], ['POST' => 0], null, false, false, null]],
        810 => [[['_route' => 'client_event_participants', '_controller' => 'App\\Controller\\Client\\EventController::participants'], ['id'], ['GET' => 0], null, false, false, null]],
        840 => [[['_route' => 'client_event_cancel_participation', '_controller' => 'App\\Controller\\Client\\EventController::cancelParticipation'], ['id'], ['POST' => 0], null, false, false, null]],
        852 => [[['_route' => 'client_event_edit', '_controller' => 'App\\Controller\\Client\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        861 => [
            [['_route' => 'client_event_show', '_controller' => 'App\\Controller\\Client\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'client_event_delete', '_controller' => 'App\\Controller\\Client\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        902 => [[['_route' => 'client_participation_confirmation', '_controller' => 'App\\Controller\\Client\\EventController::participationConfirmation'], ['id'], ['GET' => 0], null, false, false, null]],
        944 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\Client\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        957 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\Client\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        965 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\Client\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1003 => [[['_route' => 'reclamation_repondre', '_controller' => 'App\\Controller\\Client\\ReclamationController::repondre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1028 => [[['_route' => 'edit_reclamation_front', '_controller' => 'App\\Controller\\ReclamationController::editReclamationFront'], ['id'], null, null, false, false, null]],
        1043 => [[['_route' => 'delete_reclamation_front', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamationFront'], ['id'], null, null, false, false, null]],
        1067 => [
            [['_route' => 'show_reclamation', '_controller' => 'App\\Controller\\ReclamationController::showReclamation'], ['id'], null, null, false, true, null],
            [['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1087 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1108 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1147 => [[['_route' => 'reservation_create', '_controller' => 'App\\Controller\\Client\\ReservationController::create'], ['trottinette_id'], ['POST' => 0], null, false, true, null]],
        1187 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\Public\\ResetPasswordController::reset'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1237 => [[['_route' => 'app_event_participate', '_controller' => 'App\\Controller\\EventController::participate'], ['id'], ['POST' => 0], null, false, false, null]],
        1249 => [[['_route' => 'app_event_participants', '_controller' => 'App\\Controller\\EventController::participants'], ['id'], ['GET' => 0], null, false, false, null]],
        1280 => [[['_route' => 'app_event_cancel_participation', '_controller' => 'App\\Controller\\EventController::cancelParticipation'], ['id'], ['POST' => 0], null, false, false, null]],
        1293 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1303 => [
            [['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1323 => [[['_route' => 'public_event_show', '_controller' => 'App\\Controller\\PublicEventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1347 => [[['_route' => 'public_event_download_ticket', '_controller' => 'App\\Controller\\PublicEventController::downloadTicket'], ['id'], ['GET' => 0], null, false, false, null]],
        1386 => [[['_route' => 'participation_details', '_controller' => 'App\\Controller\\ParticipationController::showDetails'], ['id'], ['GET' => 0], null, false, false, null]],
        1417 => [[['_route' => 'app_trottinette_show', '_controller' => 'App\\Controller\\TrottinetteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1436 => [[['_route' => 'app_trottinette_edit', '_controller' => 'App\\Controller\\TrottinetteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1457 => [
            [['_route' => 'app_trottinette_delete', '_controller' => 'App\\Controller\\TrottinetteController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
