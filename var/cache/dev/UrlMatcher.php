<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/graphql' => [[['_route' => 'api_graphql_entrypoint', '_controller' => 'api_platform.graphql.action.entrypoint', '_graphql' => true], null, null, null, false, false, null]],
        '/api/graphql/graphiql' => [[['_route' => 'api_graphql_graphiql', '_controller' => 'api_platform.graphql.action.graphiql', '_graphql' => true], null, null, null, false, false, null]],
        '/api/graphql/graphql_playground' => [[['_route' => 'api_graphql_graphql_playground', '_controller' => 'api_platform.graphql.action.graphql_playground', '_graphql' => true], null, null, null, false, false, null]],
        '/bolt/api' => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.swagger.action.ui'], null, null, null, false, false, null]],
        '/bolt/login' => [[['_route' => 'bolt_login', '_controller' => 'Bolt\\Controller\\Backend\\AuthenticationController::login'], null, null, null, false, false, null]],
        '/bolt/logout' => [[['_route' => 'bolt_logout', '_controller' => 'Bolt\\Controller\\Backend\\AuthenticationController::logout'], null, null, null, false, false, null]],
        '/bolt/resetpassword' => [[['_route' => 'bolt_resetpassword', '_controller' => 'Bolt\\Controller\\Backend\\AuthenticationController::resetPassword'], null, null, null, false, false, null]],
        '/bolt/bulk/delete' => [[['_route' => 'bolt_bulk_delete', '_controller' => 'Bolt\\Controller\\Backend\\BulkOperationsController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/bolt/clearcache' => [[['_route' => 'bolt_clear_cache', '_controller' => 'Bolt\\Controller\\Backend\\ClearCacheController::index'], null, null, null, false, false, null]],
        '/bolt' => [[['_route' => 'bolt_dashboard', '_controller' => 'Bolt\\Controller\\Backend\\DashboardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bolt/database-check' => [[['_route' => 'bolt_database_check', '_controller' => 'Bolt\\Controller\\Backend\\DatabaseIntegrityController::check'], null, null, null, false, false, null]],
        '/bolt/database-update' => [[['_route' => 'bolt_database_update', '_controller' => 'Bolt\\Controller\\Backend\\DatabaseIntegrityController::update'], null, null, null, false, false, null]],
        '/bolt/extensions' => [[['_route' => 'bolt_extensions', '_controller' => 'Bolt\\Controller\\Backend\\ExtensionsController::index'], null, null, null, false, false, null]],
        '/bolt/file-delete' => [[['_route' => 'bolt_file_delete', '_controller' => 'Bolt\\Controller\\Backend\\FileEditController::handleDelete'], null, ['POST' => 0, 'GET' => 1], null, true, false, null]],
        '/bolt/file-duplicate' => [[['_route' => 'bolt_file_duplicate', '_controller' => 'Bolt\\Controller\\Backend\\FileEditController::handleDuplicate'], null, ['POST' => 0, 'GET' => 1], null, true, false, null]],
        '/bolt/fixtures' => [[['_route' => 'bolt_fixtures', '_controller' => 'Bolt\\Controller\\Backend\\FixturesController::fixtures'], null, null, null, false, false, null]],
        '/bolt/about' => [[['_route' => 'bolt_about', '_controller' => 'Bolt\\Controller\\Backend\\GeneralController::about'], null, null, null, false, false, null]],
        '/bolt/kitchensink' => [[['_route' => 'bolt_kitchensink', '_controller' => 'Bolt\\Controller\\Backend\\GeneralController::kitchensink'], null, null, null, false, false, null]],
        '/bolt/logviewer' => [[['_route' => 'bolt_logviewer', '_controller' => 'Bolt\\Controller\\Backend\\LogViewerController::index'], null, ['GET' => 0], null, false, false, null]],
        '/bolt/media/new' => [[['_route' => 'bolt_media_new', '_controller' => 'Bolt\\Controller\\Backend\\MediaEditController::new'], null, ['GET' => 0], null, false, false, null]],
        '/bolt/omnisearch' => [[['_route' => 'bolt_omnisearch', '_controller' => 'Bolt\\Controller\\Backend\\OmnisearchController::omnisearch'], null, null, null, false, false, null]],
        '/bolt/profile-edit' => [
            [['_route' => 'bolt_profile_edit', '_controller' => 'Bolt\\Controller\\Backend\\ProfileController::edit'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'bolt_profile_edit_post', '_controller' => 'Bolt\\Controller\\Backend\\ProfileController::save'], null, ['POST' => 0], null, false, false, null],
        ],
        '/bolt/users' => [[['_route' => 'bolt_users', '_controller' => 'Bolt\\Controller\\Backend\\UserController::users'], null, null, null, false, false, null]],
        '/bolt/async/embed' => [[['_route' => 'bolt_embed', '_controller' => 'Bolt\\Controller\\Backend\\Async\\EmbedController::fetchEmbed'], null, ['POST' => 0], null, false, false, null]],
        '/bolt/async/list_files' => [[['_route' => 'bolt_async_filelisting', '_controller' => 'Bolt\\Controller\\Backend\\Async\\FileListingController::index'], null, ['GET' => 0], null, false, false, null]],
        '/bolt/async/upload' => [[['_route' => 'bolt_async_upload', '_controller' => 'Bolt\\Controller\\Backend\\Async\\UploadController::handleUpload'], null, ['POST' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'Bolt\\Controller\\Frontend\\HomepageController::homepage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'Bolt\\Controller\\Frontend\\SearchController::search'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|docs(?:\\.([^/]++))?(*:34)'
                    .'|conte(?'
                        .'|xts/(.+)(?:\\.([^/]++))?(*:72)'
                        .'|nts(?'
                            .'|(?:\\.([^/]++))?(*:100)'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(*:137)'
                                .'|([^/]++)/fields(?:\\.([^/]++))?(*:175)'
                            .')'
                        .')'
                    .')'
                    .'|relations(?'
                        .'|(?:\\.([^/]++))?(*:213)'
                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:247)'
                    .')'
                    .'|fields(?'
                        .'|(?:\\.([^/]++))?(*:280)'
                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:314)'
                    .')'
                .')'
                .'|/bolt/(?'
                    .'|bulk/status/([^/]++)(*:353)'
                    .'|new/([^/]++)(*:373)'
                    .'|e(?'
                        .'|dit(?'
                            .'|/(\\d+)(?'
                                .'|(*:400)'
                            .')'
                            .'|_locales/([^/]++)(*:426)'
                        .')'
                        .'|xtensions/(.+)(*:449)'
                    .')'
                    .'|preview/(\\d+)(*:471)'
                    .'|d(?'
                        .'|uplicate/(\\d+)(?'
                            .'|(*:500)'
                        .')'
                        .'|elete/(\\d+)(*:520)'
                    .')'
                    .'|status/(\\d+)(*:541)'
                    .'|file(?'
                        .'|\\-edit/([^/]++)(?'
                            .'|(*:574)'
                        .')'
                        .'|manager/([^/]++)(*:599)'
                    .')'
                    .'|content(?:/([^/]++))?(*:629)'
                    .'|me(?'
                        .'|dia/(?'
                            .'|crawl/([^/]++)(*:663)'
                            .'|edit/([^/]++)(?'
                                .'|(*:687)'
                            .')'
                        .')'
                        .'|nu/([^/]++)(*:708)'
                    .')'
                    .'|user\\-(?'
                        .'|edit/(\\d+)(?'
                            .'|(*:739)'
                        .')'
                        .'|d(?'
                            .'|isable/(\\d+)(*:764)'
                            .'|elete/(\\d+)(*:783)'
                        .')'
                    .')'
                    .'|_trans(?'
                        .'|(?:/([^/]++))?(*:816)'
                        .'|/([^/]++)/([^/]++)/([^/]++)(?'
                            .'|(*:854)'
                            .'|/new(*:866)'
                            .'|(*:874)'
                        .')'
                    .')'
                .')'
                .'|/thumbs/([^/]++)/(.+)(*:906)'
                .'|/([^/]++)/translation/(?'
                    .'|edit(*:943)'
                    .'|sync(?'
                        .'|(*:958)'
                        .'|_all(*:970)'
                    .')'
                    .'|create_assets(*:992)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1032)'
                    .'|wdt/([^/]++)(*:1053)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1100)'
                            .'|router(*:1115)'
                            .'|exception(?'
                                .'|(*:1136)'
                                .'|\\.css(*:1150)'
                            .')'
                        .')'
                        .'|(*:1161)'
                    .')'
                .')'
                .'|/(homepage|pages|articles|blocks|page|article|block)/([^/]++)(*:1233)'
                .'|/(en|nl|es|fr|de|pl|it|hu|pt_BR|ja|nb|nn|nl_NL|nl_BE|is|ru)/(homepage|pages|articles|blocks|page|article|block)/([^/]++)(*:1362)'
                .'|/(en|nl|es|fr|de|pl|it|hu|pt_BR|ja|nb|nn|nl_NL|nl_BE|is|ru)(*:1430)'
                .'|/(homepage|pages|articles|blocks|page|article|block)(*:1491)'
                .'|/(en|nl|es|fr|de|pl|it|hu|pt_BR|ja|nb|nn|nl_NL|nl_BE|is|ru)/(homepage|pages|articles|blocks|page|article|block)(*:1611)'
                .'|/([^/]++)/search(*:1636)'
                .'|/(tags|groups|categories|tag|group|category)/([^/]++)(*:1698)'
                .'|/(en|nl|es|fr|de|pl|it|hu|pt_BR|ja|nb|nn|nl_NL|nl_BE|is|ru)/(tags|groups|categories|tag|group|category)/([^/]++)(*:1819)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        100 => [[['_route' => 'api_contents_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'Bolt\\Entity\\Content', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        137 => [[['_route' => 'api_contents_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'Bolt\\Entity\\Content', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        175 => [[['_route' => 'api_contents_fields_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'Bolt\\Entity\\Field', '_api_subresource_operation_name' => 'api_contents_fields_get_subresource', '_api_subresource_context' => ['property' => 'fields', 'identifiers' => [['id', 'Bolt\\Entity\\Content', true]], 'collection' => true, 'operationId' => 'api_contents_fields_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'api_relations_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'Bolt\\Entity\\Relation', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        247 => [[['_route' => 'api_relations_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'Bolt\\Entity\\Relation', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'api_fields_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'Bolt\\Entity\\Field', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'api_fields_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'Bolt\\Entity\\Field', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'bolt_bulk_status', '_controller' => 'Bolt\\Controller\\Backend\\BulkOperationsController::status'], ['status'], ['POST' => 0], null, false, true, null]],
        373 => [[['_route' => 'bolt_content_new', '_controller' => 'Bolt\\Controller\\Backend\\ContentEditController::new'], ['contentType'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        400 => [
            [['_route' => 'bolt_content_edit', '_controller' => 'Bolt\\Controller\\Backend\\ContentEditController::edit'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'bolt_content_edit_post', '_controller' => 'Bolt\\Controller\\Backend\\ContentEditController::save'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        426 => [[['_route' => 'bolt_content_edit_locales', '_controller' => 'Bolt\\Controller\\Backend\\ContentLocalizationController::locales'], ['id'], ['GET' => 0], null, false, true, null]],
        449 => [[['_route' => 'bolt_extensions_view', '_controller' => 'Bolt\\Controller\\Backend\\ExtensionsController::viewExtension'], ['name'], null, null, false, true, null]],
        471 => [[['_route' => 'bolt_content_edit_preview', '_controller' => 'Bolt\\Controller\\Backend\\ContentEditController::preview'], ['id'], ['POST' => 0], null, false, true, null]],
        500 => [
            [['_route' => 'bolt_content_duplicate', '_controller' => 'Bolt\\Controller\\Backend\\ContentEditController::duplicate'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'bolt_content_duplicate_post', '_controller' => 'Bolt\\Controller\\Backend\\ContentEditController::duplicateSave'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        520 => [[['_route' => 'bolt_content_delete', '_controller' => 'Bolt\\Controller\\Backend\\ContentEditController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        541 => [[['_route' => 'bolt_content_status', '_controller' => 'Bolt\\Controller\\Backend\\ContentEditController::status'], ['id'], ['GET' => 0], null, false, true, null]],
        574 => [
            [['_route' => 'bolt_file_edit', '_controller' => 'Bolt\\Controller\\Backend\\FileEditController::edit'], ['location'], ['GET' => 0], null, false, true, null],
            [['_route' => 'bolt_file-edit_post', '_controller' => 'Bolt\\Controller\\Backend\\FileEditController::save'], ['location'], ['POST' => 0], null, false, true, null],
        ],
        599 => [[['_route' => 'bolt_filemanager', '_controller' => 'Bolt\\Controller\\Backend\\FilemanagerController::filemanager'], ['location'], ['GET' => 0], null, false, true, null]],
        629 => [[['_route' => 'bolt_content_overview', 'contentType' => '', '_controller' => 'Bolt\\Controller\\Backend\\ListingController::overview'], ['contentType'], null, null, false, true, null]],
        663 => [[['_route' => 'bolt_media_crawler', '_controller' => 'Bolt\\Controller\\Backend\\MediaController::finder'], ['location'], ['GET' => 0], null, false, true, null]],
        687 => [
            [['_route' => 'bolt_media_edit', '_controller' => 'Bolt\\Controller\\Backend\\MediaEditController::edit'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'bolt_media_edit_post', '_controller' => 'Bolt\\Controller\\Backend\\MediaEditController::save'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        708 => [[['_route' => 'bolt_menupage', '_controller' => 'Bolt\\Controller\\Backend\\MenuPageController::menuPage'], ['slug'], ['GET' => 0], null, false, true, null]],
        739 => [
            [['_route' => 'bolt_user_edit', '_controller' => 'Bolt\\Controller\\Backend\\UserEditController::edit'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'bolt_user_edit_post', '_controller' => 'Bolt\\Controller\\Backend\\UserEditController::save'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        764 => [[['_route' => 'bolt_user_disable', '_controller' => 'Bolt\\Controller\\Backend\\UserEditController::disable'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        783 => [[['_route' => 'bolt_user_delete', '_controller' => 'Bolt\\Controller\\Backend\\UserEditController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        816 => [[['_route' => 'translation_index', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::indexAction', 'configName' => null], ['configName'], ['GET' => 0], null, false, true, null]],
        854 => [[['_route' => 'translation_show', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::showAction'], ['configName', 'locale', 'domain'], ['GET' => 0], null, false, true, null]],
        866 => [[['_route' => 'translation_create', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::createAction'], ['configName', 'locale', 'domain'], ['POST' => 0], null, false, false, null]],
        874 => [
            [['_route' => 'translation_edit', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::editAction'], ['configName', 'locale', 'domain'], ['POST' => 0], null, false, true, null],
            [['_route' => 'translation_delete', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::deleteAction'], ['configName', 'locale', 'domain'], ['DELETE' => 0], null, false, true, null],
        ],
        906 => [[['_route' => 'thumbnail', '_controller' => 'Bolt\\Controller\\ImageController::thumbnail'], ['paramString', 'filename'], ['GET' => 0], null, false, true, null]],
        943 => [[['_route' => 'php_translation_profiler_translation_edit', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::editAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        958 => [[['_route' => 'php_translation_profiler_translation_sync', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::syncAction'], ['token'], ['POST' => 0], null, false, false, null]],
        970 => [[['_route' => 'php_translation_profiler_translation_sync_all', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::syncAllAction'], ['token'], ['POST' => 0], null, false, false, null]],
        992 => [[['_route' => 'php_translation_profiler_translation_create_assets', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::createAssetsAction'], ['token'], ['POST' => 0], null, false, false, null]],
        1032 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1053 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1100 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1115 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1150 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1161 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1233 => [[['_route' => 'record', 'contentTypeSlug' => null, '_controller' => 'Bolt\\Controller\\Frontend\\DetailController::record'], ['contentTypeSlug', 'slugOrId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1362 => [[['_route' => 'record_locale', 'contentTypeSlug' => null, '_controller' => 'Bolt\\Controller\\Frontend\\DetailController::record'], ['_locale', 'contentTypeSlug', 'slugOrId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1430 => [[['_route' => 'homepage_locale', '_controller' => 'Bolt\\Controller\\Frontend\\HomepageController::homepage'], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, true, null]],
        1491 => [[['_route' => 'listing', '_controller' => 'Bolt\\Controller\\Frontend\\ListingController::listing'], ['contentTypeSlug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1611 => [[['_route' => 'listing_locale', '_controller' => 'Bolt\\Controller\\Frontend\\ListingController::listing'], ['_locale', 'contentTypeSlug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1636 => [[['_route' => 'search_locale', '_controller' => 'Bolt\\Controller\\Frontend\\SearchController::search'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1698 => [[['_route' => 'taxonomy', '_controller' => 'Bolt\\Controller\\Frontend\\TaxonomyController::listing'], ['taxonomyslug', 'slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1819 => [
            [['_route' => 'taxonomy_locale', '_controller' => 'Bolt\\Controller\\Frontend\\TaxonomyController::listing'], ['_locale', 'taxonomyslug', 'slug'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
