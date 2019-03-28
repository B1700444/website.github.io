<?php require_once './template/header.php'; ?>

<!--- Google charts -->
<!-- About -->
<section>
    <br/>
    <div class="container" id="aboutHome">
        <!---Welcome Alert-->
        <div class="row" id="msg">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Hi <strong><?php echo ucfirst($_SESSION['name']) ?>,</strong> Welcome back to Helper!
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
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
                    <img class="img-fluid" src="img/cleaning.png" alt="Cleaning">
                </span>
                <h4 class="service-heading">Cleaning</h4>
                <p class="text-muted">Cleaning Serivces includes ; End of Lease Cleaning, House Cleaning, Shop Cleaning and much more.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <img class="img-fluid" src="img/driving.png" alt="">
                </span>
                <h4 class="service-heading">Driving</h4>
                <p class="text-muted">Many Seniors face driving restrictions due to their medical conditions. Our drivers are well suited to meet any requirements.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <img class="img-fluid" src="img/nursing.png" alt="">
                </span>
                <h4 class="service-heading">Nursing</h4>
                <p class="text-muted">Our Nurses are medically qulaified and friendly. Seniors are required to request a nurse and stating your medical conditions.</p>
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

<?php
require_once './template/homefooter.php';
