<?php
use \Psr\Http\Message\ServerRequestInterface as Request;

require '../vendor/autoload.php';

$app = new \Slim\App;



$app->post('/update', function ($request) {
	require 'update.php';
});

$app->post('/get', function ($request) {
	require 'get.php';
});


$app->run();
?>