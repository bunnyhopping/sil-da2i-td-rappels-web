<?php
include(dirname(__FILE__).'/../listefilms.php');
include(dirname(__FILE__).'/../listerealisateurs.php');
include(dirname(__FILE__).'/../listedesacteurs.php');
include(dirname(__FILE__).'/../footer.php');
$info=get_info();
include(dirname(__FILE__).'/../view/index.php');	
?>