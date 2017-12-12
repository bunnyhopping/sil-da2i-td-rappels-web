<?php
require_once ('function.php');
require ('connexion.php');
require_once ('controller.php');
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
		$person=new ActorController();
		$person->oneActor($idd);
		?>
	</article>
</main>
<?php
		getBlock('footer.php');
	?>
</body>
</html>