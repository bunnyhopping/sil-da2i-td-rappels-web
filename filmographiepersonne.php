<?php
include ('connexion.php');
?>
<p>
			<ul id="notme">
				<?php
	$sqlquery = mysqli_query($link,"select f.datedesortie,f.titre,fp.role from film as f,film_has_personne as fp,personne as p where f.id=fp.id_film and p.id=fp.id_personne and p.id=$data");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){?>
    <li><?php if($row['role']=="R"){$role="Réalisateur";}else{$role="Acteur";} echo $row['datedesortie'].' - '.$row['titre'].' - '.$role;?></li>
   <?php
    }          
    } 
    ?>
			</ul>
		</p>