<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
            foreach ($data as $dat) {    
            }
        ?>
        <header>
            <nav>
                <a href="index.php">Index</a>
                <a href="movie.php?id=<?echo $dat["id"];?>">Film</a>
<a href="realisateur.php?id=<?echo $dat["id"];?>">Réalisateur</a>
<a href="acteurs.php?id=<?echo $dat["id"];?>">Acteurs</a>
<a href="faq.php?id=<?echo $dat["id"];?>">FAQ</a>
</nav>
<button type="button" class="btn btn-primary" id="hideAside">Hide Aside</button>
<button type="button" class="btn btn-primary" id="fadeImg">Fade Image</button>
<button type="button" class="btn btn-primary" id="toggleMenu">Toggle Menu</button>
    <h1><?php
     echo $dat["titre"];?>
     </h1>
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
<meter value="<?echo $dat["note"];?>" min="0" max="5"><?echo $dat["note"];?> sur 5</meter>
    </body>
</html>