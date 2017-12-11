<?php
require ('function.php');
include ('connexion.php');
$idd=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Réalisateur</title>
	<article>
		<?php
		getBlock('header.php',$idd);
		?>
	</article>
</head>
<body>
<main>
	<article>
		<h3>Nom:</h3>
		<p>Benigni</p>
		<h3>Prénom:</h3>
		<p>Roberto</p>
		<h3>Date de naissance:</h3>
		<p>27 d'octobre de 1952</p>
		<h3>Photo:</h3>
		<figure>
			<img src="images/robertobenignihd.jpg" alt="Roberto Benigni en haute définition" height="25%" width="25%">
			<figcaption>Roberto Benigni.</figcaption>
		</figure>
		<h3>Biographie:</h3>
		<p>Roberto Benigni passe son enfance dans l'Italie rurale avec ses parents et ses trois sœurs. Lors de sa scolarité à Florence, il travaille en tant qu'apprenti magicien. A l'âge de vingt ans, le destin cinématographique lui sourit lorsqu'un réalisateur romain le remarque et l'entraîne dans sa troupe de théâtre. Après plusieurs années sur scène, Benigni devient la vedette d'un show télévisé très populaire en Italie, intitulé The Other sunday. Son humour et sa liberté lui confèrent une grande popularité, mais lui jouent également de mauvais tours. En 1980, il se moque du Pape Jean-Paul II et se voit bannir un an du petit écran.

La carrière cinématographique de Roberto Benigni débute en 1976 avec Berlinguer ti voglio bene, un film de Bernardo Bertolucci dont il signe le scénario. Après s'être distingué dans Clair de femme de Costa-Gavras, Pipicacadodo de Marco Ferreri et La Luna, il réalise son premier long métrage en 1983 : la comédie Tu mi Turbi. Le film marque la rencontre de Benigni avec Nicoletta Braschi, qui deviendra sa compagne et sa plus fidèle collaboratrice. En 1986, il s'introduit dans le cinéma américain en collaborant avec Jim Jarmusch. Ils travaillent d'abord ensemble sur la première saynète de Coffee and cigarettes. Begnini écrit le scénario et joue dans ce film. Son talent d'acteur lui permet de rejouer dans deux autres films de Jarmusch : Down by Law et Night on Earth.

Avec Le Petit Diable et Le Monstre, deux comédies qu'il met en scène et dans lesquelles il tient le premier rôle, il remporte un joli succès public et impose son physique lunaire et son humour poético-burlesque, qui lui donne des airs de Charlie Chaplin transalpin. En 1990, il joue sous la direction de Federico Fellini avec La Voce della luna puis retourne aux États-Unis en 1993 en incarnant Jacques Clouseau Jr. dans Le Fils de la panthère rose de Blake Edwards. Roberto Benigni accède à la gloire internationale en 1997 grâce à La vie est belle dont il est réalisateur, scénariste et acteur. Cette fable tendre et émouvante lui vaut le Grand Prix du Jury à Cannes ainsi que l'Oscar du Meilleur film étranger et du Meilleur acteur.

Après avoir participé à l'aventure d'Astérix et Obélix contre César en 1999, l'artiste italien se lance en 2002 dans la réalisation de Pinocchio, adaptation du conte de Collodi, dans laquelle il s'attribue le rôle du célèbre garçon de bois. Trois ans plus tard, il part à la recherche de l'amour en Irak en réalisant Le Tigre et la neige. A l'instar de ses autres réalisations, Begnini joue dans ce film aux côtés de son épouse Nicoletta Braschi. L'auteur participe ensuite à des projets italiens comme les documentaires Towards the Moon with Fellini (2006) et Il quinto dell'Inferno (2007) ou le film La commedia di Amos Poe (2010). Il reçoit en 2012 une proposition inopinée : jouer dans un film de Woody Allen. L'acteur, n'ayant jamais collaboré avec le réalisateur new-yorkais, n'hésite pas à accepter le rôle et regagne le grand écran avec To Rome with Love, lui permettant ainsi de visiter le monde allénien dans son propre pays.</p>
		<h3>Filmographie:</h3>
		<p>
			<ul id="notme">
				<li>
	1977 : Berlinguer ti voglio bene de Giuseppe Bertolucci  : Cioni Mario - aussi scénariste
</li>
<li>
	1978 : Les Monstresses (Letti selvaggi) de Luigi Zampa : le tapissier
</li>
<li>
	1979 : La Luna de Bernardo Bertolucci : le tapissier
	</li>
<li>
	1979 : Clair de femme de Costa-Gavras : Roberto
	</li>
<li>
	1980 : Pipicacadodo de Marco Ferreri : Roberto - aussi scénariste
	</li>
<li>
	1983 : Tu mi turbi : Benigno - aussi scénariste et réalisateur)
	</li>
<li>
	1985 : Non ci resta che piangere : Saverio - aussi scénariste et réalisateur
	</li>
<li>
	1986 : Coffee and Cigarettes (court-métrage) de Jim Jarmusch : Bob - aussi scénariste
	</li>
<li>
	1986 : Cinématon n°801 de Gérard Courant : lui-même
	</li>
<li>
	1986 : Down by Law de Jim Jarmusch : Roberto
	</li>
<li>
	1988 : Le Petit Diable (Il Piccolo Diavolo) : Giuditta - aussi scénariste et réalisateur
	</li>
<li>
	1990 : La Voce della luna de Federico Fellini : Ivo Salvini
	</li>
<li>
	1991 : Johnny Stecchino : Johnny Stecchin / Dante - aussi scénariste et réalisateur
	</li>
<li>
	1991 : Night on Earth de Jim Jarmusch : chauffeur (Rome)
	</li>
<li>
	1993 : Le Fils de la panthère rose (Son of the Pink Panther) de Blake Edwards : Jacques Clouseau Jr.
	</li>
<li>
	1994 : Le Monstre (Il Mostro) : Loris - aussi scénariste et réalisateur
	</li>
<li>
	1997 : La vie est belle (La vita è bella) : Guido - aussi scénariste, producteur et réalisateur
	</li>
<li>
	1998 : Astérix et Obélix contre César de Claude Zidi : Lucius Detritus
	</li>
<li>
	2002 : Pinocchio : Pinocchio - aussi scénariste et réalisateur
	</li>
<li>
	2003 : Coffee and Cigarettes (long-métrage) de Jim Jarmusch : Roberto
	</li>
<li>
	2005 : Le Tigre et la Neige (La Tigre e la neve)  : Attilio de Giovanni - aussi réalisateur
	</li>
<li>
	2012 : To Rome With Love de Woody Allen : Leopoldo
</li>
			</ul>
		</p>
	</article>
</main>
<?php
		getBlock('footer.php');
	?>
</body>
</html>