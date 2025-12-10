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
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'app_admin_user_new', '_controller' => 'App\\Controller\\AdminController::newUser'], null, ['POST' => 0], null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'app_admin_category_new', '_controller' => 'App\\Controller\\AdminController::newCategory'], null, ['POST' => 0], null, false, false, null]],
        '/admin/transactions' => [[['_route' => 'app_admin_transactions', '_controller' => 'App\\Controller\\AdminController::transactions'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/transactions' => [[['_route' => 'app_transactions', '_controller' => 'App\\Controller\\TransactionsController::index'], null, null, null, false, false, null]],
        '/transactions/new' => [[['_route' => 'app_transactions_new', '_controller' => 'App\\Controller\\TransactionsController::new'], null, ['POST' => 0], null, false, false, null]],
        '/reports' => [[['_route' => 'app_reports', '_controller' => 'App\\Controller\\ReportsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/reports/chart-data' => [[['_route' => 'api_reports_chart_data', '_controller' => 'App\\Controller\\ReportsController::getChartData'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|user/([^/]++)/(?'
                        .'|toggle\\-admin(*:242)'
                        .'|edit(*:254)'
                        .'|delete(*:268)'
                    .')'
                    .'|category/([^/]++)/(?'
                        .'|edit(*:302)'
                        .'|delete(*:316)'
                    .')'
                    .'|transaction/([^/]++)/delete(*:352)'
                .')'
                .'|/transactions/([^/]++)/(?'
                    .'|delete(*:393)'
                    .'|update(*:407)'
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
        242 => [[['_route' => 'app_admin_toggle_admin', '_controller' => 'App\\Controller\\AdminController::toggleAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        254 => [[['_route' => 'app_admin_user_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], ['POST' => 0], null, false, false, null]],
        268 => [[['_route' => 'app_admin_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], ['POST' => 0], null, false, false, null]],
        302 => [[['_route' => 'app_admin_category_edit', '_controller' => 'App\\Controller\\AdminController::editCategory'], ['id'], ['POST' => 0], null, false, false, null]],
        316 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\AdminController::deleteCategory'], ['id'], ['POST' => 0], null, false, false, null]],
        352 => [[['_route' => 'app_admin_transaction_delete', '_controller' => 'App\\Controller\\AdminController::deleteTransaction'], ['id'], ['POST' => 0], null, false, false, null]],
        393 => [[['_route' => 'app_transactions_delete', '_controller' => 'App\\Controller\\TransactionsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        407 => [
            [['_route' => 'app_transactions_update', '_controller' => 'App\\Controller\\TransactionsController::updateTransactions'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
