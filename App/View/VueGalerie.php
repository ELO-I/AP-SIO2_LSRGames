<?php require_once('App/Controller/ctAvis.php'); ?>

<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Galerie</h2>
      <h3><span>Galerie</span> Des meilleurs moments</h3>
      <p>Des photos prises au meilleurs moments de l'aventure !</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-salle1">Salle 1 </li>
          <li data-filter=".filter-salle2">Salle 2</li>
          <li data-filter=".filter-salle4">Salle 3</li>
          <li data-filter=".filter-salle3">Salle 4</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

    <?php $ListeGalerie = getAvis();
    foreach ($ListeGalerie as $galerie) { ?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-salle<?= $galerie['idsalle'] ?>">
          <img src="assets/img/imgavis/<?= $galerie['photos'] ?>" class="img-fluid" alt="">
        </div>
<?php } ?>
      <!--<div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>-->

    </div>

  </div>
</section>