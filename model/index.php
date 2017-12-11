<?php
public function getAllDirectors()
	{
		$sqlquery = mysqli_query($link,"SELECT distinct p.id,p.prenom, p.nom from personne as p,film_has_personne as fp where p.id=fp.id_personne and fp.role='R' order by nom asc");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){
    echo "";
    echo $row['nom'];
    }          
    } 
	}
	public function getAllActors()
	{
		$sqlquery = mysqli_query($link,"SELECT distinct p.id,p.prenom, p.nom from personne as p,film_has_personne as fp where p.id=fp.id_personne and fp.role='A' order by nom asc");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){
    echo "";
    echo $row['nom'];
    }          
    } 
	}
	public function getAllMovies()
	{
		$sqlquery = mysqli_query($link,"SELECT id,titre from film order by titre asc");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){
    echo "";
    echo $row['titre'];
    }          
    } 
	}
	?>