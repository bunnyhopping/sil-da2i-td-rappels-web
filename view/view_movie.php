<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
            foreach ($data as $dat) {    
            }
        ?>
        <header>
            <h1><? echo $dat['titre']?></h1>
     <figure id="filmposter"><img src="<?echo $dat["chemin"];?>" alt="<?echo $dat["legende"];?>"><figcaption><?echo $dat["legende"];?></figcaption></figure>
     <h2>
         Date de sortie:
     </h2>
     <p><time><?echo $dat["datedesortie"];?></time></p>
        </header>
        <ul id="listacteurs">

            </ul>
            <h3>Synopsis:</h3>
<p><?echo $dat["synopsis"];?></p>
<h3>Note:</h3>
<p><?echo $dat["note"];?> étoiles sur 5</p>
<meter value="<?echo $dat["note"];?>" min="0" max="5"><?echo $dat["note"];?> sur 5</meter></br>
<h3>Acteurs</h3>
<?php
            foreach ($data as $dat) { 
            echo $dat['nom'].' '.$dat['prenom']."</br>";   
            }
        ?>
    </body>
</html>