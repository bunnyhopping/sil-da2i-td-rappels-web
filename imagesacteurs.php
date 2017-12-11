<?php
include ('connexion.php');
?>
<h3>Liste d'images des acteurs:</h3>
	<ul>
		<?php
	$sqlquery = mysqli_query($link,"select per.prenom,per.nom,pho.chemin,pho.legende,per.id from personne as per,photo as pho,personne_has_photo as perpho,film as f,film_has_personne as fp where per.id=perpho.id_personne and pho.id=perpho.id_photo and f.id=fp.id_film and per.id=fp.id_personne and f.id=$data");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){?>
    <li><figure><a href="#" onclick="openPersonne(<?php echo $row['id']?>)"><img src="<?php echo $row['chemin']?>" alt="<?php echo $row['legende']?>"><figcaption><?php echo $row['prenom'].' '.$row['nom']?></figcaption></figure></a></li>
   <?php
    }          
    } 
    ?>
	</ul>