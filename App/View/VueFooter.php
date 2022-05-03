<?php require_once 'App\Controller\Ctinformation.php';
$Infooter = getInfo(); ?>
<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-contact">
          <h3><?= $Infooter['nom'] ?><span>.</span></h3>
          <p>
            <?= $Infooter['adresse'] ?> <br>
            Annecy, 74000<br>
            France <br><br>
            <strong>Téléphone :</strong> <?= $Infooter['tel'] ?><br>
            <strong>Email:</strong> <?= $Infooter['mail'] ?><br>
          </p>
        </div>


        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Nos réseaux sociaux</h4>
          <p>Suivez nous pour ne manquez aucune information !</p>
          <div class="social-links mt-3">
            <a href="https://<?= $Infooter['twitter'] ?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://<?= $Infooter['facebook'] ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://<?= $Infooter['instagram'] ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://<?= $Infooter['linkedin'] ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span><?= $Infooter['nom'] ?></span></strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>