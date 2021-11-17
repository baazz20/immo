<?php
include_once '../controllers/securityAction.php'; ?>
<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>ImmoPlus | poster une annonce</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
	<!-- alternatively you can use the font awesome icon library if using with `fas` theme (or Bootstrap 4.x) by uncommenting below. -->
	<!-- link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" crossorigin="anonymous" -->

	<!-- the fileinput plugin styling CSS file -->
	<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

	<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
	<!-- link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->

	<!-- the fileinput plugin styling CSS file -->
	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
	<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
	<!-- link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-city.jpg')">
		<!--   Creative Tim Branding   -->
		<a href="../index.php">
			<div class="logo-container">
				<div class="logo">
					<img src="assets/img/new_logo.png">
				</div>
				<div class="brand">
					ImmoPlus
				</div>
			</div>
		</a>

		<!--  Made With Material Kit  -->
		<a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">IP</div>
			<div class="made-with">Faire par <strong>ImmoPlus</strong></div>
		</a>

		<!--   Big container   -->
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<!--      Wizard container        -->
					<div class="wizard-container">
						<div class="card wizard-card" data-color="blue" id="wizard">
							<form action="../controllers/PostController" method="POST" enctype="multipart/form-data">
								<!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->
								<div class="wizard-header">
									<h3 class="wizard-title">
										Poste une annonce
									</h3>
									<h5>Ces informations nous permettront d'en savoir plus sur votre logement.</h5>
								</div>
								<div class="wizard-navigation">
									<ul>
										<li><a href="#location" data-toggle="tab">Emplacement</a></li>
										<li><a href="#type" data-toggle="tab">Type</a></li>
										<li><a href="#facilities" data-toggle="tab">Photo</a></li>
										<li><a href="#description" data-toggle="tab">Description</a></li>
									</ul>
								</div>

								<div class="tab-content">
									<div class="tab-pane" id="location">
										<div class="row">
											<div class="col-sm-12">
												<h4 class="info-text"> Commençons par les détails de base</h4>
											</div>
											<div class="col-sm-5 col-sm-offset-1">
												<div class="form-group label-floating">
													<label class="control-label">Surface de l'emplacement</label>
													<div class="input-group">
														<input type="text" class="form-control" name="surface">
														<span class="input-group-addon">M²</span>
													</div>
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group label-floating">
													<label class="control-label">Ville</label>
													<select class="form-control" name="ville">
														<option disabled="" selected=""></option>
														<option value="Abengourou">Abengourou</option>
														<option value="Aboisso">Aboisso</option>
														<option value="Adiaké">Adiaké</option>
														<option value="Adzopé">Adzopé</option>
														<option value="Agboville">Agboville</option>
														<option value="Agnéby">Agnéby</option>
														<option value="Agnibilekrou">Agnibilekrou</option>
														<option value="Akoupé">Akoupé</option>
														<option value="Alépé">Alépé</option>
														<option value="Anyama">Anyama</option>
														<option value="Arrah">Arrah</option>
														<option value="Assinie">Assinie</option>
														<option value="Bangolo">Bangolo</option>
														<option value="Beoumi">Beoumi</option>
														<option value="Bettié">Bettié</option>
														<option value="Biankouma">Biankouma</option>
														<option value="Bingerville">Bingerville</option>
														<option value="Blolé">Blolé</option>
														<option value="Bocanda">Bocanda</option>
														<option value="Bondoukou">Bondoukou</option>
														<option value="Bongouanou">Bongouanou</option>
														<option value="Bonoua">Bonoua</option>
														<option value="Bouaflé">Bouaflé</option>
														<option value="Bouaké">Bouaké</option>
														<option value="Bouna">Bouna</option>
														<option value="Boundiali">Boundiali</option>
														<option value="Dabakala">Dabakala</option>
														<option value="Dabou">Dabou</option>
														<option value="Daloa">Daloa</option>
														<option value="Danané">Danané</option>
														<option value="139">Daoukro</option>
														<option value="Daoukro">Didiévi</option>
														<option value="Dikodougou">Dikodougou</option>
														<option value="Dimbokro">Dimbokro</option>
														<option value="Divo">Divo</option>
														<option value="Doropo">Doropo</option>
														<option value="Ferkessédougou">Ferkessédougou</option>
														<option value="Fresco">Fresco</option>
														<option value="Gagnoa">Gagnoa</option>
														<option value="Grand-Bassam">Grand-Bassam</option>
														<option value="Grand-Lahou">Grand-Lahou</option>
														<option value="Guéyo">Guéyo</option>
														<option value="Guiglo">Guiglo</option>
														<option value="Guitry">Guitry</option>
														<option value="Issia">Issia</option>
														<option value="Jacqueville">Jacqueville</option>
														<option value="Kani">Kani</option>
														<option value="Katiola">Katiola</option>
														<option value="Korhogo">Korhogo</option>
														<option value="Koro">Koro</option>
														<option value="Kouibly">Kouibly</option>
														<option value="Koun-Fao">Koun-Fao</option>
														<option value="Kounahiri">Kounahiri</option>
														<option value="Kouto">Kouto</option>
														<option value="Lakota">Lakota</option>
														<option value="Bahiakro">M'Bahiakro</option>
														<option value="M'Batto">M'Batto</option>
														<option value="Madinani">Madinani</option>
														<option value="Man">Man</option>
														<option value="Mankono">Mankono</option>
														<option value="Nassian">Nassian</option>
														<option value="Niakaramandougou">Niakaramandougou</option>
														<option value="Odienné">Odienné</option>
														<option value="Ouangolodougou">Ouangolodougou</option>
														<option value="Oumé">Oumé</option>
														<option value="Priko">Priko</option>
														<option value="Sakassou">Sakassou</option>
														<option value="Samatiguila">Samatiguila</option>
														<option value="San-Pedro">San-Pedro</option>
														<option value="Sandégué">Sandégué</option>
														<option value="Sassandra">Sassandra</option>
														<option value="Séguéla">Séguéla</option>
														<option value="Sikensi">Sikensi</option>
														<option value="Sinématiali">Sinématiali</option>
														<option value="Sinfra">Sinfra</option>
														<option value="Soubré">Soubré</option>
														<option value="Tanda">Tanda</option>
														<option value="Tehini">Tehini</option>
														<option value="Tiapoum">Tiapoum</option>
														<option value="Tiassiaé">Tiassiaé</option>
														<option value="Tiebissou">Tiebissou</option>
														<option value="Tingréla">Tingréla</option>
														<option value="Touba">Touba</option>
														<option value="Toulepleu">Toulepleu</option>
														<option value="Transua">Transua</option>
														<option value="Vavoua">Vavoua</option>
														<option value="Yakassé-Attobrou">Yakassé-Attobrou</option>
														<option value="Yamoussoukro">Yamoussoukro</option>
														<option value="Zouan-Hounien">Zouan-Hounien</option>
														<option value="Zoukouboué">Zoukouboué</option>
														<option value="Zuénoula">Zuénoula</option>
													</select>
												</div>
											</div>
											<div class="col-sm-5 col-sm-offset-1">
												<div class="form-group label-floating">
													<label class="control-label">Saisir le titre l'annonce</label>
													<input type="text" class="form-control" name="titre">
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group label-floating">
													<label class="control-label">Prix de location ou de vente</label>
													<div class="input-group">
														<input type="text" class="form-control" name="prix">
														<span class="input-group-addon">FCFA</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="type">
										<h4 class="info-text">Quel type d'emplacement avez-vous ? </h4>
										<div class="row">
											<div class="col-sm-10 col-sm-offset-1">

												<div class="col-sm-4">
													<label class="btn btn-outline-info btn-lg w-30  form-check-label">
														<input class="form-check-input" type="radio" autocomplete="off" name="categorie" value="3"> Maison
													</label>
													<!-- <div class="choice" data-toggle="wizard-radio" rel="tooltip">
														<input type="radio" name="categorie" value="3" />
														<div class="icon">
															<i class="material-icons">house</i>
														</div>
														<h6>Maison</h6>
													</div> -->
												</div>
												<div class="col-sm-4">
													<label class="btn btn-outline-info btn-lg w-30 form-check-label">
														<input class="form-check-input" type="radio" autocomplete="off" name="categorie" value="1"> Appartement
													</label>
													<!-- <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Sélectionnez cette option si vous avez un Appartment.">
														<input type="radio" name="categorie" value="1" />
														<div class="icon">
															<i class="material-icons">apartment</i>
														</div>
														<h6>Appartement</h6>
													</div> -->
												</div>
												<div class="col-sm-4">
													<label class="btn btn-outline-info btn-lg w-30 form-check-label">
														<input class="form-check-input" type="radio" autocomplete="off" name="categorie" value="4"> Studio
													</label>
													<!-- <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Sélectionnez cette option si vous avez un Studio.">
														<input type="radio" name="categorie" value="4" />
														<div class="icon">
															<i class="material-icons">bedroom_child</i>
														</div>
														<h6>Studio</h6>
													</div> -->
												</div>
												<div class="col-sm-4">
													<label class="btn btn-outline-info btn-lg w-30 form-check-label">
														<input class="form-check-input" type="radio" autocomplete="off" name="categorie" value="2"> Villa
													</label>
													<!-- <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Sélectionnez cette option si vous avez une villa.">
														<input type="radio" name="categorie" value="2" />
														<div class="icon">
															<i class="material-icons">villa</i>
														</div>
														<h6>villa</h6>
													</div> -->
												</div>
												<div class="col-sm-4">
													<label class="btn btn-outline-info btn-lg w-30 form-check-label">
														<input class="form-check-input" type="radio" autocomplete="off" name="categorie" value="6"> Bureaux
													</label>
													<!-- <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Sélectionnez cette option si vous avez un Bureaux.">
														<input type="radio" name="categorie" value="6" />
														<div class="icon">
															<i class="material-icons">maps_home_work</i>
														</div>
														<h6>Bureaux</h6>
													</div> -->
												</div>
												<div class="col-sm-4">
													<label class="btn btn-outline-info btn-lg w-30 form-check-label">
														<input class="form-check-input" type="radio" autocomplete="off" name="categorie" value="7"> Duplex
													</label>
													<!-- <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Sélectionnez cette option si vous avez un Bureaux.">
														<input type="radio" name="categorie" value="6" />
														<div class="icon">
															<i class="material-icons">maps_home_work</i>
														</div>
														<h6>Bureaux</h6>
													</div> -->
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="facilities">
										<h4 class="info-text">Ajouter des photos pour gagner en visibilité. </h4>
										<div class="row">
											<div class="col-sm-2 col-sm-offset-0">
												<!--begin::Input group-->
												<div class="fv-row">
													<div class="input-group input-group-outline my-3">
															<label class="form-label btn btn-info">Photo Exterieur
															<input type="file" class="form-control" name="photo1" onchange="previewPicture(this)" required>
															</label>
														</div>
													<img src="#" alt="" id="image" style="max-width: 200px;">
												</div>
												<!--end::Input group-->
											</div>
											<div class="col-sm-1 col-sm-offset-2">
												<!--begin::Input group-->
													<div class="fv-row">
														<div class="input-group input-group-outline my-3">
															<label class="form-label btn btn-info">Photo Salon
															<input type="file" class="form-control" name="photo2" onchange="previewPicture1(this)" required>
															</label>
														</div>
														<img src="#" alt="" id="image1" style="max-width: 200px;">
													</div>
												<!--end::Input group-->
											</div>
											<div class="col-sm-2 col-sm-offset-3">
												<!--begin::Input group-->
													<div class="fv-row">
														<div class="input-group input-group-outline my-3">
															<label class="form-label btn btn-info">Photo Chambre
															<input type="file" class="form-control" name="photo3" onchange="previewPicture2(this)" required>
															</label>
														</div>
														<img src="#" alt="" id="image2" style="max-width: 200px;">
													</div>
												<!--end::Input group-->
											</div>
										</div>
									</div>
									<div class="tab-pane" id="description">
										<div class="row">
											<h4 class="info-text"> Laissez-nous une petite description. </h4>
											<div class="col-sm-6 col-sm-offset-1">
												<div class="form-group label-floating">
													<label class="control-label">Description du lieu</label>
													<textarea class="form-control" placeholder="" rows="9" name="description"></textarea>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group label-floating">
													<label class="control-label">Example</label>
													<p class="description">"L'endroit est vraiment sympa. Vous pouvez l'utiliser tous les dimanches lorsque vous allez à la pêche. C'est tellement génial."</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wizard-footer">
									<div class="pull-right">
										<input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next' value='Suivant' />
										<input type='submit' class='btn btn-finish btn-fill btn-info btn-wd' name='finish' value='Terminer' />
									</div>
									<div class="pull-left">
										<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Précédente' />
									</div>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div> <!-- wizard container -->
				</div>
			</div> <!-- row -->
		</div> <!--  big container -->

		<div class="footer">
			<div class="container text-center">
				Fait <i class="fa fa-heart heart"></i> par <a href="http://www.creative-tim.com">ImmoPlus</a>.
			</div>
		</div>
	</div>

</body>
<script type="text/javascript">
	// L'image img#image
	var image = document.getElementById("image");
	var image1 = document.getElementById("image1");
	var image2 = document.getElementById("image2");

	// La fonction previewPicture
	var previewPicture = function(e) {

		// e.files contient un objet FileList
		const [photo1] = e.files

		// "photo1" est un objet File
		if (photo1) {
			// On change l'URL de l'image
			image.src = URL.createObjectURL(photo1)
		}
	}
	var previewPicture1 = function(e) {

		// e.files contient un objet FileList
		const [photo2] = e.files

		// "photo2" est un objet File
		if (photo2) {
			// On change l'URL de l'image
			image1.src = URL.createObjectURL(photo2)
		}
	}
	var previewPicture2 = function(e) {

		// e.files contient un objet FileList
		const [photo3] = e.files

		// "photo3" est un objet File
		if (photo3) {
			// On change l'URL de l'image
			image2.src = URL.createObjectURL(photo3)
		}
	}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/piexif.min.js" type="text/javascript"></script>

<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/sortable.min.js" type="text/javascript"></script>

<!-- bootstrap.bundle.min.js below is needed if you wish to zoom and preview file content in a detail modal
    dialog. bootstrap 5.x or 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<!-- the main fileinput plugin script JS file -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/fileinput.min.js"></script>

<!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`). Uncomment if needed. -->
<!-- script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/themes/fas/theme.min.js"></script -->

<!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/locales/LANG.js"></script>
<script>
	var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
		url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
		paramName: "file", // The name that will be used to transfer the file
		maxFiles: 1,
		maxFilesize: 500, // MB
		addRemoveLinks: true,
		accept: function(file, done) {
			if (file.name == "wow.jpg") {
				done("Naha, you don't.");
			} else {
				done();
			}
		}
	});
	var myDropzone = new Dropzone("#kt_dropzonejs_example_2", {
		url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
		paramName: "file", // The name that will be used to transfer the file
		maxFiles: 1,
		maxFilesize: 500, // MB
		addRemoveLinks: true,
		accept: function(file, done) {
			if (file.name == "wow.jpg") {
				done("Naha, you don't.");
			} else {
				done();
			}
		}
	});
	var myDropzone = new Dropzone("#kt_dropzonejs_example_3", {
		url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
		paramName: "file", // The name that will be used to transfer the file
		maxFiles: 1,
		maxFilesize: 500, // MB
		addRemoveLinks: true,
		accept: function(file, done) {
			if (file.name == "wow.jpg") {
				done("Naha, you don't.");
			} else {
				done();
			}
		}
	});
</script>
<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js"></script>


</html>