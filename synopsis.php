<?php
include ('connexion.php');
?>
<h3>Synopsis:</h3>
<p>
<?php
	$result = mysqli_query($link, "SELECT synopsis from film where id=$data");
$res=$result->fetch_array(); echo $res[0];
?>
</p>