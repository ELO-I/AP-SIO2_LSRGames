
    <?php require_once 'APP\Controller\ctavis.php' ?>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <?php $TotalCommentaire = getAvis();
            foreach ($TotalCommentaire as $aviscom){ ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/imgavis/<?= $aviscom['photos'] ?>" class="testimonial-img" alt="">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?= $aviscom['commentaire'] ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <?php } ?>
      </div>
    </section><!-- End Testimonials Section -->