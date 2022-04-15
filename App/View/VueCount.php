   <?php require_once('App/Controller/CtCount.php')  ?>

   <!-- ======= Counts Section ======= -->
   <section id="counts" class="counts">
     <div class="container" data-aos="fade-up">

       <div class="row">
         <?php $Totalepartiejoue = getpartiejoue(); ?>
         <div class="col-lg-3 col-md-6">
           <div class="count-box">
             <i class="bi bi-controller"></i>
             <span data-purecounter-start="0" data-purecounter-end="<?= $Totalepartiejoue['parties'] ?>" data-purecounter-duration="2" class="purecounter"></span>
             <p>Parties jouées</p>
           </div>
         </div>

         <?php $Totaljoueur = getjoueurtotal() ?>
         <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
           <div class="count-box">
             <i class="bi bi-people"></i>
             <span data-purecounter-start="0" data-purecounter-end="<?= $Totaljoueur['joueurs'] ?> " data-purecounter-duration="2" class="purecounter"></span>
             <p>Participants</p>
           </div>
         </div>

         <?php $Totalequipegagnante = getequipegagnante() ?>
         <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
           <div class="count-box">
             <i class="bi bi-emoji-sunglasses"></i>
             <span data-purecounter-start="0" data-purecounter-end="<?= $Totalequipegagnante['equipe'] ?>" data-purecounter-duration="2" class="purecounter"></span>
             <p>Équipes gagnantes</p>
           </div>
         </div>

         <?php $Totaltablette = gettabletteutilise() ?>
         <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
           <div class="count-box">
             <i class="bi bi-tablet-landscape"></i>
             <span data-purecounter-start="0" data-purecounter-end="<?= $Totaltablette['tablettes'] ?>" data-purecounter-duration="2" class="purecounter"></span>
             <p>iPads utilisées</p>
           </div>
         </div>

       </div>

     </div>
   </section><!-- End Counts Section -->