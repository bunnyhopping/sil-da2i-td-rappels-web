<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Movies</h1>
        <?php
            foreach ($data as $dat) {
                echo "<a href=movie.php?id=".$dat["id"].">".$dat["titre"]."</a><br/>";
            }
        ?>
    </body>
</html>