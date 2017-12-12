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
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>FAQ</title>
	<?php
	getBlock('header.php',$idd);
	?>
</head>
<body>
<dl id="faq">
  <dt>Question 1</dt>
  <dd>
    Réponse 1
  </dd>
  <dt>Question 2</dt>
  <dd>
    Réponse 2
  </dd>
  <dt>Question 3</dt>
  <dd>
    Réponse 3
  </dd>
  <dt>Question 4</dt>
  <dd>
    Réponse 4
  </dd>
  <dt>Question 5</dt>
  <dd>
    Réponse 5
  </dd>
  <dt>Question 6</dt>
  <dd>
    Réponse 6
  </dd>
  <dt>Question 7</dt>
  <dd>
    Réponse 7
  </dd>
  <dt>Question 8</dt>
  <dd>
    Réponse 8
  </dd>
  <dt>Question 9</dt>
  <dd>
    Réponse 9
  </dd>
  <dt>Question 10</dt>
  <dd>
    Réponse 10
  </dd>
</dl>
<?php
getBlock('footer.php',$idd);
?>
</body>
</html>