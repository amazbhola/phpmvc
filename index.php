<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Base\Model;
//Autoload file include
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
define('ROOT', __DIR__);

define('VIEWS', __DIR__ . '/Views');
define('BASE_DIR', isset($_ENV['BASE_DIR']) ? $_ENV['BASE_DIR'] : '');



/* Load external routes file */
require_once 'routes/route.php';
/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();
