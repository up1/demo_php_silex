<?php
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Tobiassjosten\Silex\ResponsibleServiceProvider;

$app = new Silex\Application(); 
$app->register(new ResponsibleServiceProvider());

$app->get('/hello-json-1', function(Request $request) use($app) { 
	$products = [
	    ["id" => 1, "name" => "IPAD"],
	    ["id" => 2, "name" => "SUMSUNG"]
	];

	return new Response(
        json_encode($products),
        200,
        ['Content-Type' => 'application/json']
    );
});

$app->get('/hello-json-2', function() use($app) { 
	$products = [
	    ["id" => 1, "name" => "IPAD"],
	    ["id" => 2, "name" => "SUMSUNG"]
	];

	return $app->json($products, 201);
});

$app->get('/hello-auto', function() { 
	$products = [
	    ["id" => 1, "name" => "IPAD"],
	    ["id" => 2, "name" => "SUMSUNG"]
	];

	return $products;
});

$app->run(); 

?>