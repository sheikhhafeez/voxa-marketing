<?php include 'includes/header.php';?>








<section class="banner-tittle" style="background-image: url('assets/images/portfolio-banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text align-center wow bounceIn" data-wow-duration="4s">
                    <h2>Portfolio</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                    sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
        </div>
    </div>
</section>






<div class="brn-grant">

    <img src="assets/images/bg-grant-new.png" class="brn-grant-left" alt="">

    
<section class="home">
<div class="container">
         
        <div class="contact-form tabing-box wow bounceInRight" data-wow-duration="3s">
        <form action="">
                <div class="row">
               <div class="col-md-12">
                <div class="text">
                    <h2>Need Help With Email Marketing?</h2>
              
<h4>Get A Free Consultation</h4>
<p>Get in touch today. Enter your information below to request a free, no-obligation consultation.</p>
                </div>
               </div>
                    <div class="col-lg-6">
                        <label for="">Your name</label>
                    <input type="text" placeholder="Your name">
                    </div>
                    <div class="col-lg-6">
                    <label for="">Email address</label>
                    <input type="text" placeholder="Email address" required>
                    </div>
                    <div class="col-lg-6">
                    <label for="">Phone Number</label>
                    <input type="text" placeholder="Phone Number">
                    </div>
                    <div class="col-lg-6">
                    <label for="">Website</label>
                    <input type="text" placeholder="Website">
                    </div>
                    <div class="col-lg-12">
                        <div class="set-box">
                        <label for="">Services intersted</label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                    </select>
                        </div>
                   
                    </div>
                    <div class="col-lg-12">
                    <label for="">Your name</label>
                    <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-12">
                    <button type="submit" class="tab-form-btn" > Send<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    
                    </div>
                   
                </div>
                </form>
</div>
               
      
       
        </div>
        </div>
            </div>
        </div>
    </section>




<?php include 'includes/footer.php';?>






</div>







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