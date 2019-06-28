<?php
return [
    'db' => [
        'username' => 'shopware5',
        'password' => 'root',
        'dbname' => 'shopware5',
        'host' => 'db',
        'port' => null
    ],
    'csrfProtection' => [
        'frontend' => false,
        'backend' => false,
    ],
    'phpsettings' => [
        'error_reporting' => E_ALL & ~E_USER_DEPRECATED,
        'display_errors' => 1,
        'date.timezone' => 'Europe/Berlin',
    ],
    'snippet' => [
        'readFromDb' => true,
        'writeToDb' => true,
        'readFromIni' => false,
        'writeToIni' => false,
        'showSnippetPlaceholder' => false,
    ],
    'mail' => [
        'charset' => 'utf-8',
    ],
    'front' => [
        'noErrorHandler' => true,
        'throwExceptions' => true,
        'showException' => true,
        'charset' => 'utf-8',
    ],
    'httpcache' => [
        'enabled' => true,
        'lookup_optimization' => true,
        'debug' => true,
        'default_ttl' => 0,
        'private_headers' => ['Authorization', 'Cookie'],
        'allow_reload' => false,
        'allow_revalidate' => false,
        'stale_while_revalidate' => 2,
        'stale_if_error' => false,
        'cache_dir' => $this->getCacheDir() . '/html',
        'cache_cookies' => ['shop', 'currency', 'x-cache-context-hash'],
    ],
    'trustedproxies' => ['127.0.0.1'],
    'template' => [
        'forceCompile' => false,
    ],
    'session' => [
        'locking' => false,
    ],
];
