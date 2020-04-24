<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Competition du BOL D'AIR</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!-- css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  <!-- pour JQuery qui est necessaire pour le fonctionnement de boostrap (javascript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    <!--javascript a besoin de JQuery pour marcher -->
	<link href="css/style.css" rel="stylesheet">
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
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Accueil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://www.ckc-saintvicturnien.fr/article.php3?id_article=65">Actualité</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://www.ckc-saintvicturnien.fr/IMG/pdf/plaquette-bol-air-2019-web.pdf">Dossier</a>
			</li>
			<li class="nav-item menu_inscrire">
				<a class="nav-link" href="choixInscription.php">S'inscrire</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Connecter</a>
			</li>
		</ul>
	</div>
</nav>

<!--- Image Accueil -->
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/background-accueil1.png" alt="background1">
		<div class="carousel-caption">
			<h1 class="display-2">BIENVENUE AU BOL D'AIR 2020</h1>
			<h3> Challenger, s'eppanuir, exploiter ses competences et passer un bon moment </h3>
			<a href="choixInscription.php"><button type="button" class="btn btn-outline-light btn-lg">Participer</button></a>
			<button type="button" class="btn btn-primary btn-lg">Edition 2019</button>
		</div>
	</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding" style = "background-color: #2A4B15; color: white">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Tout savoir sur le BOL D'AIR</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">Le BOL D'AIR est une competition sportive regionale de la ville de Limoges <br> 
				<em>La competition est diviser en 2 categoties: <strong>Le Mini Bol</strong> et <strong>le Grand Bol </strong>tous se deroulant sous 3 etapes</em>
			</p>
		</div>
	</div>
</div>

<!--- Three Column Section -->
<div class="containner-fluid padding"  style = "background-color: #2A4B15; color: black;">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<h3>Une course a pied</h3>
			<P></P>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<h3>Une course a vélo</h3>
			<P></P>
		</div>
		<div class="col-sm-12 col-md-4">
			<h3>Une course a canoe</h3>
			<P></P>
		</div>
	</div> 
	<!-- <hr class="my-4"> -->
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding" style="border: 1px solid gray; background-color: #2A4B15;">
		<div class="col-lg-6" style=" color: white;">
			<h2>Course a pied</h2>
			<p>Raid Canoê VTT course à pied..</p>
			<p>	Cette épreuve sportive est ouverte à toute personne de + de 16 ans (+ de 14 ans pour le mini BOL D’AIR).
				Ces deux épreuves se déroulent par équipe de deux
			</p>
			<br>
			<a href="http://www.ckc-saintvicturnien.fr/rubrique.php3?id_rubrique=11" class="btn btn-primary">Learn More</a>
		</div>
		<div class="col-lg-6">
			<img src="img/course-pied.jpg" class="img-fluid">
		</div>
	</div>
</div>

<div class="container-fluid padding">
	<div class="row padding" style="border: 1px solid gray; background-color: #2A4B15;">
		<div class="col-lg-6">
			<img src="img/course-velo.jpg" class="img-fluid">
		</div>
		<div class="col-lg-6" style=" color: white;">
			<h2>Course a velo</h2>
			<p>Raid Canoê VTT course à pied..</p>
			<p>	Cette épreuve sportive est ouverte à toute personne de + de 16 ans (+ de 14 ans pour le mini BOL D’AIR).
				Ces deux épreuves se déroulent par équipe de deux
			</p>
			<br>
			<a href="http://www.ckc-saintvicturnien.fr/rubrique.php3?id_rubrique=11" class="btn btn-primary">Learn More</a>
		</div>
	</div>
</div>

<div class="container-fluid padding">
	<div class="row padding" style="border: 1px solid gray; background-color: #2A4B15;">
		<div class="col-lg-6" style=" color: white;">
			<h2>Course a canoe</h2>
			<p>Raid Canoê VTT course à pied..</p>
			<p>	Cette épreuve sportive est ouverte à toute personne de + de 16 ans (+ de 14 ans pour le mini BOL D’AIR).
				Ces deux épreuves se déroulent par équipe de deux
			</p>
			<br>
			<a href="http://www.ckc-saintvicturnien.fr/rubrique.php3?id_rubrique=11" class="btn btn-primary">Learn More</a>
		</div>
		<div class="col-lg-6">
			<img src="img/course-canoe.jpg" class="img-fluid">
		</div>
	</div>
</div>

<hr class="my-4">

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