<?php
require ('connexion.php');
class Person{
	public function getBaseInfos()
	{
		$sqlquery=mysqli_query($link,"select * from personne,personne_has_photo,photo,film,film_has_personne where personne.id=personne_has_photo.id_personne and photo.id=personne_has_photo.id_photo and film_has_personne.id_personne=personne.id and film.id=film_has_personne.id_film");
		$res=$sqlquery->fetch_array();
		return $res;
	}
}

class Director extends Person{
	function getAllDirectors()
	{
		require ('connexion.php');
		$sqlquery = mysqli_query($link,"SELECT distinct p.id,p.prenom, p.nom from personne as p,film_has_personne as fp where p.id=fp.id_personne and fp.role='R' order by nom asc");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){
    $data[]=$row;
    }
    return $data;          
    } 
	}
	

public function getBaseInfos()
	{
		$sqlquery=mysqli_query($link,"select * from personne,personne_has_photo,photo,film,film_has_personne where personne.id=personne_has_photo.id_personne and photo.id=personne_has_photo.id_photo and film_has_personne.id_personne=personne.id and film.id=film_has_personne.id_film and film_has_personne='R'");
		$res=$sqlquery->fetch_array();
		return $res;
	}

}

class Actor extends Person{
	public function getAllActors()
	{
		require ('connexion.php');
		$sqlquery = mysqli_query($link,"SELECT distinct p.id,p.prenom, p.nom from personne as p,film_has_personne as fp where p.id=fp.id_personne and fp.role='A' order by nom asc");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){
    $data[]=$row;
    }
    return $data;          
    } 
	}

public function getBaseInfos()
	{
		$sqlquery=mysqli_query($link,"select * from personne,personne_has_photo,photo,film,film_has_personne where personne.id=personne_has_photo.id_personne and photo.id=personne_has_photo.id_photo and film_has_personne.id_personne=personne.id and film.id=film_has_personne.id_film and film_has_personne='A'");
		$res=$sqlquery->fetch_array();
		return $res;
		
	}
}

class Movie{
	function getAllMovies()
	{
		require ('connexion.php');
		$sqlquery = mysqli_query($link,"SELECT id,titre from film order by titre asc");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){
    $data[]=$row;
    }
    return $data;          
    } 
	}
	
	public function getBaseInfos()
	{

	}
}
 
?>