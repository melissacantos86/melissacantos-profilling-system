<?php
// app name
define('APP_NAME', 'Profiling');


define('CREDENTIAL', [
    'username' => 'administrator',
    'password' => '123456789',
]);


// database
define('DATABASE', [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'dbname' => 'profiling'
]);

$_PATH = [
    'front' => [
        'header' => __DIR__ . '/../includes/header.php',
        'footer' => __DIR__ . '/../includes/footer.php',
        'pages' => __DIR__ . '/../includes/pages'
    ],
    'admin' => [
        'header' => __DIR__ . '/../admin/includes/header.php',
        'footer' => __DIR__ . '/../admin/includes/footer.php',
        'nav' => __DIR__ . '/../admin/includes/nav.php',
        'component' => __DIR__ . '/../admin/includes/component',
        'pages' => __DIR__ . '/../admin/includes/pages'
    ]
];

define('IMG', [
    'built_in' => __DIR__ . '/../photos',
    'uploaded' => __DIR__ . '/../photos/uploaded'
]);


// arrays of data

include __DIR__ . '/arrays.php';


// app bootstraper
include __DIR__ . '/../src/bootstrap.php';
