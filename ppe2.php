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
 function fonducarre() {
 $("#contenu").animate({opacity: "hide"},"slow");
 $("#barremenu").animate({opacity: "hide"},"slow");
 $("html body").animate({backgroundColor: "#000000"}, 1000);

 redirectTime = "1000";
 redirectURL = "carresaveurs.php";
 setTimeout("location.href = redirectURL;",redirectTime);
}

function charge() {
 $("html body").animate({backgroundColor: "#DFF2FF"}, 1000);
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
	<div style="background-color:#DFF2FF;">
		<center><img src="img/PathéBARRYBlue2.PNG" /></center>
	</div>
	<nav class="navbar navbar-inverse navbar-static-top center" role="navigation">
 
		<div class="navbar-inner" id="annexe">
			<div class="optimus">
				<ul class="nav navbar-nav" >
							<li><a onclick="fonduaccueil()" href="#">Accueil</a></li>
								
							<li><a onclick="fondufdcs()" href="#" >Stage chez FDCS Conseil</a></li>
							
							<li><a onclick="fonducarre()" href="#">Stage chez Carré Saveurs</a></li>
							
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
	
	</br>
	</br>
	
		
		<div style="text-align:justify; width:80%;margin-left:10px; margin-right:50px;">
	
		<b style="font-size:20px;"><u>PPE Village Vacances Alpes - Espace Jeu</u></b>
		<b>
		</br>
		<u>Contexte : </u> </br> Ce projet a pour origine le contexte VVA (Village Vacances Alpes)
			</br></br>	
		<u>Description : </u> </br>

		<b style="font-size:10px;">Expression du besoin</b></br></br>
		L’association VVA (Village Vacances Alpes) possède un espace communautaire dédié aux jeux vidéos où chaque membre peut
		voir, commenter et noter chaque jeu présent sur le site. Les modérateurs, quant à eux, peuvent ajouter
		des jeux sur le site.
		
			</br>
			</br>
		<b style="font-size:10px;">Solution</b></br></br>
		Une application web codée à l'aide des langages PHP et MySql.
		Utilisation du framework Bootstrap.
		Un utilisateur se connecte sur l'application avec son identifiant et mot de passe. Le programme vérifie s'il s'agit d'un membre ou d'un modérateur
		et propose 
		des options en fonction du type de l'utilisateur connecté. 
			</br>	
			</br>	
		</b>
		<b style="font-size:20px;"><u>Validation du référentiel :</u></b></br></br>
		A1.2.1 : Élaboration et présentation d'un dossier de choix de solution technique</br>
		A1.4.1 : Participation à un projet </br>
		A4.1.1 : Proposition d'une solution applicative</br>
		A4.1.2 : Conception ou adaptation de l'interface utilisateur d'une solution applicative</br>
		A4.1.3 : Conception ou adaptation d'une base de données</br>
		A4.1.7 : Développement, utilisation ou adaptation de composants logiciels</br>
		
		</div>
		
		
		</center>
	</div>
</div>
</body>
</html>