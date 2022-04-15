<?php require_once 'App\Controller\CtFaq.php'; ?>

<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>F.A.Q</h2>
      <h3><span>Questions</span> Souvent posé</h3>
      <p>Les réponses à toutes vos questions sur les escape games</p>
    </div>


    <div class="row justify-content-center">
      <div class="col-xl-10">
        <ul class="faq-list">
          <?php $TotalFaq = getFaq();
          foreach ($TotalFaq as $faq) { ?>
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq<?= $faq['idfaq'] ?>"><?= $faq['question'] ?> <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq<?= $faq['idfaq'] ?>" class="collapse" data-bs-parent=".faq-list">
                <p>
                  <?= $faq['reponse'] ?>
                </p>
              </div>
            </li>
          <?php  } ?>
        </ul>
      </div>
    </div>
  </div>
</section>