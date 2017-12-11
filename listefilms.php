<?php
include ('connexion.php');
?>
<h3>Liste de films:</h3>
<ul id="listefilms">
	<?php
	$sqlquery = mysqli_query($link,"SELECT id,titre from film order by titre asc");            
     if(mysqli_num_rows($sqlquery)>0){
    while($row = mysqli_fetch_array($sqlquery)){?>
    <li><a href="movie.php?id=<?echo $row['id']?>"><?php echo $row['titre'];?></a></li>
   <?php
    }          
    } 
    ?>
	</ul>