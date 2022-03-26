<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    'app_import' => [[], ['_controller' => 'App\\Controller\\ImportController::getJokes'], [], [['text', '/import']], [], [], []],
    'app_rate_joke' => [['id'], ['_controller' => 'App\\Controller\\RateJokeController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/rate/joke']], [], [], []],
    'app_search' => [[], ['_controller' => 'App\\Controller\\SearchController::index'], [], [['text', '/search']], [], [], []],
    'app_view_joke' => [['id'], ['_controller' => 'App\\Controller\\ViewJokeController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/view/joke']], [], [], []],
];