<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" itemscope itemtype="http://schema.org/WebPage">

<?php include 'includes/head.php'; ?>


<body class="blog-author bg-gray-100">
  <!-- Navbar Light -->
  <?php include 'includes/navbar.php'; ?>
  <!-- End Navbar -->
  <!-- START Testimonials w/ user image & text & info -->


  <?php include 'models/topic.php'; ?>

  <!-- END Blogs w/ 4 cards w/ image & text & link -->
  
  <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->
  <?php include 'includes/footer.php'; ?>
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