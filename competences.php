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
 $("html body").animate({backgroundColor: "#688083"}, 1000);
 }

</script>

<script src="dist/js/jquery-1.11.2.min.js"></script>
<script src="dist/js/bootstrap.min.js "></script>
<script src="dist/js/fondu.js "></script>
<script src="dist/js/jquery-ui.min.js "></script>
<link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="dist/css/navbar.css" rel="stylesheet" type="text/css">
<link href="dist/css/tableau.css" rel="stylesheet" type="text/css">
	
</head>
<body onload="charge()" style="background-color:#000000;">

<div id="header"></div>
<!--  Barre de navigation  -->
<font color="white">
<div id="barremenu">
	<div style="background-color:purple;">
		<center><img src="img/PathéBARRY2.png" /></center>
	</div>
	<nav class="navbar navbar-inverse navbar-static-top center" role="navigation">
 
		<div class="navbar-inner" id="annexe">
			<div class="optimus">
				<ul class="nav navbar-nav" >
							<li><a onclick="fonduaccueil()" href="#">Accueil</a></li>
								
							<li><a onclick="fondufdcs()" href="#" >Stage chez FDCS Conseil</a></li>
							
							<li><a href="#">Stage chez Carré Saveurs</a></li>
							
							<li><a onclick="fonduveille()" href="#">Veille Technologique</a></li>
							
							<li><a href="#">Compétences</a></li>
							
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
	<div style="margin-left:10px; margin-right:50px;">
	
	<b><a href="img/grille.jpg"><font color="blue">Voir / Télécharger la grille</font></a></b>
	
	<table style="border-style:double;" >
	
	<tr><td><b>Activités</b></td><td><b>Compétences</b></td></tr>
	<tr><td><b>A1.1.1 : Analyse du cahier des charges d'un service à produire</b></td><td><b> 
		C1.1.1.1 Recenser et caractériser les contextes
		d’utilisation, les processus et les acteurs sur lesquels
		le service à produire aura un impact
		</br>C1.1.1.2 Identifier les fonctionnalités attendues du
		service à produire
		</br>C1.1.1.3 Préparer sa participation à une réunion 
</b></td></tr>
	<tr><td><b>A1.1.3 : Étude des exigences liées à la qualité attendue d'un service</b></td><td><b>
		C1.1.3.1 Recenser et caractériser les exigences liées
		à la qualité attendue du service à produire
		</br>C1.1.3.2 Recenser et caractériser les exigences de
		sécurité pour le service à produire

</b></td></tr>
	<tr><td><b>A1.2.1 : Élaboration et présentation d'un dossier de choix de solution technique</b></td><td><b>
	C1.2.1.1 Recenser et caractériser des solutions répondant au cahier des charges (adaptation d’une solution existante ou réalisation d’une nouvelle)
	</b></td></tr>
	<tr><td><b>A1.2.2 : Rédaction des spécifications techniques de la solution retenue</b></td><td><b>
		C1.2.2.1 Recenser les composants nécessaires à la
		réalisation de la solution retenue
		</br>C1.2.2.2 Décrire l’implantation des différents
		composants de la solution et les échanges entre eux </b></td></tr>
	<tr><td><b>A1.2.4 : Détermination des tests nécessaires à la validation d'un service</b></td><td><b>
		C1.2.4.1 Recenser les tests d’acceptation nécessaires
		à la validation du service et les résultats attendus
		</br>C1.2.4.2 Préparer les jeux d’essai et les procédures
		pour la réalisation des tests</b></td></tr>
	<tr><td><b>A1.2.5 : Définition des niveaux d'habilitation associés à un service </b></td><td><b>
		C1.2.5.1 Recenser les utilisateurs du service, leurs
		rôles et leur niveau de responsabilité
		</br>C1.2.5.2 Recenser les ressources liées à l’utilisation
		du service</b></td></tr>
	<tr><td><b>A1.3.1 : Test d'intégration et d'acceptation d'un service  </b></td><td><b>
		C1.3.1.1 Mettre en place l’environnement de test du
		service
		</br>C1.3.1.2 Tester le service</b></td></tr>
	<tr><td><b>A1.3.2 : Définition des éléments nécessaires à la continuité d'un service  </b></td><td><b>
			C1.3.2.1 Identifier les éléments à sauvegarder et à
		journaliser pour assurer la continuité du service et la
		traçabilité des transactions
		</br> C1.3.2.2 Spécifier les procédures d’alerte associées
		au service</b></td></tr>
	<tr><td><b>A1.3.4 : Déploiement d'un service   </b></td><td><b>C1.3.4.1 Mettre au point une procédure d’installation
		de la solution
		</br> C1.3.4.2 Automatiser l’installation de la solution
		</br> C1.3.4.3 Mettre en exploitation le service</b></td></tr>
	<tr><td><b>A1.4.1 : Participation à un projet   </b></td><td><b>C1.4.1.1 Établir son planning personnel en fonction
des exigences et du déroulement du projet</b></td></tr>

	<tr><td><b>A1.4.3 : Gestion des ressources </b></td><td><b>C1.4.3.1 Recenser les ressources humaines,
		matérielles, logicielles et budgétaires nécessaires à
		l’exécution du projet et de ses tâches personnelles
		</br> C1.4.3.2 Adapter son planning personnel en fonction
		des ressources disponibles 
		</b></td></tr>
		
	<tr><td><b>A2.1.1 : Accompagnement des utilisateurs dans la prise en main d'un service </b></td><td><b>C2.1.1.1 Aider les utilisateurs dans l’appropriation du
		nouveau service
		</br> C2.1.1.2 Identifier des besoins de formation
		complémentaires
		</br> C2.1.1.3 Rendre compte de la satisfaction des
		utilisateurs</b></td></tr>
		
	<tr><td><b>A2.3.1 : Identification, qualification et évaluation d'un problème  </b></td><td><b>C2.3.1.1 Repérer une suite de dysfonctionnements
		récurrents d’un service
		</br> C2.3.1.2 Identifier les causes de ce dysfonctionnement
		</br> C2.3.1.3 Qualifier le problème (contexte et
		environnement)
		</br> C2.3.1.4 Définir le degré d'urgence du problème
		</br> C2.3.1.5 Évaluer les conséquences techniques du
		problème</b></td></tr>
		
	<tr><td><b>A4.1.1 : Proposition d'une solution applicative  </b></td><td><b>C4.1.1.1 Identifier les composants logiciels
		nécessaires à la conception de la solution
		</br> C4.1.1.2 Estimer les éléments de coût et le délai de
		mise en œuvre de la solution</b></td></tr>
	<tr><td><b>A4.1.2 : Conception ou adaptation de l'interface utilisateur d'une solution applicative </b></td><td><b>C4.1.2.1 Définir les spécifications de l’interface
		utilisateur de la solution applicative
		</br> C4.1.2.2 Maquetter un élément de la solution
		applicative
		</br> C4.1.2.3 Concevoir et valider la maquette en
		collaboration avec des utilisateurs </b></td></tr>
	<tr><td><b>A4.1.3 : Conception ou adaptation d'une base de données </b></td><td><b>C4.1.3.1 Modéliser le schéma de données nécessaire
		à la mise en place de la solution applicative
		</br> C4.1.3.2 Implémenter le schéma de données dans
		un SGBD
		</br> C4.1.3.3 Programmer des éléments de la solution
		applicative dans le langage d’un SGBD
		</br> C4.1.3.4 Manipuler les données liées à la solution
		applicative à travers un langage de requête</b></td></tr>
	<tr><td><b>A4.1.7 : Développement, utilisation ou adaptation de composants logiciels </b></td><td><b></br> C4.1.7.1 Développer les éléments d’une solution
		</br> C4.1.7.2 Créer un composant logiciel
		</br> C4.1.7.3 Analyser et modifier le code d’un composant
		logiciel
		</br> C4.1.7.4 Utiliser des composants d’accès aux
		données
		</br> C4.1.7.5 Mettre en place des éléments de sécurité liés
		à l’utilisation d’un composant logiciel</b></td></tr>
	<tr><td><b>A4.1.8 : Réalisation des tests nécessaires à la validation d'éléments adaptés ou développés  </b></td><td><b>C4.1.8.1 Élaborer et réaliser des tests unitaires
		</br> C4.1.8.2 Mettre en évidence et corriger les écarts</b></td></tr>
		
	<tr><td><b>A4.2.1 : Analyse et correction d'un dysfonctionnement, d'un problème de qualité de …</b></td><td><b> C4.2.1.1 Élaborer un jeu d’essai permettant de
		reproduire le dysfonctionnement
		</br> C4.2.1.2 Repérer les composants à l’origine du
		dysfonctionnement
		</br> C4.2.1.3 Concevoir les mises à jour à effectuer
		</br> C4.2.1.4 Réaliser les mises à jour</b></td></tr>
		
	<tr><td><b>A4.2.2 : Adaptation d'une solution applicative aux évolutions de ses composants </b></td><td><b>C4.2.2.1 Repérer les évolutions des composants
		utilisés et leurs conséquences
		</br> C4.2.2.2 Concevoir les mises à jour à effectuer
		</br> C4.2.2.3 Élaborer et réaliser les tests unitaires des
		composants mis à jour</b></td></tr>
	<tr><td><b>A4.2.3 : Réalisation des tests nécessaires à la mise en production d'éléments mis à jour </b></td><td><b></br> C4.2.3.1 Élaborer et réaliser des tests d’intégration et
		de non régression de la solution mise à jour
		</br> C4.2.3.2 Concevoir une procédure de migration et
		l’appliquer dans le respect de la continuité de service</b></td></tr>
	<tr><td><b>A4.2.4 : Mise à jour d'une documentation technique </b></td><td><b></br> C4.2.4.1 Repérer les éléments de la documentation à
		mettre à jour
		</br> C4.2.4.2 Mettre à jour une documentation</b></td></tr>
	<tr><td><b>A5.1.1 : Mise en place d'une gestion de configuration </b></td><td><b>C5.1.1.1 Recenser les caractéristiques techniques
		nécessaires à la gestion des éléments de la configuration
		d’une organisation
		</br> C5.1.1.2 Paramétrer une solution de gestion des
		éléments d’une configuration</b></td></tr>
	<tr><td><b>A5.1.2 : Recueil d'informations sur une configuration et ses éléments</b></td><td><b>C5.1.2.1 Renseigner les événements relatifs au cycle de
		vie d’un élément de la configuration
		</br> C5.1.2.2 Actualiser les caractéristiques des éléments de
		la configuration
		</b></td></tr>
	<tr><td><b>A5.1.3 : Suivi d'une configuration et de ses éléments </b></td><td><b>C5.1.3.1 Contrôler et auditer les éléments de la
		configuration
		</br> C5.1.3.2 Reconstituer un historique des modifications
		effectuées sur les éléments de la configuration
		</br> C5.1.3.3 Identifier les éléments de la configuration à
		modifier ou à remplacer </b></td></tr>
	<tr><td><b>A5.1.5 : Évaluation d'un élément de configuration ou d'une configuration  </b></td><td><b>C5.1.5.2 Apprécier la valeur actuelle d'un élément de
		configuration
		</b></td></tr>
	<tr><td><b>A5.2.1 : Exploitation des référentiels, normes et standards adoptés par le prestataire</b></td><td><b> C5.2.1.1 Évaluer le degré de conformité des pratiques à
		un référentiel, à une norme ou à un standard adopté par
		le prestataire informatique
		</br> C5.2.1.2 Identifier et partager les bonnes pratiques à
		intégrer</b></td></tr>
	<tr><td><b>A5.2.2 : Veille technologique </b></td><td><b>C5.2.2.1 Définir une stratégie de recherche
		d’informations
		</br> C5.2.2.2 Tenir à jour une liste de sources d'information
		</br> C5.2.2.3 Évaluer la qualité d'une source d'information en
		fonction d'un besoin
		</br> C5.2.2.4 Synthétiser et diffuser les résultats d'une veille</b></td></tr>
	<tr><td><b>A5.2.4 : Étude d˜une technologie, d'un composant, d'un outil ou d'une méthode </b></td><td><b>
	C5.2.4.1 Se documenter à propos d‘une technologie,
		d’un composant, d’un outil ou d’une méthode
		</br> C5.2.4.2 Identifier le potentiel et les limites d'une
		technologie, d’un composant, d’un outil ou d’une
		méthode par rapport à un service à produire 
		</b></td></tr>
	
	</table>
			</br>	
			</br>	
		</b>
		</div>
		</center>
	</div>
</div>
</body>
</html>