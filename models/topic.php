<?php require_once 'controllers/database.php';
$id_annonce = (int) trim(htmlentities($_GET['id_annonce']));
$id_annonceur = (int) trim(htmlentities($_GET['id_annonceur']));

$requete = $bdd->query("SELECT * FROM annonce INNER JOIN annonceur ON annonce.id_annonceur = annonceur.id 
 INNER JOIN immo_categorie ON annonce.id_categorie = immo_categorie.id WHERE annonce.id = $id_annonce AND  annonceur.id = $id_annonceur");
$tmp = 1;
?><?php while ($topic = $requete->fetch(PDO::FETCH_NUM)) { ?>
<section class="py-sm-2 py-5 position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 mx-auto">
        <div class="row py-lg-7 py-5">
          <div class="col-lg-7 col-md-7 position-relative my-auto">
            <div id="carouselExampleDark_<?= htmlentities($topic[0]); ?>" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark_<?= htmlentities($topic[0]); ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark_<?= htmlentities($topic[0]); ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark_<?= htmlentities($topic[0]); ?>" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="../public/uploads/photoExt/<?= htmlentities($topic[9]); ?>" class="img-fluid border-radius-lg" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="h6 text-info icon-move-right">ImmoPlus</h5>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="../public/uploads/photoSalon/<?= htmlentities($topic[10]); ?>" class="img-fluid border-radius-lg" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="h6 text-info icon-move-right">ImmoPlus</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../public/uploads/photoChambre/<?= htmlentities($topic[11]); ?>" class="img-fluid border-radius-lg" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="h6 text-info icon-move-right">ImmoPlus</h5>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark_<?= htmlentities($topic[0]); ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark_<?= htmlentities($topic[0]); ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 z-index-2 position-relative px-md-5 px-sm-5 mt-sm-0 mt-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h3 class="mb-0"><?php echo htmlentities($topic[3]); ?></h3>
              
            </div>
            <div class="row mb-4">
              <div class="col-auto">
                <span class="h6 text-info icon-move-right"><i class="fas fa-layer-group text-sm ms-1"></i> <?php echo htmlentities($topic[5]); ?></span>
                <span>M²</span>
              </div>
              <div class="col-auto">
                <span class="h6 text-info icon-move-right"><i class="fas fa-house-user text-sm ms-1"></i> <?php echo htmlentities($topic[21]); ?></span>
              </div>
              <div class="col-auto">
                <span class="h6 text-info icon-move-right"><i class="fas fa-map-marked text-sm ms-1"></i> <?php echo htmlentities($topic[6]); ?>, </span>
                <span>Côte d'Ivoire</span>
              </div>
            </div>
            <div class="d-block">
                <h2 class=" btn-outline-info text-nowrap mb-0"><i class="fas fa-money-bill text-sm ms-1"></i> <?php echo htmlentities($topic[4]); ?></h2>
              </div>
            <p class="text-lg mb-0">
              <?php echo htmlentities($topic[7]); ?> <br>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<h2 class="text-center"> Contacter l'agent Immobilier</h2>
<section class="py-lg-7">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card overflow-hidden mb-5 col-lg-10">
            <div class="row">
              <div class="col-lg-2">
                <div class="card-header px-4 py-sm-5 py-3">
                <a href="mailto: <?php echo htmlentities($topic[15]); ?>" type="button" class="btn btn-info">Evoyer un email</a>
                </div>
              </div>
              <div class="col-lg-10 position-relative bg-cover px-0" style="background-image: url('assets/img/curved-images/curved5.jpg')">
                <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                  <img src="assets/img/wave-1.svg" class="h-100 ms-n2" alt="vertical-wave">
                </div>
                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                  <div class="mask bg-gradient-info opacity-9"></div>
                  <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                    <h3 class="text-white">Coordonnées</h3>
                    <p class="text-white opacity-8 mb-4">Appeler l'agent <?php echo htmlentities($topic[14]); ?> avec les Coordonnées suivante</p>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-phone text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">(+225) <?php echo htmlentities($topic[16]); ?></span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-envelope text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8"><?php echo htmlentities($topic[15]); ?></span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-map-marker-alt text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">Cocody, RO 010458</span>
                      </div>
                    </div>
                    <div class="mt-4">
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                        <i class="fab fa-facebook"></i>
                      </button>
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                        <i class="fab fa-twitter"></i>
                      </button>
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                        <i class="fab fa-dribbble"></i>
                      </button>
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                        <i class="fab fa-instagram"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- END Testimonials w/ user image & text & info -->
<!-- START Blogs w/ 4 cards w/ image & text & link -->
<?php $tmp++;
  } ?>