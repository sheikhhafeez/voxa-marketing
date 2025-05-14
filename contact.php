<?php include 'includes/header.php';?>








<section class="banner-tittle" style="background-image: url('assets/images/contact-banner.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text align-center wow bounceIn" data-wow-duration="4s">
                    <h2>Contact Us</h2>
                    <p>Connect with Voxa: Your Partner in Digital Success</p>
                </div>
            </div>
        </div>
    </div>
</section>






<div class="brn-grant conta">

    <img src="assets/images/bg-grant-new.png" class="brn-grant-left" alt="">

    <section class="about-sec-5 contact-sec-1 wow bounceIn" data-wow-duration="4s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text align-center">
                <span>Benefit Steps</span>
                    <h2>Always Available to Serve You</h2>
                </div>
            </div>
        </div>
        <div class="row boxes-color">
            <div class="col-lg-3">
                <div class="benefit-box">
                    <img src="assets/images/about-sec-icon1.png" alt="">
                    <h5>Pocket And Budget Friendly Packages</h5>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="benefit-box">
                    <img src="assets/images/about-sec-icon2.png" alt="">
                    <h5>Expert Support<br><a href="tel:+1-469-898-4326">+1-469-898-4326</a>
                    </h5>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="benefit-box">
                    <img src="assets/images/about-sec-icon3.png" alt="">
                    <h5>Customized<br>
                    Strategies</h5>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="benefit-box">
                    <img src="assets/images/about-sec-icon4.png" alt="">
                    <h5>Contact Us<br>
                    Today</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-sec-5">
<div class="container">

    <div class="row">
        <div class="col-lg-6">
        <div class="text wow bounceInLeft" data-wow-duration="3s">
                <h6>Get Started Today</h6>
                <h2>You Ask,<br>
                    We Answer</h2>
                <p>Ready to see real results? Fill out the form below to start your journey with Voxa.</p>
            </div>
            <img src="assets/images/contact-img.png" class="form-img wow bounceIn" data-wow-duration="3s" alt="">
        </div>
        <div class="col-lg-6">
        <div class="contact-form wow bounceInRight" data-wow-duration="3s">
            <form action="">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Email" required>
                <input type="text" placeholder="Phone">
                <textarea placeholder="Message"></textarea>
                <button type="submit" class="form-btn" > Send<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </form>
        </div>
        </div>

    </div>
   
</div>

</section>
</div>
<?php include 'includes/footer.php';?>
















    <script src="assets/js/wow-animate.js"></script>
    <script src="assets/js/lib.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script type="text/javascript">
        $(document).on('ready', function () {




            wow = new WOW(
                {
                    animateClass: 'animated',
                    offset: 100,
                    callback: function (box) {
                        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                    }
                }
            );

            wow.init();


        });

    </script>

</body>

</html>