<?php
require '../helpers.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

inspect($uri);
inspect($method);

require basePath('router.php');

/*
$routes = require basePath('routes.php');

if (array_key_exists($uri, $routes)) {
  require(basePath($routes[$uri]));
} else {
  http_response_code(404);
  require(basePath($routes['404']));
}
 */