<?php
if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group("blog", ["namespace" => "ci_erp\\modules\\blog\\Controllers"], function ($subroutes) {


	$subroutes->get("/", "Blog::index");
});