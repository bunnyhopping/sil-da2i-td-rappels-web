<?php
require ('function.php');
include ('connexion.php');
$idd=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Information d'une personne</title>
</head>
<body>
<main>
	<article>
		<?php
		 getBlock('infospersonne.php',$idd);?>
		<?php getBlock('filmographiepersonne.php',$idd);?>
	</article>
</main>
<?php
		getBlock('footer.php');
	?>
</body>
</html>