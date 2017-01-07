<!DOCTYPE HTML>
<html>
<title>Portfolio de Path� BARRY</title>
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
		<center><img src="img/PathéBARRYBlue2.png" /></center>
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
	
	<div style="float:right; background-color:#FFFFFF;
		width:300px; margin-left:10px; margin-right:5px; border: 4px solid #000000;">
			<img style="max-width:100%; max-height:100%;" src="img/virtualboy.jpg"/>
			<center><b>La Virtual Boy</center></b>
		</div>
		
	<div style="text-align:JUSTIFY; margin-left:50px; margin-right:50px;">
	
	<b style="font-size:30px;"><center>La réalité virtuelle</center></b>
	</br>
		La réalité virtuelle est une simulation informatique interactive qui permet à
		l'utilisateur de vivre une expérience immersive dans des environnements réels ou imaginaires
		en faisant appel à la vue, l'ouïe voire le toucher.
		La réalité virtuelle a toujours intéressé les développeurs de jeux vidéo. 
		Par exemple, en 1995, Nintendo a tenté l'expérience avec la Virtual Boy. Malheureusement,
		ce fut un echec commercial. En effet, les gens souffraient d'une migraine rapidement pendant et
		après l'utilisation de la console.
		</br>	
		</br>	
	</div>
	<div style="clear:both"/>
	
		<div style="float:left; background-color:#FFFFFF;
		width:300px; margin-left:5px; margin-right:15px; border: 4px solid #000000;">
			<img style="max-width:100%; max-height:100%;" src="img/oculusvr.jpg"/>
			<center><b>L'Oculus Rift</center></b>
		</div>
		
	<div style="text-align:JUSTIFY; margin-left:50px; margin-right:50px;">
	</br>
		C'est en 2012 que la réalité virtuelle revient sur le devant de la scène grâce à Palmer Luckey.
		En effet, à l'aide d'une campagne de financement participatif sur Kickstarter, ce dernier va pouvoir concevoir 
		un premier prototype de casque VR : L'Oculus Rift
		</br>
		John Carmack (un célèbre développeur du jeu vidéo et un des fondateurs d'ID Software) se montre intéressé par 
		l'engin et y porte un de ses jeux : Doom 3. Ainsi, à l'aide de plusieurs investisseurs, Luckey fondera l'entreprise Oculus 
		VR. En 2013, Carmack quittera ID Software pour rejoindre Oculus VR et l'entreprise sera assistée par d'autres grands
		noms de l'industrie vidéoludique tels que Crytek, Harmonix ou même EA.
		</br></br>
		A ce jour, seul un Kit Développeur est accessible pour 300 € sur le site de l'entreprise, ce dernier comprend 
		(pour sa version la plus récente) : </br>
		 - Une résolution est de 960×1080 par oeil(ratio 4:5).</br>
		 - Un écran AMOLED</br>
		 - Du head-tracking</br></br>
		 </br>
		<b><center>Aujourd'hui, plusieurs concurrents tentent de faire face à l'Oculus Rift tels que Sony avec Morpheus ou Microsoft avec HoloLens.
	</div>
	<div style="clear:both"/>
	</br>
		<div style="float:left; background-color:#FFFFFF;
		width:300px; margin-left:5px; border: 4px solid #000000;">
			<img style="max-width:100%; max-height:100%;" src="img/morpheus.jpg"/>
			<center><b>Le morpheus de Sony</center></b>
		</div>
	
		<div style="float:right; background-color:#FFFFFF;
		width:300px; height:250px; margin-right:10px; border: 4px solid #000000;">
			<img style="width:100%; max-height:100%;" src="img/holo.jpg"/>
			<center><b>L'holoLens de Microsoft</center></b>
		</div>
	<div style="clear:both"/>	
</div>
</body>
</html>