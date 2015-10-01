<?php

// Autoload
require 'vendor/autoload.php';

// RedBeanPHP alias fix
class R extends RedBeanPHP\Facade {}

// RedBeanPHP setup
R::setup('mysql:host=localhost;dbname=webappdb', 'webappusr', 'contrasenya');
R::freeze(false);


// // Create
// $pelicula = R::dispense('pelicula');
// $pelicula->nombre = 'Inception';
// $pelicula->director = 'Nolan';
// R::store($pelicula);

// // Read
// $peliculas = R::findAll('pelicula');
// print_r($peliculas);
// $array = R::exportAll($peliculas);
// print_r($array);


// // Update
// $pelicula  = R::findOne('pelicula', ' id = ?', [1]);
// $pelicula->director = 'Moore';
// R::store($pelicula);

// // Delete
// $pelicula  = R::findOne('pelicula', ' id = ?', [2]);
// R::trash($pelicula);