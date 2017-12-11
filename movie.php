<?php
require ('function.php');
include ('connexion.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once('controller.php');
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
	<?php
	$movie=new MovieController();
	$movie->oneMovie($idd);
	?>
<aside>
<?php
getBlock('listeacteurs.php',$idd);       
		getBlock('footer.php');
	?>
</body>
</html>