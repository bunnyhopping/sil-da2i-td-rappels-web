<?php
require ('function.php');
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
	<title>Réalisateur</title>
	<article>
		<?php
		getBlock('header.php',$idd);
		?>
	</article>
</head>
<body>
<?php
		$director=new DirectorController();
		$director->oneDirector($idd);
		getBlock('footer.php');
	?>
</body>
</html>