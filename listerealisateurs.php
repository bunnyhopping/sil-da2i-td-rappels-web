<?php
include ('connexion.php');
?>
<h3>Liste des réalisateurs:</h3>
<ul id="listedesrealisateurs">
	<?php
    $sqlquery = mysqli_query($link,"SELECT distinct p.id,p.prenom, p.nom from personne as p,film_has_personne as fp where p.id=fp.id_personne and fp.role='R' order by nom asc");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){?>
    <li><a href="infopersonne.php?id=<?echo $row['id']?>"><?php echo $row['nom'];?> <?php echo $row['prenom']; ?></a></li>
   <?php
    }          
    } 
    ?>
	</ul>