<?php require_once 'App\Controller\CtTarif.php'; ?>
<section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Nos prix</h2>
      <h3>Escape Game <span>Tarif</span></h3>
      <p>Les mêmes prix pour toutes les salles</p>
    </div>
    
    <div class="row">
      <?php
      $TotalTarif = getTarif();
      foreach ($TotalTarif as $tarif) { ?>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <h3><?= $tarif['nomoffre'] ?></h3>
            <h4><sup>€</sup><?= $tarif['prix_joueur'] ?><span> / Personne</span></h4>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Réserver</a>
            </div>
          </div>
        </div>
      <?php  } ?>

      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <span class="advanced">Spécial</span>
          <h3>Tout l'escape Game</h3>
          <h4>Sur Devis</h4>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Nous contacter</a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>