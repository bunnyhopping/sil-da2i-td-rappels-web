<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ('function.php');
require_once ('controller.php');
	$movie=new MovieController();
	$movie->allMovies();
	$director=new DirectorController();
	$director->allDirectors();
	$actor=new ActorController();
	$actor->allActors();
	getBlock('footer.php');
?>

