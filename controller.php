<?php

		class HomeController{

		}

		class DirectorController{

	function allDirectors()
	{
		require_once('model.php');
		$directorModel=new Director();
		$data=$directorModel->getAllDirectors();
		require_once('view/view_director.php');
	}
		}
		class MovieController{

	function allMovies()
	{
		require_once('model.php');
		$moviesModel=new Movie();
		$data=$moviesModel->getAllMovies();
		require_once('view/view_movies.php');
	}
		}

		class ActorController{
	function allActors()
	{
		require_once('model.php');
		$actorsModel=new Actor();
		$data=$actorsModel->getAllActors();
		require_once('view/view_actors.php');
	}
		}


?>