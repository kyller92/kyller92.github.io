<!DOCTYPE HTML>
<html>
<title>Portfolio de Pathé BARRY</title>
<head>
<META charset="UTF-8">

<script type="text/javascript">
function fondufdcs() {
 $("#contenu").animate({opacity: "hide"},"slow");
 $("#barremenu").animate({opacity: "hide"},"slow");
 $("html body").animate({backgroundColor: "#000000"}, 1000);

 redirectTime = "1000";
 redirectURL = "fdcsconseil.php";
 setTimeout("location.href = redirectURL;",redirectTime);
}

function fonduveille() {
 $("#contenu").animate({opacity: "hide"},"slow");
 $("#barremenu").animate({opacity: "hide"},"slow");
 $("html body").animate({backgroundColor: "#000000"}, 1000);

 redirectTime = "1000";
 redirectURL = "veilletechnologique.php";
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
 $("html body").animate({backgroundColor: "#e8abd8"}, 1000);
 }

</script>

<script src="dist/js/jquery-1.11.2.min.js"></script>
<script src="dist/js/bootstrap.min.js "></script>
<script src="dist/js/fondu.js "></script>
<script src="dist/js/jquery-ui.min.js "></script>
<link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="dist/css/navbar.css" rel="stylesheet" type="text/css">
	
</head>
<body onload="charge()" style="background-color:#000000;">

<div id="header"></div>
<!--  Barre de navigation  -->

<div id="barremenu">
	<div style="background-color:purple;">
		<center><img src="img/PathéBARRY2.PNG" /></center>
	</div>
	<nav class="navbar navbar-inverse navbar-static-top center" role="navigation">
 
		<div class="navbar-inner" id="annexe">
			<div class="optimus">
				<ul class="nav navbar-nav" >
							<li><a onclick="fonduaccueil()" href="#">Accueil</a></li>
								
							<li><a onclick="fondufdcs()" href="#" >Stage chez FDCS Conseil</a></li>
							
							<li><a href="#">Stage chez Carré Saveurs</a></li>
							
							<li><a onclick="fonduveille()" href="#">Veille Technologique</a></li>
							
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
	<div style=" background-color:#7c1173; 
	padding:20px; text-align:justify; width:500px; 
	margin-left:50px; border: 2px solid #FFFFFF; border-radius: 25px;">
		<font color="white">
		<b style="font-size:30px;"><center>Carré Saveurs</center></b>
		</br>
		Carré Saveurs est un traiteur haut de gamme dirigé par Smina Zehzouh. 
		Elle possède un <b>service commercial situé à Antony et un atelier situé à Fresnes.</b>
		Cet entreprise propose de faire appel aux <b>services d'un chef à domicile ou de prendre 
		des cours de cuisine</b> pour plusieurs types de repas différents.
		</center>
		
		</font>
	</div>
	</center>
	<div style="clear:both"/>
	</br>
	</br>
	<div style="margin-left:10px; margin-right:50px;">
	
	
		<div style="float:left; background-color:#6ff0f7;
		width:300px; margin-left:5px; border: 4px solid #FFFFFF;">
			<img style="max-width:100%; max-height:100%;" src="img/part-7.jpg"/>
		</div>
		
		<div style="float:right; background-color:#6ff0f7;
		width:300px; margin-left:5px; border: 4px solid #FFFFFF;">
			<img style="max-width:100%; max-height:100%;" src="img/part-6.jpg"/>
		</div>
	
	
	<b style="font-size:30px;"><center>Le projet</center></b>
	</br>
		
		<div style="text-align:justify;">
		Carré Saveurs possédait un site Internet mais ce dernier était conçu par une entreprise tierce (Webformance) et 
		apporter des modifications étaient compliqués car ils ne pouvaient communiquer que par téléphone.
			</br>	
			</br>	
			Le projet consistait donc à refaire le site web et surtout à faire en sorte que celui-ci puisse être
			modifier par l'entreprise a tout moment.
			</br>	
			</br>	
			<center>	
			Le site est accessible > <a href="http://www.traiteur-carre-saveurs.com/">ici</a> <
		</br>
		<b style="font-size:30px;">Réalisations</b>
		<b>
		</br>
		- Site Web en PHP / MySql
			</br>	
		- Mise en place d'une base de données
			</br>	
		- Choix d'un hébergeur
			</br>	
			</br>	
		</b>
		</div>
		</center>
	</div>
</div>
</body>
</html>