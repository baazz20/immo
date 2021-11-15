 <?php require_once 'controllers/database.php';
    $requete = $bdd->query('SELECT * FROM immo_categorie ORDER BY ordre');
    $tmp = 1;
    ?>
 <section class="py-3">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                 <h3 class="mb-5">Annonces les plus récentes</h3>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-3 col-md-12 col-12">
                 <div class="card card-blog card-background">
                     <div class="full-background" style="background-image: url('https://as1.ftcdn.net/v2/jpg/02/67/76/62/1000_F_267766202_sYPP3Y69m3cl6T9xSgofNIOZNLMNEApw.jpg')"></div>
                     <div class="card-body">
                         <div class="content-left text-start my-auto py-4">
                             <span>
                                 <h2 class="card-title text-white">Les Categories</h2>
                                 <?php while ($categorie = $requete->fetch(PDO::FETCH_NUM)) { ?>

                                     <a href="features.php?categorieid=<?= htmlentities($categorie[0]); ?>">
                                        <span class="text-white card-title h5 d-block text-darker "> <?= $categorie[1]; ?></span>
                                     </a>
                                 <?php $tmp++;
                                    } ?>

                             </span>
                         </div>
                     </div>
                 </div>
             </div>
             <?php $requete2 = $bdd->query('SELECT * FROM annonce INNER JOIN annonceur ON annonce. id_annonceur = annonceur.id ORDER BY annonce.date_creation');
                $tmp2 = 1;
                while ($categorie2 = $requete2->fetch(PDO::FETCH_NUM)) { ?>
                 <div class="col-lg-3 col-sm-6 ">
                     <div class="card card-plain card-blog">


                         <div class="card">
                             <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                 <div id="carouselExampleDark_<?= htmlentities($categorie2[0]); ?>" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                     <div class="carousel-indicators">
                                         <button type="button" data-bs-target="#carouselExampleDark_<?= htmlentities($categorie2[0]); ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                         <button type="button" data-bs-target="#carouselExampleDark_<?= htmlentities($categorie2[0]); ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                         <button type="button" data-bs-target="#carouselExampleDark_<?= htmlentities($categorie2[0]); ?>" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                     </div>
                                     <div class="carousel-inner">
                                         <div class="carousel-item active" data-bs-interval="10000">
                                             <img src="https://as2.ftcdn.net/v2/jpg/00/56/18/59/1000_F_56185988_ppLM4I3MJWiMFnrHJsVc5xqFyLnk5hJl.jpg" class="img-fluid border-radius-lg" alt="...">
                                             <div class="carousel-caption d-none d-md-block">
                                                 <h5>ImmoPlus</h5>
                                             </div>
                                         </div>
                                         <div class="carousel-item" data-bs-interval="2000">
                                             <img src="https://as2.ftcdn.net/v2/jpg/00/52/37/45/1000_F_52374568_eZxGrk2q2STajHUjqMsJY8XKA7G0Wyo0.jpg" class="img-fluid border-radius-lg" alt="...">
                                             <div class="carousel-caption d-none d-md-block">
                                                 <h5>ImmoPlus</h5>
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <img src="https://as1.ftcdn.net/v2/jpg/02/34/17/10/1000_F_234171055_qrGmfWAdd4XyqLN0FGG2DADRDk8Gu9Oa.jpg" class="img-fluid border-radius-lg" alt="...">
                                             <div class="carousel-caption d-none d-md-block">
                                                 <h5>ImmoPlus</h5>
                                             </div>
                                         </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark_<?= htmlentities($categorie2[0]); ?>" data-bs-slide="prev">
                                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="visually-hidden">Previous</span>
                                     </button>
                                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark_<?= htmlentities($categorie2[0]); ?>" data-bs-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                         <span class="visually-hidden">Next</span>
                                     </button>
                                 </div>
                             </div>

                             <div class="card-body pt-2">
                                 <span class="text-gradient text-primary   font-weight-bold  h3"><?= htmlentities($categorie2[4]); ?></span>
                                 <a href="author.php?id_annonce=<?php echo htmlentities($categorie2[0]); ?>&&id_annonceur=<?php echo htmlentities($categorie2[9]); ?>" class="card-title h5 d-block text-darker ">
                                     <?= htmlentities($categorie2[3]); ?>
                                 </a>
                                 <p class="card-description mb-4 text-info text-gradient">
                                     <?= htmlentities($categorie2[6]); ?></p>
                                 <div class="author align-items-center">
                                     <img src="assets/uploads/<?= htmlentities($categorie2[15]); ?>" alt="..." class="avatar shadow">
                                     <div class="name ps-3">
                                         <span><?= htmlentities($categorie2[11]); ?></span>
                                         <div class="stats">
                                             <small>publiée le <?php $date = $date = date_create($categorie2[8]);  echo date_format($date, 'd-m-Y à H:i:s'); ?></small>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>


                 </div>
             <?php $tmp2++;
                } ?>


         </div>
     </div>
 </section>



 <!-- <div class="container">
     <div class="row">

         <?php //while ($categorie = $requete->fetch(PDO::FETCH_NUM)) { 
            ?>
             <div class="col">
                 <span>
                     <div class="card bg-gradient-default">
                         <div class="card-body">
                             <a href="features.php?categorieid=<?php //echo htmlentities($categorie[0]); 
                                                                ?>">
                                 <h3 class="card-title text-info text-gradient"><?php // echo $categorie[1]; 
                                                                                ?></h3>
                             </a>
                             <blockquote class="blockquote text-white mb-0">
                                 <p class="text-dark ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                     Integer posuere erat a ante.</p>
                                 <footer class="blockquote-footer text-gradient text-info text-sm ms-3">Someone famous in
                                     <cite title="Source Title">Source Title</cite>
                                 </footer>
                             </blockquote>
                         </div>
                     </div>
                 </span>
             </div>
             <?php //if ($tmp % 4 == 0) { 
                ?>
                 <div class="w-200"></div>
                 <br>
             <?php  // } 
                ?>

         <?php //$tmp++;
            //  } 
            ?>



     </div>
 </div> -->