<?php
include ('connexion.php');
?>
<ul id="listacteurs">
	<?php
	$sqlquery = mysqli_query($link,"SELECT p.nom,p.prenom from personne as p, film_has_personne as fp,film as f where p.id=fp.id_personne and f.id=fp.id_film and f.id=$data;");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){?>
    <li><?php echo $row['prenom'];?> <?php echo $row['nom']; ?></li>
   <?php
    }          
    } 
    ?>
	</ul>