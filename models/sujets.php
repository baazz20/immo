 <?php require_once 'controllers/database.php';
  $get_id = (int) trim(htmlentities($_GET['categorieid']));
 $requete = $bdd->query("SELECT * FROM annonce WHERE id_categorie = $get_id ORDER BY date_creation DESC");
 $tmp = 1;
?>

<div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
    <div class="container border-bottom">
        <div class="row py-3">
            <div class="col-lg-4 text-start">
                <p class="lead text-dark pt-1 mb-0">Liste des annonce de la Categorie Sélctionner</p>
            </div>
        </div>
    </div>
    <div>
   
        <div class="card-group">
        <?php  while ($topic = $requete->fetch(PDO::FETCH_NUM)) {?>
            <div class="card">

                <div class="card-body pt-2">
                    <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2"><?php echo $tmp ?></span>
                    <a href="author.php?id_annonce=<?php echo htmlentities($topic[0]); ?>&&id_annonceur=<?php echo htmlentities($topic[2]); ?>" class="card-title h5 d-block text-darker">
                    <?php echo htmlentities($topic[3]); ?>
                    </a>
                    <p class="card-description mb-4">
                    <?php echo htmlentities($topic[4]); ?>
                    </p>
                    <div class="author align-items-center">
                        <img src="../public/uploads/photoExt/<?php  echo htmlentities($topic[9]);?>" alt="..." class="avatar shadow">
                        <div class="name ps-3">
                            <span><?php echo htmlentities($topic[7]); ?></span>
                            <div class="stats">
                                <small><?php echo htmlentities($topic[8]); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php  if ($tmp % 3 ==0) { ?>
         <div class="w-200"></div>
         <br>
         <?php   }?>

         <?php  $tmp++; } ?>
        </div>