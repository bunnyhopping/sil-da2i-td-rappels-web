<?php 
include ('connexion.php');
$result = mysqli_query($link, "SELECT titre,id from film where id='$data'");
$res=$result->fetch_array();
?>
<header>
			<nav>
				<a href="index.php">Index</a>
				<a href="movie.php?id=<?echo $res[1];?>">Film</a>
<a href="realisateur.php?id=<?echo $res[1];?>">Réalisateur</a>
<a href="acteurs.php?id=<?echo $res[1];?>">Acteurs</a>
<a href="faq.php?id=<?echo $res[1];?>">FAQ</a>
</nav>
<button type="button" class="btn btn-primary" id="hideAside">Hide Aside</button>
<button type="button" class="btn btn-primary" id="fadeImg">Fade Image</button>
<button type="button" class="btn btn-primary" id="toggleMenu">Toggle Menu</button>
	<h1><?php
	 echo $res[0];?>
	 </h1>
		</header>