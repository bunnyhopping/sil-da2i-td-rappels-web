<?php
require ('connexion.php');
class Person{
	 function getBaseInfos($idd)
	{
		require ('connexion.php');
		$sqlquery=mysqli_query($link,"SELECT * from personne,personne_has_photo,photo,film,film_has_personne where personne.id=personne_has_photo.id_personne and photo.id=personne_has_photo.id_photo and film_has_personne.id_personne=personne.id and film.id=film_has_personne.id_film and personne.id=$idd");
		if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){
    $data[]=$row;
    }
    return $data;          
    } 
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
	

 function getBaseInfos($idd)
	{
		require ('connexion.php');
		$sqlquery=mysqli_query($link,"SELECT * from personne,personne_has_photo,photo,film,film_has_personne where personne.id=personne_has_photo.id_personne and photo.id=personne_has_photo.id_photo and film_has_personne.id_personne=personne.id and film.id=film_has_personne.id_film and film_has_personne.role='R' and film.id=$idd");
		if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){
    $data[]=$row;
    }
    return $data;          
    } 
	}

}

class Actor extends Person{
	 function getAllActors()
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
	 function getAllActorImages($idd)
	{
		require ('connexion.php');
		$sqlquery = mysqli_query($link,"SELECT per.prenom,per.nom,pho.chemin,pho.legende,per.id from personne as per,photo as pho,personne_has_photo as perpho,film as f,film_has_personne as fp where per.id=perpho.id_personne and pho.id=perpho.id_photo and f.id=fp.id_film and per.id=fp.id_personne and f.id=$idd");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){
    $data[]=$row;
    }
    return $data;          
    } 
	}

 function getBaseInfos($idd)
	{
		require ('connexion.php');
		$sqlquery=mysqli_query($link,"SELECT * from personne,personne_has_photo,photo,film,film_has_personne where personne.id=personne_has_photo.id_personne and photo.id=personne_has_photo.id_photo and film_has_personne.id_personne=personne.id and film.id=film_has_personne.id_film and personne.id=$idd");
		if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){
    $data[]=$row;
    }
    return $data;          
    } 
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
	
	 function getBaseInfos($idd)
	{
		require('connexion.php');
		$sqlquery = mysqli_query($link,"SELECT f.id,f.titre,f.datedesortie,f.synopsis,f.note,p.chemin,p.legende,pe.nom,pe.prenom from personne as pe, film_has_personne as fpe, film as f, photo as p, film_has_photo as fp where f.id=fp.id_film and p.id=fp.id_photo and pe.id=fpe.id_personne and f.id=fpe.id_film and f.id=$idd");
		if(mysqli_num_rows($sqlquery)>0){
			while($row = mysqli_fetch_array($sqlquery)){
				$data[]=$row;
			}
			return $data;
		}
	}
}
 
?>