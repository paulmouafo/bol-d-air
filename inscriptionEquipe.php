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
						<a class="dropdown-item" href="inscriptionBenevole.php">Bénévole</a>
						<a class="dropdown-item" href="inscriptionParticipantCapitain.php">Equipe </a>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Connecter</a>
			</li>
		</ul>
	</div>
</nav>



<!--- Formulaire d'inscription -->
<div class="container-fluid background">
	<div class="row">
		<div class="col-lg-3">
		</div>

		<div class="col-lg-6 transbox">
			<h3 class="block-title" Style="text-align: center;">Finaliser votre inscription</h3>
			<form action="gestionValidationEquipe.php" method="POST" class="form">

				<div class="form-group row item1">
					<label class="col-sm-4 col-form-label" for="nomEquipe">Nom d'équipe</label>
					<div class="col-sm-8 item2">
						<input type="text" name="nomEquipe" id="club" placeholder="Votre club..." required>
					</div>
				</div>

                <div class="col-12 text-center">
                    <h4>Choix du bol</h4>
                    <h6>Comprend Ravitaillement, Repas et t-shirt de l'epreuve</h6><br>
                    <div class="form-check-inline">
						<div class="col-sm-5 radio">
							<label for="miniBol"><input type="radio" name="RadioBol" id="miniBol" value='1'> Mini Bol d'Air <p>(20€x2 = 40€)</p> </label>
						</div>
						<div class="col-sm-2 ">
						</div>
						<div class="col-sm-5 radio">
							<label for="grandBol"><input type="radio" name="RadioBol" id="grandBol" value='2'> Bol d'Air (25€x2 = 50€)</label>
						</div>
					</div>
                </div>

				<div class="col-sm-12 text-center form-check-inline">
					<h4>Categorie</h4>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="categorie" id="h" >
						<label class="form-check-label" for="h"> HOMMES</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="categorie" id="f" >
						<label class="form-check-label" for="f"> FEMMES</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="categorie" id="m" >
						<label class="form-check-label" for="m"> MIXTE</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="categorie" id="v" >
						<label class="form-check-label" for="v"> V.A.E</label>
					</div>
				</div>

                <div class="form-group row text-center item1">
                    <label class="col-sm-4 col-form-label" for="repasSup">Repas supplementaire (7€ /pers)</label>
                    <div class="col-sm-4">
                        <input type="text" name="repasSup" id="repasSup" placeholder="Nombre de plats">
                    </div>
                </div>

				<div class="form-group row item2">
					<div class="col-sm-3"><a href="inscriptionParticipantEquipier.php"><input type="button" class="btn btn-primary" value="Précédent"></a></div>
					<div class="col-sm-3"></div>
					<div class="col-sm-3"></div>
					<div class="col-sm-3"><input type="submit" class="btn btn-primary" value="Enregistrer" name='enregistrer'></div>
				</div>
			</form>
		</div>

		<div class="col-lg-3">
		</div>
	</div>
</div>


<!--- Connect -->
<div class="container-fluid padding"  >
	<div class="row text-center padding" style = "background-color: #2A4B15;">
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



</body>
</html>