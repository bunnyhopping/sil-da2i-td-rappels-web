<?php
include ('connexion.php');
?>
<h3>Liste des acteurs:</h3>
<ul id="listedesacteurs">
	<?php
    $sqlquery = mysqli_query($link,"SELECT p.id,p.prenom, p.nom from personne as p,film_has_personne as fp where p.id=fp.id_personne and fp.role='A' order by nom asc");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){?>
    <li><a href="infopersonne.php?id=<?echo $row['id']?>"><?php echo $row['nom'];?> <?php echo $row['prenom']; ?></a></li>
   <?php
    }          
    } 
    ?>
	</ul>