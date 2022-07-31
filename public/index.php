<?php

error_reporting(0);
ini_set("display_errors", false);

/*
* Index file of Performma LP project
* Be careful when editing this file
* Performma Online - http://performmaonline.com.br
* The front-end isn't my fault XD
*/

include_once 'Router.php'; // Including the router
require('vendor/autoload.php');


define("URL_BASE",     "grupogypsom.com.br");
define("URL_HOMOLOGACAO",    "performmaonline.com.br");
define("URL_CDN", "");
define("HASH_HOMOLOGACAO", "3fd28de04dbb84027f7b13278593b65c8ddc819cd7aae568ba4ab5d00fb9deac");

$localhostUrl = $_SERVER['HTTP_HOST'];
$cdn = '/';

if (URL_CDN) {
  $cdn = URL_CDN;
}

function homolgacao()
{

  $hashHml = isset($_GET['h']) ? $_GET['h'] : "";

  if (isset($_COOKIE["homologacao"]) && HASH_HOMOLOGACAO == $_COOKIE["homologacao"]) {
    return true;
  }

  if ($hashHml == HASH_HOMOLOGACAO) {
    setcookie("homologacao", $hashHml, time() + (86400 * 30), "/"); // 86400 = 1 day
    return true;
  }
  return false;
}

$params = empty($_SERVER['QUERY_STRING']) ? "" : "?" . $_SERVER['QUERY_STRING'];

/*
* Router code
* Set the respective routes and page paths below
*/

// Instanciating router
$router = new App\Router();


// $router->redirect(function () use ($cdn, $params) {
//   header('Location: pages/principal.php' . $params);
// });

/*
 _____ _____ _____ _____    _____ _____ _____ _____ _____ _____ 
|     |  _  |     |   | |  | __  |     |  |  |_   _|   __| __  |
| | | |     |-   -| | | |  |    -|  |  |  |  | | | |   __|    -|
|_|_|_|__|__|_____|_|___|  |__|__|_____|_____| |_| |_____|__|__|
                                                                
*/

$router->on('GET', '/', function () use ($cdn, $params) {
  header('Location: /principal' . $params);
});

/*
 __    _____ _____ ____  
|  |  |   __|  _  |    \ 
|  |__|  |  |   __|  |  |
|_____|_____|__|  |____/ 

*/

$router->on('GET', '/politica-de-privacidade', function () use ($cdn, $params) {
  require "./lgpd-performma/politica-de-privacidade.php";
});
$router->on('GET', '/termo-de-uso', function () use ($cdn, $params) {
  require "./lgpd-performma/termo-de-uso.php";
});

/*                                                                   
 __    _____ _____ ____  _____ _____ _____    _____ _____ _____ _____ 
|  |  |  _  |   | |    \|     |   | |   __|  |  _  |  _  |   __|   __|
|  |__|     | | | |  |  |-   -| | | |  |  |  |   __|     |  |  |   __|
|_____|__|__|_|___|____/|_____|_|___|_____|  |__|  |__|__|_____|_____|

*/
$router->on('GET', '/principal', function () use ($cdn, $params) {
  require "pages/principal.php";
});

$router->on('GET', '/revest', function () use ($cdn, $params) {
  require "pages/revest.php";
});

$router->on('GET', '/scrollpane', function () use ($cdn, $params) {
  require "pages/exScrollpane.php";
});


/*
 _____ _____ _____ _____ _____ _____ _____ _____ _____ _____ 
|     |  _  |   | |  |  |_   _|   __|   | |     |  _  |     |
| | | |     | | | |  |  | | | |   __| | | |   --|     |  |  |
|_|_|_|__|__|_|___|_____| |_| |_____|_|___|_____|__|__|_____|

*/

$router->on('GET', '/manutencao', function () use ($cdn, $params) {
  require "pages/manutencao.php";
});

$router->on('GET', '/steel-frame', function () use ($cdn, $params) {
    header('Location: /manutencao' . $params);
});

$router->on('GET', '/drywall', function () use ($cdn, $params) {
    header('Location: /manutencao' . $params);
});

$router->on('GET', '/2-minds', function () use ($cdn, $params) {
    header('Location: /manutencao' . $params);
});

/*
 _____ _____ _____ _____ _____    ___ ___ ___ 
|   __| __  | __  |     | __  |  | | |   | | |
|   __|    -|    -|  |  |    -|  |_  | | |_  |
|_____|__|__|__|__|_____|__|__|    |_|___| |_|
                                              
*/

$router->on('GET', '/404', function () use ($cdn, $params) {
  require "pages/error/404-2.php";
});

// Running router
echo $router->run($router->method(), $router->uri());
