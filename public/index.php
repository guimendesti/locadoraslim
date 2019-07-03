<?php
use Slim\Views\PhpRenderer;

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

$container = $app->getContainer();
$container['renderer'] = new PhpRenderer("./templates");


// Set up dependencies
$dependencies = require __DIR__ . '/../src/dependencies.php';
$dependencies($app);

// Register middleware
$middleware = require __DIR__ . '/../src/middleware.php';
$middleware($app);


// Register routes
$routes = require __DIR__ . '/../src/routes.php';
$routes($app);

//
// Database
$container->get("db");

// Models
require_once './../models/categoria.php';
require_once './../models/cliente.php';
require_once './../models/config.php';
require_once './../models/filme.php';
require_once './../models/filmecategoria.php';
require_once './../models/profissional.php';
require_once './../models/filmeprofissional.php';
require_once './../models/locacao.php';
require_once './../models/locacaofilme.php';

// Routes
require './../routes/admin.php';
require './../routes/api.php';

// Run app
$app->run();
