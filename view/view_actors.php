<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Actors</h1>
        <?php
            foreach ($data as $dat) {
                echo "<a href=infopersonne.php?id=".$dat["id"].">".$dat["prenom"].' '.$dat["nom"]."</a><br/>";
            }
        ?>
    </body>
</html>