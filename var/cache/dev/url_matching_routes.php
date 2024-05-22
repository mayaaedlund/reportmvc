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
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\CardController::home'], null, null, null, false, false, null]],
        '/api' => [
            [['_route' => 'api', '_controller' => 'App\\Controller\\CardController::api'], null, null, null, false, false, null],
            [['_route' => 'init', '_controller' => 'App\\Controller\\LuckyControllerJson::init'], null, null, null, false, false, null],
        ],
        '/session' => [[['_route' => 'session', '_controller' => 'App\\Controller\\CardController::session'], null, null, null, false, false, null]],
        '/reset-session' => [[['_route' => 'reset_session', '_controller' => 'App\\Controller\\CardController::resetSession'], null, ['POST' => 0], null, false, false, null]],
        '/card/draw/test' => [[['_route' => 'draw_card', '_controller' => 'App\\Controller\\CardController::testCard'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\CardController::deckCard'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'shuffle_deck', '_controller' => 'App\\Controller\\CardController::ShuffleCard'], null, null, null, false, false, null]],
        '/game' => [[['_route' => 'game', '_controller' => 'App\\Controller\\CardGameController::game'], null, ['GET' => 0], null, false, false, null]],
        '/game/start' => [[['_route' => 'gamestart', '_controller' => 'App\\Controller\\CardGameController::gamestart'], null, ['GET' => 0], null, false, false, null]],
        '/game/player' => [[['_route' => 'play_card', '_controller' => 'App\\Controller\\CardGameController::playCard'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/game/dealer' => [[['_route' => 'dealer_card', '_controller' => 'App\\Controller\\CardGameController::dealerCard'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/game/dealer/stay' => [[['_route' => 'dealer_stay', '_controller' => 'App\\Controller\\CardGameController::dealerStay'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/game/player/stay' => [[['_route' => 'player_stay', '_controller' => 'App\\Controller\\CardGameController::playerStay'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/reset-game' => [[['_route' => 'reset_game', '_controller' => 'App\\Controller\\CardGameController::resetGame'], null, ['POST' => 0], null, false, false, null]],
        '/game/doc' => [[['_route' => 'gamedoc', '_controller' => 'App\\Controller\\CardGameController::gamedock'], null, ['GET' => 0], null, false, false, null]],
        '/api/game' => [[['_route' => 'api_game', '_controller' => 'App\\Controller\\CardGameController::apigame'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\CardGameController::metrics'], null, ['GET' => 0], null, false, false, null]],
        '/game/pig' => [[['_route' => 'pig_start', '_controller' => 'App\\Controller\\DiceGameController::home'], null, null, null, false, false, null]],
        '/game/pig/test/roll' => [[['_route' => 'test_roll_dice', '_controller' => 'App\\Controller\\DiceGameController::testRollDice'], null, null, null, false, false, null]],
        '/game/pig/init' => [
            [['_route' => 'pig_init_get', '_controller' => 'App\\Controller\\DiceGameController::init'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pig_init_post', '_controller' => 'App\\Controller\\DiceGameController::initCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/pig/play' => [[['_route' => 'pig_play', '_controller' => 'App\\Controller\\DiceGameController::play'], null, ['GET' => 0], null, false, false, null]],
        '/game/pig/roll' => [[['_route' => 'pig_roll', '_controller' => 'App\\Controller\\DiceGameController::roll'], null, ['POST' => 0], null, false, false, null]],
        '/game/pig/save' => [[['_route' => 'pig_save', '_controller' => 'App\\Controller\\DiceGameController::save'], null, ['POST' => 0], null, false, false, null]],
        '/card/init' => [
            [['_route' => 'card_init_get', '_controller' => 'App\\Controller\\DrawCardController::init'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'card_init_post', '_controller' => 'App\\Controller\\DrawCardController::initCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/card/deck/draw' => [[['_route' => 'card_draw', '_controller' => 'App\\Controller\\DrawCardController::start'], null, ['GET' => 0], null, false, false, null]],
        '/card/draw/add' => [[['_route' => 'add_card', '_controller' => 'App\\Controller\\DrawCardController::addCard'], null, ['POST' => 0], null, false, false, null]],
        '/library' => [[['_route' => 'app_library', '_controller' => 'App\\Controller\\LibraryController::index'], null, null, null, false, false, null]],
        '/library/view' => [[['_route' => 'library_view_all', '_controller' => 'App\\Controller\\LibraryController::viewAllLibrary'], null, null, null, false, false, null]],
        '/library/delete' => [
            [['_route' => 'book_del', '_controller' => 'App\\Controller\\LibraryController::libraryDelete'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'book_delete', '_controller' => 'App\\Controller\\LibraryController::deleteBook'], null, null, null, false, false, null],
        ],
        '/library/create' => [
            [['_route' => 'book_add', '_controller' => 'App\\Controller\\LibraryController::libraryAdd'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'book_create', '_controller' => 'App\\Controller\\LibraryController::createBook'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/library/books' => [[['_route' => 'api_library_books', '_controller' => 'App\\Controller\\LibraryController::getAllBooks'], null, ['GET' => 0], null, false, false, null]],
        '/lucky/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
        '/lucky/hi' => [[['_route' => 'app_lucky_hi', '_controller' => 'App\\Controller\\LuckyController::hi'], null, null, null, false, false, null]],
        '/api/lucky/number' => [[['_route' => 'app_luckycontrollerjson_jsonnumber', '_controller' => 'App\\Controller\\LuckyControllerJson::jsonNumber'], null, null, null, false, false, null]],
        '/api/quote' => [[['_route' => 'api_quote', '_controller' => 'App\\Controller\\LuckyControllerJson::getQuote'], null, null, null, false, false, null]],
        '/api/deck' => [[['_route' => 'api_deck', '_controller' => 'App\\Controller\\LuckyControllerJson::deck'], null, null, null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'api_shuffle', '_controller' => 'App\\Controller\\LuckyControllerJson::shuffle_deck'], null, null, null, false, false, null]],
        '/api/deck/draw' => [[['_route' => 'api_draw', '_controller' => 'App\\Controller\\LuckyControllerJson::drawCard'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\LuckyControllerTwig::number'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\LuckyControllerTwig::home'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\LuckyControllerTwig::report'], null, null, null, false, false, null]],
        '/marine/coverage' => [[['_route' => 'app_marine_coverage', '_controller' => 'App\\Controller\\MarineCoverageController::index'], null, null, null, false, false, null]],
        '/coverage/create' => [[['_route' => 'coverage_create', '_controller' => 'App\\Controller\\MarineCoverageController::createMarineCoverageData'], null, null, null, false, false, null]],
        '/coverage/show' => [[['_route' => 'coverage_show', '_controller' => 'App\\Controller\\MarineCoverageController::showMarineCoverageData'], null, ['GET' => 0], null, false, false, null]],
        '/coverage/delete' => [[['_route' => 'coverage_delete_all', '_controller' => 'App\\Controller\\MarineCoverageController::deleteAllMarineCoverage'], null, null, null, false, false, null]],
        '/coverage/data' => [[['_route' => 'coverage_data', '_controller' => 'App\\Controller\\MarineCoverageController::getMarineData'], null, null, null, false, false, null]],
        '/marine/protection' => [[['_route' => 'app_marine_protection', '_controller' => 'App\\Controller\\MarineProtectionController::index'], null, null, null, false, false, null]],
        '/marine/create' => [[['_route' => 'marine_protection_create', '_controller' => 'App\\Controller\\MarineProtectionController::createMarineProtection'], null, null, null, false, false, null]],
        '/marine/show' => [[['_route' => 'marine_show', '_controller' => 'App\\Controller\\MarineProtectionController::showAllMarine'], null, null, null, false, false, null]],
        '/marine/delete' => [[['_route' => 'marine_delete_all', '_controller' => 'App\\Controller\\MarineProtectionController::deleteAllMarine'], null, null, null, false, false, null]],
        '/marine/data' => [[['_route' => 'marine_data', '_controller' => 'App\\Controller\\MarineProtectionController::getMarineData'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'product_create', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null]],
        '/product/show' => [[['_route' => 'product_show_all', '_controller' => 'App\\Controller\\ProductController::showAllProduct'], null, null, null, false, false, null]],
        '/product/view' => [[['_route' => 'product_view_all', '_controller' => 'App\\Controller\\ProductController::viewAllProduct'], null, null, null, false, false, null]],
        '/proj' => [[['_route' => 'proj', '_controller' => 'App\\Controller\\ProjectController::home'], null, null, null, false, false, null]],
        '/proj/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\ProjectController::about'], null, null, null, false, false, null]],
        '/proj/statistic' => [[['_route' => 'statistic', '_controller' => 'App\\Controller\\ProjectController::statistic'], null, null, null, false, false, null]],
        '/proj/api' => [[['_route' => 'projapi', '_controller' => 'App\\Controller\\ProjectController::projapi'], null, null, null, false, false, null]],
        '/proj/about/database' => [[['_route' => 'database', '_controller' => 'App\\Controller\\ProjectController::database'], null, null, null, false, false, null]],
        '/sustainable' => [[['_route' => 'app_sustainable', '_controller' => 'App\\Controller\\SustainableFishController::index'], null, null, null, false, false, null]],
        '/sustainable/create' => [[['_route' => 'sustainable_create', '_controller' => 'App\\Controller\\SustainableFishController::createSustainableFishData'], null, null, null, false, false, null]],
        '/sustainable/data' => [[['_route' => 'sustainable_data', '_controller' => 'App\\Controller\\SustainableFishController::getSustainableFishData'], null, null, null, false, false, null]],
        '/sustainable/show' => [[['_route' => 'sustainable_show', '_controller' => 'App\\Controller\\SustainableFishController::showSustainableFishData'], null, ['GET' => 0], null, false, false, null]],
        '/sustainable/delete' => [[['_route' => 'sustainable_delete_all', '_controller' => 'App\\Controller\\SustainableFishController::deleteAllSustainable'], null, null, null, false, false, null]],
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
                .'|/game/pig/test/(?'
                    .'|roll/(\\d+)(*:230)'
                    .'|dicehand/(\\d+)(*:252)'
                .')'
                .'|/card/deck/draw/(\\d+)(*:282)'
                .'|/library/(?'
                    .'|show/([^/]++)(*:315)'
                    .'|change(?'
                        .'|/([^/]++)(*:341)'
                        .'|d/([^/]++)(*:359)'
                    .')'
                .')'
                .'|/api/(?'
                    .'|library/book/([^/]++)(*:398)'
                    .'|deck/draw/([^/]++)(*:424)'
                .')'
                .'|/product/(?'
                    .'|show/([^/]++)(*:458)'
                    .'|delete/([^/]++)(*:481)'
                    .'|update/([^/]++)/([^/]++)(*:513)'
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
        230 => [[['_route' => 'test_roll_num_dices', '_controller' => 'App\\Controller\\DiceGameController::testRollDices'], ['num'], null, null, false, true, null]],
        252 => [[['_route' => 'test_dicehand', '_controller' => 'App\\Controller\\DiceGameController::testDiceHand'], ['num'], null, null, false, true, null]],
        282 => [[['_route' => 'draw_multiple', '_controller' => 'App\\Controller\\DrawCardController::draw_multiple'], ['num'], null, null, false, true, null]],
        315 => [[['_route' => 'book_by_id', '_controller' => 'App\\Controller\\LibraryController::showBookById'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'book_change', '_controller' => 'App\\Controller\\LibraryController::changeBook'], ['id'], null, null, false, true, null]],
        359 => [[['_route' => 'update_Book', '_controller' => 'App\\Controller\\LibraryController::updateBook'], ['id'], ['POST' => 0], null, false, true, null]],
        398 => [[['_route' => 'api_library_book_by_isbn', '_controller' => 'App\\Controller\\LibraryController::getBookByISBN'], ['isbn'], ['GET' => 0], null, false, true, null]],
        424 => [[['_route' => 'draw_number', '_controller' => 'App\\Controller\\LuckyControllerJson::drawCards'], ['number'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        458 => [[['_route' => 'product_by_id', '_controller' => 'App\\Controller\\ProductController::showProductById'], ['id'], null, null, false, true, null]],
        481 => [[['_route' => 'product_delete_by_id', '_controller' => 'App\\Controller\\ProductController::deleteProductById'], ['id'], null, null, false, true, null]],
        513 => [
            [['_route' => 'product_update', '_controller' => 'App\\Controller\\ProductController::updateProduct'], ['id', 'value'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
