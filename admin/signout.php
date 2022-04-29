<?php

include __DIR__ . '/endpoint.php';

if (isset($_GET['signout'])) {
    $_SESSION[] = [];
    session_destroy();
    goLocation('../index.php');
}
