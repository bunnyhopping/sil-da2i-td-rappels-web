<?php
include ('connexion.php');
?>
<?
$result=mysqli_query($link, "select f.datedesortie,p.chemin,p.legende from film as f,film_has_photo as fp,photo as p where f.id=fp.id_film and p.id=fp.id_photo and f.id=$data");
$res=$result->fetch_array();
?>
<figure id="filmposter"><img src="<?echo $res[1];?>" alt="<?echo $res[2];?>"><figcaption><?echo $res[2];?></figcaption></figure>
<h3>Date de sortie:</h3><time><?echo $res[0];?></time>
<h3>Nom des acteurs principaux:</h3>