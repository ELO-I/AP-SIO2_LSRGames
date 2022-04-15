<?php
include_once('./App/View/VueHead.php');
?>

<body>
  <!-- ======= Header ======= -->
  <?php
  include_once('./App/View/VueHeader.php');
  ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php include_once('./App/View/VueHero.php'); ?>
<!-- End Hero -->

  <main id="main">
    <!-- ======= Pays Disponible ======= -->
    <?php include_once("./App/View/VuePays.php") ?>
    <!-- End pays disponible Section -->

    <!-- ======= About Section ======= -->
    <?php include_once("./App/View/VueAbout.php") ?>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <?php include_once("./App/View/VueCount.php") ?>
    <!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <?php include_once("./App/View/VueClientEntreprise.php") ?>
    <!-- End Clients Section -->


    <!-- ======= Testimonials Section ======= -->
    <?php include_once("./App/View/VueCommentaire.php") ?>
    <!-- End Testimonials Section -->

    <!-- ======= Galerie Section ======= -->
    <?php include_once("./App/View/VueGalerie.php") ?>
    <!-- End Portfolio Section -->

    <!-- ======= Salle Section ======= -->
    <?php include_once("./App/View/VueSalle.php") ?>
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <?php include_once("./App/View/VuePrix.php") ?>
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section FAQ ======= -->
    <?php include_once("./App/View/VueFAQ.php") ?>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <?php include_once("./App/View/VueContact.php") ?>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <?php
  include_once('./App/View/VueFooter.php');
  ?>

</body>

</html>