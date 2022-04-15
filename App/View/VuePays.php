<!-- ======= Featured Services Section ======= -->
<?php require_once 'App\Controller\Ctpays.php'; ?>

<section id="featured-services" class="featured-services">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <?php $Listepays = getPays();
      foreach ($Listepays as $pays) { ?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-signpost"></i></div>
            <h4 class="title"><a href=""><?= $pays['idpays'] ?></a></h4>
            <p class="description"><?= $pays['description'] ?></p>
          </div>
        </div>
      <?php  } ?>
    </div>
</section><!-- End Featured Services Section -->