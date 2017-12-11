<?php
require ('function.php');
include ('connexion.php');
$idd=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<script src="jquery/jquery-3.2.1.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js.js"></script>
	<title>Acteurs</title>
	<article>
		<?php
		getBlock('header.php',$idd);
		?>
	</article>
</head>
<body>
<?php
	getBlock('imagesacteurs.php',$idd);
?>
<?php
		getBlock('footer.php');
	?>
</body>
</html>