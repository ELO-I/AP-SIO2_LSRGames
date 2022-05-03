    <!-- ======= About Section ======= -->
    <?php require_once 'App\Controller\Ctinformation.php';
    $Infoapropos = getInfo(); ?>
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A propos</h2>
          <h3>A propos de <span><?= $Infoapropos['nom'] ?> </span></h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/logo/Lsrgames.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Ce que nous sommes</h3>
            <p class="fst-italic">
              <?= $Infoapropos['about'] ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->