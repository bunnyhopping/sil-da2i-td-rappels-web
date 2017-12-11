<?php
require ('function.php');
include ('connexion.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$idd=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Infos du film</title>
</head>
<body>
	<main>
	<article>
		<?php
		getBlock('header.php',$idd);
		?>
	</article>
	<?php
	getBlock('filminfo.php',$idd);
	?>
<aside>
<?php
getBlock('listeacteurs.php',$idd);       
?>
</aside>
<section>
	<?php
getBlock('synopsis.php',$idd);
?>
</section>
<section>
	<?php
getBlock('note.php',$idd);
?>
</section>
</main>
	<?php
		getBlock('footer.php');
	?>
</body>
</html>