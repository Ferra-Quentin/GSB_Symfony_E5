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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/etat/list' => [[['_route' => 'crud_etat_index', '_controller' => 'App\\Controller\\CrudEtatController::index'], null, ['GET' => 0], null, false, false, null]],
        '/etat/nouveau' => [[['_route' => 'crud_etat_new', '_controller' => 'App\\Controller\\CrudEtatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/gestion' => [[['_route' => 'gestion', '_controller' => 'App\\Controller\\DefaultController::gestion'], null, null, null, false, false, null]],
        '/equipements' => [[['_route' => 'equipements', '_controller' => 'App\\Controller\\DefaultController::equipements'], null, null, null, false, false, null]],
        '/tout_les_utilisateur' => [[['_route' => 'tout_utilisateur', '_controller' => 'App\\Controller\\DefaultController::liste'], null, null, null, false, false, null]],
        '/listes_users_caruciens' => [[['_route' => 'users_cahors', '_controller' => 'App\\Controller\\DefaultController::listeCahors'], null, null, null, false, false, null]],
        '/listes_users_ayant_frais' => [[['_route' => 'users_ayant_frais', '_controller' => 'App\\Controller\\DefaultController::ayantFrais'], null, null, null, false, false, null]],
        '/listes_users_sans_frais' => [[['_route' => 'users_sans_frais', '_controller' => 'App\\Controller\\DefaultController::sansFrais'], null, null, null, false, false, null]],
        '/nombre_frais' => [[['_route' => 'users_nombre_frais', '_controller' => 'App\\Controller\\DefaultController::nombreFrais'], null, null, null, false, false, null]],
        '/domaines' => [[['_route' => 'domaines', '_controller' => 'App\\Controller\\DefaultController::domaines'], null, null, null, false, false, null]],
        '/fichefrais' => [[['_route' => 'fichefrais_crud_index', '_controller' => 'App\\Controller\\FichefraisCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fichefrais/nouveau' => [[['_route' => 'fichefrais_crud_new', '_controller' => 'App\\Controller\\FichefraisCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fraisforfait/lesFraisForfait' => [[['_route' => 'fraisforfait_crud_index', '_controller' => 'App\\Controller\\FraisforfaitCrudController::index'], null, ['GET' => 0], null, false, false, null]],
        '/fraisforfait/nouveau' => [[['_route' => 'fraisforfait_crud_new', '_controller' => 'App\\Controller\\FraisforfaitCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/etat(?'
                    .'|/(?'
                        .'|voir/([^/]++)(*:193)'
                        .'|modifier(?:/([^/]++))?(*:223)'
                    .')'
                    .'|remove/([^/]++)(*:247)'
                .')'
                .'|/f(?'
                    .'|ichefrais(?'
                        .'|/(?'
                            .'|([^/]++)(*:285)'
                            .'|Modifier/([^/]++)(*:310)'
                        .')'
                        .'|supprimer/([^/]++)(*:337)'
                    .')'
                    .'|raisforfait/(?'
                        .'|([^/]++)(*:369)'
                        .'|modifier/([^/]++)(*:394)'
                        .'|supprimer/([^/]++)(*:420)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        193 => [[['_route' => 'crud_etat_show', '_controller' => 'App\\Controller\\CrudEtatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        223 => [[['_route' => 'crud_etat_edit', 'id' => 'EN', '_controller' => 'App\\Controller\\CrudEtatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        247 => [[['_route' => 'crud_etat_delete', '_controller' => 'App\\Controller\\CrudEtatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        285 => [[['_route' => 'fichefrais_crud_show', '_controller' => 'App\\Controller\\FichefraisCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        310 => [[['_route' => 'fichefrais_crud_edit', '_controller' => 'App\\Controller\\FichefraisCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        337 => [[['_route' => 'fichefrais_crud_delete', '_controller' => 'App\\Controller\\FichefraisCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        369 => [[['_route' => 'fraisforfait_crud_show', '_controller' => 'App\\Controller\\FraisforfaitCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'fraisforfait_crud_edit', '_controller' => 'App\\Controller\\FraisforfaitCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        420 => [
            [['_route' => 'fraisforfait_crud_delete', '_controller' => 'App\\Controller\\FraisforfaitCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
