<?php

		class HomeController{

		}
		class PersonController{
	
	function onePerson($idd)
	{
		require_once('model.php');
		$actorModel=new Person();
		$data=$actorModel->getBaseInfos($idd);
		require_once('view/view_person.php');
		}
	}

		class DirectorController{

	function allDirectors()
	{
		require_once('model.php');
		$directorModel=new Director();
		$data=$directorModel->getAllDirectors();
		require_once('view/view_directors.php');
	}
	function oneDirector($idd)
	{
		require_once('model.php');
		$directorModel=new Director();
		$data=$directorModel->getBaseInfos($idd);
		require_once('view/view_person.php');
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
	function oneMovie($idd)
	{
		require_once('model.php');
		$movieModel=new Movie();
		$data=$movieModel->getBaseInfos($idd);
		require_once('view/view_movie.php');
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
	function allActorImages($idd)
	{
		require_once('model.php');
		$actorsModel=new Actor();
		$data=$actorsModel->getAllActorImages($idd);
		require_once('view/view_imageactors.php');
	}
	function oneActor($idd)
	{
		require_once('model.php');
		$actorModel=new Actor();
		$data=$actorModel->getBaseInfos($idd);
		require_once('view/view_person.php');
	}

		}


?>