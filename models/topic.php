<?php require_once 'controllers/database.php';
  $id_annonce = (int) trim(htmlentities($_GET['id_annonce']));
  $id_annonceur = (int) trim(htmlentities($_GET['id_annonceur']));
  
 $requete = $bdd->query("SELECT * FROM annonce INNER JOIN annonceur ON annonce.id_annonceur = annonceur.id 
 INNER JOIN immo_categorie ON annonce.id_categorie = immo_categorie.id WHERE annonce.id = $id_annonce AND  annonceur.id = $id_annonceur");
 $tmp = 1;
?><?php  while ($topic = $requete->fetch(PDO::FETCH_NUM)) {?>
 <section class="py-sm-7 py-5 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="row py-lg-7 py-5">
            <div class="col-lg-5 col-md-5 position-relative my-auto">
              <img class="img border-radius-lg max-width-600 w-100 position-relative z-index-2" src="assets/img/bruce-mars.jpg" alt="bruce">
            </div>
            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h3 class="mb-0"><?php echo htmlentities($topic[3]); ?></h3>
                <div class="d-block">
                  <h2 class=" btn-outline-info text-nowrap mb-0"><?php echo htmlentities($topic[4]); ?></h2>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-auto">
                  <span class="h6 text-info icon-move-right"><i class="fas fa-layer-group text-sm ms-1"></i>  <?php echo htmlentities($topic[5]); ?></span>
                  <span>M²</span>
                </div>
                <div class="col-auto">
                  <span class="h6 text-info icon-move-right"><i class="fas fa-house-user text-sm ms-1"></i>  <?php echo htmlentities($topic[17]); ?></span>
                </div>
                <div class="col-auto">
                  <span class="h6 text-info icon-move-right" ><i class="fas fa-map-marked text-sm ms-1"></i>  <?php echo htmlentities($topic[6]); ?>, </span>
                  <span>Côte d'Ivoire</span>
                </div>
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
  <!-- END Testimonials w/ user image & text & info -->
  <!-- START Blogs w/ 4 cards w/ image & text & link -->
 <?php  $tmp++; } ?>