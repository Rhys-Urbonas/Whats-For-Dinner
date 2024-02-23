<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    '/' => BASE_DIR . '/controllers/index.php',
    '/planner' => BASE_DIR . '/controllers/planner.php',
    '/recipes' => BASE_DIR . '/controllers/recipes.php',
    '/shopping_list' => BASE_DIR . '/controllers/shopping_list.php',
    '/sign_in' => BASE_DIR . '/controllers/sign_in.php',
    '/get_started' => BASE_DIR . '/controllers/get_started.php',
    '/404' => BASE_DIR . '/controllers/404.php',
];

if (array_key_exists($uri, $routes)) {
    $controller = $routes[$uri];
    include $controller;
} else {
    header("Location: /404");
    exit();
}