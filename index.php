<?php require_once 'template/welheader.php'; ?>



    <!-- About -->
    <section>
      <div class="container" id="about">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2><br>

            <p class="section-subheading text-muted" style="margin-bottom: 100px;">Helper is an application that helps Senior Citizen to request on demand services from Helpers.Our Goal for creating this application is to help Seniors receive Care and Services. This reduces the stress and workload off Senior Citizen.
By Using this service, Senior Citizen worry less about getting their daily tasks done. Youngsters who take care of their elders can optimise Helper for their daily needs.
</h3><hr><br><br>
            <div class="col-md-4" style="float:left">
              <span class="fa-stack fa-4x">
                <img class="img-fluid" src="img/cooking.png" alt="" style="padding-bottom:20px">
              </span>
              <h4 class="service-heading">Cooking</h4>
            </div>
            <div class="col-md-8 offset-md-2">
              <p class="text-muted" style="padding-top:10px">Cooking sessions are on a one-to-one basis. It enables the Seniors to have meal prepared by our trusted Helpers. Our Service Providers are a button away to help you prepare your meals.</p>
            </div><br><br><hr><br><br>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <img class="img-fluid" src="img/cleaning.png" alt="">
            </span>
            <h4 class="service-heading">Cleaning</h4>
            <p class="text-muted">This class is designed for dance enthusiasts with a raw passion of dancing, whether it be professional or recreational. Members can choose from a variety of dance forms according to their comfort zone.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <img class="img-fluid" src="img/driving.png" alt="">
            </span>
            <h4 class="service-heading">Driving</h4>
            <p class="text-muted">This class is created for athletes and sports lovers. It invokes the natural human instinct of competing, all in good spirit of course! Members can connect with each other and share their unique skills.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <img class="img-fluid" src="img/nursing.png" alt="">
            </span>
            <h4 class="service-heading">Nursing</h4>
            <p class="text-muted">This class is designed for those interested in the martial arts. It is suitable for simple self-defense purposes or more hardcore interests such as MMA Fighting. Members can register according to their weight group.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2><br><br>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div><br><br>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php require_once 'template/welfooter.php';
