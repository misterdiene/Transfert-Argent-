<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_apinew_compte' => [[], ['_controller' => 'App\\Controller\\CompteController::addcompte'], [], [['text', '/api/compte']], [], []],
    'apidepot' => [[], ['_controller' => 'App\\Controller\\DepotController::index'], [], [['text', '/api/']], [], []],
    'apiadd_depot' => [[], ['_controller' => 'App\\Controller\\DepotController::addDepot'], [], [['text', '/api/depot']], [], []],
    'apipartenaire' => [[], ['_controller' => 'App\\Controller\\PartenaireController::index'], [], [['text', '/api/']], [], []],
    'apiadd_partenaire' => [[], ['_controller' => 'App\\Controller\\PartenaireController::addPartenaire'], [], [['text', '/api/partenaire']], [], []],
    'apiupdate_partenaire' => [['id'], ['_controller' => 'App\\Controller\\PartenaireController::updatePartenaire'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/partenaire']], [], []],
    'apishow_partenaire' => [['id'], ['_controller' => 'App\\Controller\\PartenaireController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/partenaire']], [], []],
    'apilist_partenaire' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\PartenaireController::list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/api/partenaire']], [], []],
    '_apitransaction' => [[], ['_controller' => 'App\\Controller\\TransactionController::index'], [], [['text', '/api/']], [], []],
    '_apiadd_transaction' => [[], ['_controller' => 'App\\Controller\\TransactionController::addTransaction'], [], [['text', '/api/transaction']], [], []],
    '_apishow_transaction' => [['id'], ['_controller' => 'App\\Controller\\TransactionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/transaction']], [], []],
    '_apilist_transaction' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\TransactionController::list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/api/transaction']], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/api/']], [], []],
    'add_user' => [[], ['_controller' => 'App\\Controller\\UserController::addUser'], [], [['text', '/api/user']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/api/login']], [], []],
    'update_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::updatte'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/user']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'app.swagger' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger'], [], [['text', '/api/doc.json']], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], []],
];
