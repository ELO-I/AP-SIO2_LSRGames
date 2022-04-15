<?php require_once 'App\Controller\CtSalle.php'; ?>
<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Salles</h2>
      <h3>Nos <span>Salles</span></h3>
      <p>Faite votre choix et lancé vous dans l'aventure</p>
    </div>

    <div class="row">
      <?php
      $Listesalle = getSalle();
      foreach ($Listesalle as $salle) { ?>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/salles/<?= $salle['image'] ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4><?= $salle['nom'] ?></h4>
              <span><?= $salle['description'] ?></span>
            </div>
          </div>
        </div>
      <?php  } ?>

    </div>

  </div>
</section>