<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";


$route = new Router(url(), ":");

################################
######// PAGINA INICIAL //######
################################

$route->namespace("Source\App");
$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");

####################
/** ERROR ROUTES **/
####################

$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}", "Web:error");

##############
/** ROUTES **/
##############

$route->dispatch();
######################
/** ERROR REDIRECT **/
######################

if($route->error()){
    echo "erro";exit;
    $route->redirect("/ops/{$route->error()}");
}