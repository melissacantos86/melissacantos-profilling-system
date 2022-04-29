<?php

//  helper functions
include __DIR__ . '/helpers.php';


// load classes
spl_autoload_register(function ($className) {

    $dir = __DIR__ . '/classes';

    $extension = '.php';

    $path = "$dir/$className$extension";

    if (file_exists($path)) {
        include $path;
    }
});
