<?php
require ('function.php');
require ('connexion.php');
require_once ('controller.php');
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
		$actors=new ActorController();
		$actors->allActorImages($idd);
		getBlock('footer.php');
	?>
</body>
</html>