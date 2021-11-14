<?php 
include_once 'controllers/securityAction.php';?>
<!DOCTYPE html>
<html lang="fr" itemscope itemtype="http://schema.org/WebPage">

<?php include 'includes/head.php'; ?>


<body class="blog-author bg-gray-100">
  <!-- Navbar Light -->
  <?php include 'includes/navbar.php';?>
  <!-- End Navbar -->
  <!-- START Testimonials w/ user image & text & info -->


  <?php include 'models/topic.php';?>
 
  <!-- END Blogs w/ 4 cards w/ image & text & link -->
  <section class="py-lg-7">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card overflow-hidden mb-5">
            <div class="row">
              <div class="col-lg-7">
                <form class="p-3" id="contact-form" method="post">
                  <div class="card-header px-4 py-sm-5 py-3">
                    <h2>Say Hi!</h2>
                    <p class="lead"> We'd like to talk with you.</p>
                  </div>
                  <div class="card-body pt-1">
                    <div class="row">
                      <div class="col-md-12 pe-2 mb-3">
                        <label>My name is</label>
                        <input class="form-control" placeholder="Full Name" type="text">
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <label>I'm looking for</label>
                        <input class="form-control" placeholder="What you love" type="text">
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="form-group mb-0">
                          <label>Your message</label>
                          <textarea name="message" class="form-control" id="message" rows="6" placeholder="I want to say that..."></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 text-end ms-auto">
                        <button type="submit" class="btn btn-round bg-gradient-info mb-0">Send Message</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('assets/img/curved-images/curved5.jpg')">
                <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                  <img src="assets/img/wave-1.svg" class="h-100 ms-n2" alt="vertical-wave">
                </div>
                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                  <div class="mask bg-gradient-info opacity-9"></div>
                  <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                    <h3 class="text-white">Contact Information</h3>
                    <p class="text-white opacity-8 mb-4">Fill up the form and our Team will get back to you within 24 hours.</p>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-phone text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">(+40) 772 100 200</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-envelope text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">hello@creative-tim.com</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-map-marker-alt text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">Dyonisie Wolf Bucharest, RO 010458</span>
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
  <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->
  <footer class="footer py-5 bg-gradient-dark position-relative overflow-hidden">
    <img src="assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-0 w-100 opacity-6">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 me-auto mb-lg-0 mb-4 text-lg-start text-center">
          <h6 class="text-white font-weight-bolder text-uppercase mb-lg-4 mb-3">Soft</h6>
          <ul class="nav flex-row ms-n3 justify-content-lg-start justify-content-center mb-4 mt-sm-0">
            <li class="nav-item">
              <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com" target="_blank">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com/presentation" target="_blank">
                About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com/blog" target="_blank">
                Blog
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com" target="_blank">
                Services
              </a>
            </li>
          </ul>
          <p class="text-sm text-white opacity-8 mb-0">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by Creative Tim.
          </p>
        </div>
        <div class="col-lg-6 ms-auto text-lg-end text-center">
          <p class="mb-5 text-lg text-white font-weight-bold">
            The reward for getting on the stage is fame. The price of fame is you can’t get off the stage.
          </p>
          <a href="javascript:;" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
            <span class="fab fa-dribbble"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
            <span class="fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
            <span class="fab fa-pinterest"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-white opacity-5">
            <span class="fab fa-github"></span>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
</body>

</html>