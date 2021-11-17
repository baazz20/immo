<?php session_start(); 
require_once 'admin/backend/database.php';?>
<!DOCTYPE html>
<html lang="fr" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    <?= $_SESSION['pseudo']; ?>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-design-system.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="about-us">
  <!-- Navbar Transparent -->
  <?php include 'includes/navbar.php'; ?>

  <!-- End Navbar -->
  <!-- Section with four info areas left & one card right with image and waves -->
  <section class="py-7">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-md-4">
          <div class="card card-profile card-plain">
            <div class="row">
              <div class="col-lg-5">
                <a href="javascript:;">
                  <div class="position-relative">
                    <div class="blur-shadow-image">
                      <img class="w-100 rounded-3 shadow-lg" src="./assets/uploads/<?= $_SESSION['avatar']; ?>">
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-7 ps-0 my-auto">
                <div class="card-body text-left">
                  <div class="p-md-0 pt-3">
                    <h5 class="font-weight-bolder mb-0"><?= $_SESSION['nom_prenom']; ?></h5>
                    <p class="text-uppercase text-sm font-weight-bold mb-2"><?= $_SESSION['pseudo']; ?></p>
                  </div>
                  <p class="mb-4">Membre depuis <?php $date = date_create($_SESSION['dateCreationCompte']);
                                                echo date_format($date, 'd/m/Y à H:i:s'); ?></p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Section with four info areas left & one card right with image and waves -->
  <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
  <!-- <section class="pt-sm-8 pb-5 position-relative bg-gradient-dark">
    <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
      <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-down</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-down">
              <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
            </g>
          </g>
        </g>
      </svg>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">Annonces</h3>
          <p class="text-white opacity-8 mb-0">Liste de tout vos annonces.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="card card-profile overflow-hidden">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" src="assets/img/kal-visuals-square.jpg" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                  <h5 class="mb-0">Emma Roberts</h5>
                  <h6 class="text-info">UI Designer</h6>
                  <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-0 mt-5 overflow-hidden">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" src="assets/img/bruce-mars.jpg" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                  <h5 class="mb-0">William Pearce</h5>
                  <h6 class="text-info">Boss</h6>
                  <p>Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-6 col-12">
          <div class="card card-profile overflow-hidden z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" src="assets/img/team-4.jpg" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                  <h5 class="mb-0">Ivana Flow</h5>
                  <h6 class="text-info">Athlete</h6>
                  <p>Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-0 mt-5 overflow-hidden z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" src="assets/img/ivana-square.jpg" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                  <h5 class="mb-0">Sophia Garcia</h5>
                  <h6 class="text-info">JS Developer</h6>
                  <p>Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="position-absolute w-100 bottom-0 mn-n1">
      <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-up</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-up" transform="translate(0.000000, -5.000000)">
              <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z" fill="#f8f9fa"></path>
            </g>
          </g>
        </g>
      </svg>
    </div>
  </section> -->
  <section class="pb-5 position-relative bg-gradient-dark mx-n3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">Annonces</h3>
          <?php $ret = mysqli_query($conn, "SELECT * FROM annonce WHERE id_annonceur =  '" .  $_SESSION['id'] . "'");
        $cnt = 1;
        $row = mysqli_num_rows($ret);
        if ($row > 0) {
         
        ?>
          <p class="text-white opacity-8 mb-0">Liste de tout vos annonces.</p>
        </div>
      </div>
      <div class="row">
      <?php
          while ($row = mysqli_fetch_array($ret)) {
        ?>
            <div class="col-lg-6 col-12">
              <br><br>
              <div class="card card-profile mt-4">

                <div class="row">
                  <div class="col-lg-4 col-md-6 col-12 mt-n5">
                    <a href="javascript:;">
                      <div class="p-3 pe-md-0">
                        <img class="w-100 border-radius-md shadow-lg" src="public/uploads/photoExt/<?= $row['photoExt']; ?>" alt="image">
                      </div>
                    </a>
                  </div>

                  <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                      <h5 class="mb-0"><?php echo $row['titre']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="admin/backend/supprimerannonce.php?idF=<?php echo $row['id'] ?>"type="button" class="btn bg-gradient-danger btn-sm">Suprimer</a></h5>
                      <h6 class="text-info"><?php echo $row['ville']; ?></h6>
                      <p class="mb-0"><?php echo  mb_strimwidth($row['description'], 0, 50, "..."); ?></p>
                      <h2 class="mb-0"> <?php echo $row['prix']; ?></h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php if ($cnt % 2 == 0) { ?>
              <div class="row mt-4">
              <?php   } ?>
          <?php }
        }else {
          echo ' <p class="text-white opacity-8 mb-0">Aucune annonces.</p>
          </div>
        </div>';
        } ?>

              </div>

      </div>
  </section>
  <section class="my-5 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <h4>Be the first to see the news</h4>
          <p class="mb-4">
            Your company may not be in the software business,
            but eventually, a software company will be in your business.
          </p>
          <div class="row">
            <div class="col-8">
              <div class="input-group">
                <input type="text" class="form-control mb-sm-0" placeholder="Email Here...">
              </div>
            </div>
            <div class="col-4 ps-0">
              <button type="button" class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Subscribe</button>
            </div>
          </div>
        </div>
        <div class="col-md-5 ms-auto">
          <div class="position-relative">
            <img class="max-width-50 w-100 position-relative z-index-2" src="assets/img/illustrations/sign-up.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
  <?php require_once 'includes/footer.php'; ?>

  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="assets/js/plugins/countup.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.addEventListener('scroll', function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var limit = bgParallax.offsetTop + bgParallax.offsetHeight;
        if (scrollPosition > bgParallax.offsetTop && scrollPosition <= limit) {
          bgParallax.style.backgroundPositionY = (50 - 10 * scrollPosition / limit * 3) + '%';
        } else {
          bgParallax.style.backgroundPositionY = '50%';
        }
      });
    }
  </script>
</body>

</html>