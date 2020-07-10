<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Competition du BOL D'AIR</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/inscription.css" rel="stylesheet">
</head>


<body >

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
			<li class="nav-item ">
				<a class="nav-link" href="index.php">Accueil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://www.ckc-saintvicturnien.fr/article.php3?id_article=65">Actualité</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://www.ckc-saintvicturnien.fr/IMG/pdf/plaquette-bol-air-2019-web.pdf">Dossier</a>
			</li>
			<li class="nav-item active">
				<div class="dropdown">
					<button class="btn dropdown-toggle  menu_inscrire" style="background-color: #0F8723;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						S'inscrire
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="inscriptionBenevole.php">Benevole</a>
						<a class="dropdown-item" href="inscriptionParticipantCapitain.php">Participant </a>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Sign</a>
			</li>
		</ul>
	</div>
</nav>



<!--- Formulaire d'inscription    style=" background-color: #2A4B15; color: white;"  -->
<div class="container-fluid background" >
	<div class="row">
		<div class="col-lg-3">
		</div>
		
		<div class="col-lg-6 transbox">
			<h3 class="block-title" style="text-align: center;">Inscription Bénévole</h3>
			<form enctype="multipart/form-data" action="gestionFormulaire.php" class="form" method="POST">

				<div class="form-group row item1">
					<label class="col-sm-4 col-form-label" for="fname">Nom</label>
					<div class="col-sm-8 item2">
						<input type="text" class="form-control" id="fname" name="firstname" required placeholder="Votre nom..">
					</div>
				</div>
			
				<div class="form-group row item1">
					<label class="col-sm-4 col-form-label" for="lname">Prenom</label>
					<div class="col-sm-8 item2">
						<input type="text" class="form-control" id="lname" name="lastname" required placeholder="Votre prenom..">
					</div>
				</div>
			
				<div class="form-group row item1">
					<label class="col-sm-4 col-form-label" for="dbirth">Date de Naissance</label>
					<div class="col-sm-8 item2">
						<input type="date" class="form-control" id="dbirth" required name="datenaissance">
					</div>
				</div>

				<div class="form-group row item1">
					<label class="col-sm-4 col-form-label" for="email">Mail</label>
					<div class="col-sm-8 item2">
						<input type="mail" class="form-control" id="email" name="mail" required placeholder="Votre email..">
					</div>
				</div>
				
				<div class="form-group row item1">
					<label class="col-sm-4 col-form-label" for="tel">Tel</label>
					<div class="col-sm-8 item2">
						<input type="text" class="form-control" id="tel" name="tel" required placeholder="Votre numero..">
					</div>
				</div>
				
				<div class="form-group row item1">
					<label class="col-sm-4 col-form-label" for="adresse">Adresse</label>
					<div class="col-sm-8 item2">
						<input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse..">
					</div>
				</div>
			
				<div class="form-group row item1">
					<label class="col-sm-4 col-form-label" for="poste">Poste souhaité</label>
					<div class="col-sm-8 item2">
						<select class="custom-select" id="poste" name="poste">
							<option>Choisir un poste</option>
							<option value="1">Signaleur</option>
							<option value="2">Ravitaillement</option>
							<option value="3">Chronométrage</option>
							<option value="4">Moto (fermeture)</option>
							<option value="5">Buvette</option>
							<option value="6">Repas</option>
							<option value="7">Photographe</option>
						</select>
					</div>
				</div>
			
				<div class="form-group row item1">
					<label class="col-sm-4 col-form-label" for="permis">Permis de conduite</label>
					<div class="col-sm-8 item2">
						<div class="custom-file">
							<input type="file" name="fichier" size="30" value="Uploader">
							<!-- <input type="submit" name="upload" value="Uploader"> -->

						</div>
					</div>
				</div>
			
				<div class="form-group row item2">
					<div class="col-sm-2">
						<a href="choixInscription.php"><input type="button" class="btn btn-primary" value="Annuler"></a>
					</div>
					<div class="col-sm-10">
						<input type="submit" class=" btn btn-primary" value="S'inscrire" name="inscrireB" onclick="validationInscription()">
					</div>
				</div>	

			</form>
		</div>

		<div class="col-lg-3">	
		</div>
	</div>
	
</div>

<!--- Connect -->
<div class="container-fluid padding"  style = "background-color: #2A4B15;">
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
</div>

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

<script src="js/inscriptionBenevole.js"></script>

</body>
</html>