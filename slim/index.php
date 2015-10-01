<?php

// Autoload
require 'vendor/autoload.php';

// Slim app instance
$app = new \Slim\Slim();

// Slim Config
$app->config([
	'templates.path' => 'views',
	'debug' => true
]);

$app->get('/', function () use ($app){
	//throw new Exception('A error test.');
	$app->render('home.php');
});

$app->get('/about', function () use ($app){
	//throw new Exception('A error test.');
	$app->render('about.php');
});

$app->run();
