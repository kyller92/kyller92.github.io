<!DOCTYPE HTML>
<html>
<title>Portfolio de Pathé BARRY</title>
<head>
<META charset="UTF-8">

<script type="text/javascript">

function fonducarre() {
 $("#contenu").animate({opacity: "hide"},"slow");
 $("#barremenu").animate({opacity: "hide"},"slow");
 $("html body").animate({backgroundColor: "#000000"}, 1000);

 redirectTime = "1000";
 redirectURL = "carresaveurs.php";
 setTimeout("location.href = redirectURL;",redirectTime);
}

function fondufdcs() {
 $("#contenu").animate({opacity: "hide"},"slow");
 $("#barremenu").animate({opacity: "hide"},"slow");
 $("html body").animate({backgroundColor: "#000000"}, 1000);

 redirectTime = "1000";
 redirectURL = "fdcsconseil.php";
 setTimeout("location.href = redirectURL;",redirectTime);
}

 function fonduaccueil() {
 $("#contenu").animate({opacity: "hide"},"slow");
 $("#barremenu").animate({opacity: "hide"},"slow");
 $("html body").animate({backgroundColor: "#000000"}, 1000);

 redirectTime = "1000";
 redirectURL = "index.php";
 setTimeout("location.href = redirectURL;",redirectTime);
 }

function charge() {
$("html body").animate({backgroundColor: "#d8e1ff"}, 1000);
}
</script>

<script src="dist/js/jquery-1.11.2.min.js"></script>
<script src="dist/js/bootstrap.min.js "></script>
<script src="dist/js/fondu.js "></script>
<script src="dist/js/jquery-ui.min.js "></script>
<link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="dist/css/navbar.css" rel="stylesheet" type="text/css">
	
</head>
<body onload="charge()" style="background-color:black";">

<div id="header"></div>
<!--  Barre de navigation  -->

<div id="barremenu">
	<div style="background-color:#cbd1e7">
		<center><img src="img/PathéBARRYBlue2.PNG" /></center>
	</div>
	<nav class="navbar navbar-inverse navbar-static-top center" role="navigation">
 
		<div class="navbar-inner" id="annexe">
			<div class="optimus">
				<ul class="nav navbar-nav" >
							<li><a onclick="fonduaccueil()" href="#">Accueil</a></li>
								
							<li><a onclick="fondufdcs()" href="#">Stage chez FDCS Conseil</a></li>
							
							<li><a onclick="fonducarre()" href="#">Stage chez Carré Saveurs</a></li>
							
							<li><a href="#">Veille Technologique</a></li>
							
							<li><a href="competences.php">Compétences</a></li>
							
							<li><a href="ppe1.php">Projets Personnels</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>

<!--  Fin barre de navigation  -->
<div id="contenu">
	<center>
	<div style=" background-color:#557cfc; 
	padding:20px; text-align:justify; width:500px; 
	margin-left:50px; border: 2px solid #FFFFFF; border-radius: 25px;">
		<font color="white">
		<b style="font-size:30px;"><center>Veille Technologique</center></b>
		</br>
		Thème : La réalité virtuelle
		</br>
		Pour ma veille technologique, j'ai choisi le domaine du monde vidéoludique, tout d'abord car il
		s'agit de ma passion mais surtout parce que ces dernières années ont été mouvementées dans ce domaine.
	
		</font>
	</div>
	</center>
	<div style="clear:both"/>
	</br>
	</br>

	<div style="text-align:JUSTIFY; margin-left:50px; margin-right:50px;">
	
	<b style="font-size:30px;"><center>La réalité virtuelle</center></b>
	</br>
		J'ai effectué ma veille technologique à l'aide de sites consacrés au monde vidéoludique et
		au matériel informatique.
		</br></br>
		<a href="www.jeuxvideo.com">JeuxVideo.Com</a>  et <a href="www.gamekult.com">Gamekult</a>
		car ils se tiennent à jour quotidiennement au niveau de l'actualité du monde vidéoludique.
		</br>	
		<a href="http://www.tomshardware.fr/">Tom's Hardware</a> : Il informe sur le monde informatiquie aussi bien
		matériel et logiciel.
		</br>	
		
		</br>	
		<a href="http://www.jeuxvideo.com/news/419042/oculus-rift-crescent-bay-le-nouveau-modele-a-l-essai.htm">Oculus Rift Crescent Bay : Le nouveau modèle à l'essai</a> :
		</br>
		Avec la profusion de casques de réalité virtuelle annoncés un peu partout dans l'industrie, 
		il fallait bien retourner prendre des nouvelles de celui qui a lancé la machine : l'Oculus Rift. 
		Oculus m'a reçu sur son stand de la GDC pour me donner la possibilité d'enfiler le Crescent Bay 
		(nom du dernier prototype en date) pour assister à quelques démos techniques.
		</br>	
		
		</br>	
		<a href="http://www.tomshardware.fr/articles/oculus-rift-realite-virtuelle,1-55527.html">Tom’s Guide : l’Oculus Rift fait des petits</a> :
		</br>
		Nos collègues et voisins de chez Tom’s Guide ont récemment mis en ligne un dossier consacré aux clones de l’Oculus Rift, ce casque de réalité virtuelle dont on parle beaucoup depuis quelques mois.
		</br>	
		
		</br>	
		<a href="http://www.tomshardware.fr/articles/oculus-rift-realite-virtuelle,1-55527.html">Tom’s Guide : l’Oculus Rift fait des petits</a> :
		</br>
		Nos collègues et voisins de chez Tom’s Guide ont récemment mis en ligne un dossier consacré aux clones de l’Oculus Rift, ce casque de réalité virtuelle dont on parle beaucoup depuis quelques mois.
		</br>
		</br>
		
		<b style="font-size:25px;">Plus d'infos sur la réalité virtuelle > <a href="veilletechnologique2.php">ici</a> < </b>
	</div>
	<div style="clear:both"/>
	
	
</div>
</body>
</html>