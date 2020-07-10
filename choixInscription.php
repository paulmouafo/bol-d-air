<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Competition du BOL D'AIR</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!-- css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  <!-- pour JQuery qui est necessaire pour le fonctionnement de boostrap (javascript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  <!--javascript a besoin de JQuery pour marcher -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/inscription.css" rel="stylesheet">
</head>
<body>



<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light  sticky-top" style="background-color: #0F8723;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/logo8.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
	</div>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Accueil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://www.ckc-saintvicturnien.fr/article.php3?id_article=65">Actualité</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://www.ckc-saintvicturnien.fr/IMG/pdf/plaquette-bol-air-2019-web.pdf">Dossier</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="choixInscription.php">S'inscrire</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Connecter</a>
			</li>
		</ul>
	</div>
</nav>



<!--- Choix de l'inscription -->
<div class="background" style="border: 1px solid gray;">
	<div class="container " style="background-color: #2A4B15;  margin-top: 100px;">
		<div class="raw welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Je m'inscris en tant que: </h1>
			</div>
		</div>
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<a href="inscriptionBenevole.php"><h3>Bénévole</h3></a>
				<P></P>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<a href="inscriptionParticipantCapitain.php"><h3>Participant</h3></a>
				<P></P>
			</div>
		</div>
	</div>
</div>



<!--- Connect -->
<!-- <div class="container-fluid padding"  style = "background-color: #2A4B15;">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"> <i class="fab fa-facebook"></i> </a>
			<a href="#"> <i class="fab fa-twitter"></i> </a>
			<a href="#"> <i class="fab fa-google-plus-g"></i> </a>
			<a href="#"> <i class="fab fa-instagram"></i> </a>
			<a href="#"> <i class="fab fa-youtube"></i> </a>
		</div>

	</div>
</div> -->

<!--- Footer -->
<footer style="background-color: #0F8723;">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<img src="img/logo8.png" >
				<hr class="light" color="beige">
				<p>CKC Canoë Kayak Club Saint Victurnien</p>
				<p>Mairie - 87420 ST VICTURNIEN</p>
				<p>La Base : Le Normandie - ST VICTURNIEN</p>
			</div>
			<div class="col-md-4">
				<hr class="light" color="beige">
				<h5>Horaires</h5>
				<hr class="light" color="beige">
				<p>Monday: 9am - 5pm</p>
				<p>Saturday: 9am - 5pm</p>
				<p>Sunday: closed</p>
			</div>
			<div class="col-md-4">
				<hr class="light" color="beige">
				<h5>Contacts Services</h5>
				<hr class="light" color="beige">
				<p>tel: 05.55.03.25.84</p>
				<p>fax: 05.55.03.81.27</p>
				<p>mail: contact@ckc-saintvicturnien.fr</p>
			</div>
		</div>
	</div>
</footer>



</body>
</html>