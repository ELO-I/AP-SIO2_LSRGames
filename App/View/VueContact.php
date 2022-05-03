   <!-- ======= Contact Section ======= -->
   <?php require_once 'App\Controller\Ctinformation.php';
    $Infocontact = getInfo(); ?>
   <section id="contact" class="contact">
     <div class="container" data-aos="fade-up">

       <div class="section-title">
         <h2>Contact</h2>
         <h3><span>Contactez nous </span></h3>
         <p> Une question ? Nous on y répond !</p>
       </div>

       <div class="row" data-aos="fade-up" data-aos-delay="100">
         <div class="col-lg-6">
           <div class="info-box mb-4">
             <i class="bx bx-map"></i>
             <h3>Notre adresse</h3>
             <p><?= $Infocontact['adresse'] ?></p>
           </div>
         </div>

         <div class="col-lg-3 col-md-6">
           <div class="info-box  mb-4">
             <i class="bx bx-envelope"></i>
             <h3>Email Us</h3>
             <p><?= $Infocontact['mail'] ?></p>
           </div>
         </div>

         <div class="col-lg-3 col-md-6">
           <div class="info-box  mb-4">
             <i class="bx bx-phone-call"></i>
             <h3>Appelez nous</h3>
             <p><?= $Infocontact['tel'] ?></p>
           </div>
         </div>

       </div>

       <div class="row" data-aos="fade-up" data-aos-delay="100">

         <div class="col-lg ">
           <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2776.9751890142074!2d6.121059615760303!3d45.891809312829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b8ffe10e29221%3A0x2633c95bbb2705e2!2sSaint%20Michel%20Annecy!5e0!3m2!1sen!2sfr!4v1647640353386!5m2!1sen!2sfr" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
         </div>
         <!--
         <div class="col-lg-6">
           <form action="forms/contact.php" method="post" role="form" class="php-email-form">
             <div class="row">
               <div class="col form-group">
                 <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
               </div>
               <div class="col form-group">
                 <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
               </div>
             </div>
             <div class="form-group">
               <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
             </div>
             <div class="form-group">
               <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
             </div>
             <div class="my-3">
               <div class="loading">Attendez</div>
               <div class="error-message"></div>
               <div class="sent-message">Message envoyé</div>
             </div>
             <div class="text-center"><button type="submit">Envoyer</button></div>
           </form>
         </div>
-->
       </div>

     </div>
   </section><!-- End Contact Section -->