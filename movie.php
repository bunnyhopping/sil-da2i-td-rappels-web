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
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<article>
		<?php
		getBlock('header.php',$idd);
		?>
	</article>
	<title>Infos du film</title>
</head>
<body>
	<?php
	$movie=new MovieController();
	$movie->oneMovie($idd);    
	getBlock('footer.php');
	?>
</body>
</html>