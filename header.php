<?php 
include ('connexion.php');
$result = mysqli_query($link, "SELECT titre,id from film where id='$data'");
$res=$result->fetch_array();
?>
<header>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="jquery/jquery-3.2.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
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