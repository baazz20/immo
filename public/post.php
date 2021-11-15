<!doctype html>
<html lang="en">

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
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-city.jpg')">
		<!--   Creative Tim Branding   -->
		<a href="http://creative-tim.com">
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
							<form action="" method="">
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
														<input type="text" class="form-control">
														<span class="input-group-addon">M²</span>
													</div>
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group label-floating">
													<label class="control-label">Ville</label>
													<select name="country" class="form-control">
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
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group label-floating">
													<label class="control-label">Prix de location ou de vente</label>
													<div class="input-group">
														<input type="text" class="form-control">
														<span class="input-group-addon">FCFA</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="type">
										<h4 class="info-text">Quel type d'emplacement avez-vous ? </h4>
										<div class="row">
											<div class="col-sm-12 col-sm-offset-0">
												<div class="col-sm-4" style="max-width: 20%; ">
													<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Sélectionnez cette option si vous avez une maison.">
														<input type="radio" name="type" value="House">
														<div class="icon">
															<i class="material-icons">house</i>
														</div>
														<h6>Maison</h6>
													</div>
												</div>
												<div class="col-sm-4" style="max-width: 20%;">
													<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Sélectionnez cette option si vous avez un Appartment.">
														<input type="radio" name="type" value="Appartment">
														<div class="icon">
															<i class="material-icons">apartment</i>
														</div>
														<h6>Appartment</h6>
													</div>
												</div>
												<div class="col-sm-4" style="max-width: 20%;">
													<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Sélectionnez cette option si vous avez un Studio.">
														<input type="radio" name="type" value="Appartment">
														<div class="icon">
															<i class="material-icons">bedroom_child</i>
														</div>
														<h6>Studio</h6>
													</div>
												</div>
												<div class="col-sm-4" style="max-width: 20%;">
													<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Sélectionnez cette option si vous avez une villa.">
														<input type="radio" name="type" value="Appartment">
														<div class="icon">
															<i class="material-icons">villa</i>
														</div>
														<h6>villa</h6>
													</div>
												</div>
												<div class="col-sm-4" style="max-width: 20%;">
													<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Sélectionnez cette option si vous avez un Bureaux.">
														<input type="radio" name="type" value="Appartment">
														<div class="icon">
															<i class="material-icons">maps_home_work</i>
														</div>
														<h6>Bureaux</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="facilities">
										<h4 class="info-text">Ajouter des photos pour gagner en visibilité. </h4>
										<div class="row">
											<div class="col-sm-4 col-sm-offset-1" style="max-width: 20%;">
												<div class="picture-container">
													<div class="picture">
														<img src="assets/img/avatar1.png" class="picture-src" id="wizardPicturePreview" title="">
														<input type="file" id="wizard-picture">
													</div>
													<h6>Image Extérieur</h6>
												</div>
											</div>
											<div class="col-sm-4 col-sm-offset-1" style="max-width: 20%;">
												<div class="picture-container">
													<div class="picture">
														<img src="assets/img/avatar1.png" class="picture-src" id="wizardPicturePreview" title="">
														<input type="file" id="wizard-picture">
													</div>
													<h6>Image du Salon</h6>
												</div>
											</div>
											<div class="col-sm-4 col-sm-offset-1" style="max-width: 20%;">
												<div class="picture-container">
													<div class="picture">
														<img src="assets/img/avatar1.png" class="picture-src" id="wizardPicturePreview" title="">
														<input type="file" id="wizard-picture">
													</div>
													<h6>Image d'une Chambre ou autre piece sinon</h6>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="description">
										<div class="row">
											<h4 class="info-text"> Laissez-nous une petite description. </h4>
											<div class="col-sm-6 col-sm-offset-1">
												<div class="form-group label-floating">
													<label class="control-label">Description du lieu</label>
													<textarea class="form-control" placeholder="" rows="9"></textarea>
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
										<input type='button' class='btn btn-finish btn-fill btn-info btn-wd' name='finish' value='Terminer' />
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
<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js"></script>

</html>