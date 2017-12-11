<?php
include ('connexion.php');
?>
<?$result = mysqli_query($link, "select pe.prenom,pe.nom,pe.datedenaissance,ph.chemin,ph.legende,pe.biographie from personne as pe, photo as ph,personne_has_photo as pp where pe.id=pp.id_personne and ph.id=pp.id_photo and pe.id=$data");
$res=$result->fetch_array();?>
		<h3>Nom:</h3>
		<p><?echo $res[1];?></p>
		<h3>Prénom:</h3>
		<p><?echo $res[0];?></p>
		<h3>Date de naissance:</h3>
		<p><?echo $res[2];?></p>
		<h3>Photo:</h3>
		<figure>
			<img src="<?echo $res[3];?>" alt="<?echo $res[4];?>" height="25%" width="25%">
			<figcaption><?echo $res[4];?></figcaption>
		</figure>
		<h3>Biographie:</h3>
		<p><?echo $res[5];?></p>
		<h3>Filmographie:</h3>