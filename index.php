<?php

define('BASE_DIR', __DIR__);

include BASE_DIR . '/controllers/routes.php';

function dd(...$args) {
    foreach ($args as $arg) {
        var_dump($arg);
    }
    die;
}