<?php
include('connexion.php');
?>
<h3>Note:</h3>
	<p><?$result = mysqli_query($link, "SELECT note from film where id=$data");
$res=$result->fetch_array(); echo $res[0];?> étoiles sur 5</p>
	<meter value="<?echo $res[0];?>" min="0" max="5"><?echo $res[0];?> sur 5</meter>