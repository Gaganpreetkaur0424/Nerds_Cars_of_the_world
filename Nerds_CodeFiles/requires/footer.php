<!-- typed js for typing animation -->
<!-- Import typed.min.js file from typed.js folder -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"
  integrity="sha512-3J8teBiHrSyaaRBajZyIEtpDsXdPq1gsznKWIVb5CnorQuFhjWGhWe54z8YNnHHr7MZuExb9m5kvf964HiT1Sw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Add jquery cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>

<!-- Add this script for successful 
          implementation of typed.js  -->
<script>
  if ($(".text-slider").length == 1) {

    var typed_strings =
      $(".text-slider-items").text();

    var typed = new Typed(".text-slider", {
      strings: typed_strings.split(", "),
      typeSpeed: 50,
      loop: true,
      backDelay: 900,
      backSpeed: 30,
    });


  }
</script>
<!-- typed js for typing animation -->
<!-- aos animation -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();

 
  AOS.init({
    // Global settings:
    disable: false, 
    startEvent: 'DOMContentLoaded',
    initClassName: 'aos-init', 
    animatedClassName: 'aos-animate', 
    useClassNames: false,
    disableMutationObserver: false,
    debounceDelay: 50,
    throttleDelay: 99,


    offset: 120,
    delay: 0,
    duration: 400,
    easing: 'ease', 
    once: false,
    mirror: false,
    anchorPlacement: 'top-bottom', 

  });
</script>
<!-- aos animation -->




<!-- Footer -->
<script src="js/cars.js"></script>
<footer class="page-footer bg-dark text-white font-small indigo">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="index.php" class="text-white">HOME</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="carlisting.php" class="text-white">CAR LIST</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a data-bs-toggle="modal" data-bs-target="#myModaladmin" href="#" class="text-white">ADMIN LOGIN</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="aboutus.php" class="text-white">ABOUT US</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="contactus.php" class="text-white">Contact US</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-4 col-12 m-5">

        <h6 class="mb-4 newsletter-font text-uppercase">Subscribe to our Newsletter</h6>
        <div class="newsletter-form">
          <form method="post" action="requires/subscribe.php">
            <div class="form-group">
              <input type="email" name="subscriberemail" class="form-control newsletter-input"
                style="font-size: 0.7rem;" required placeholder="Your Email" />
            </div>
            <button type="submit" name="emailsubscibe"
              class="btn btncolor text-white text-uppercase mt-3"><b>Subscribe</b><span><i class="fa fa-angle-right"
                  aria-hidden="true"></i></span></button>
            <small class="text-small d-block mt-3">* We send great deals and latest auto news to our subscribed
              users every week.</small>
          </form>

        </div>
      </div>

      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix rgba-white-light">

    <!-- Grid row-->
    <div class="sc row mt-4">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-4 flex-center text-center">

          <!-- Facebook -->
          <a id="fb" class="fb-ic text-decoration-none" target="_blank" href="https://www.facebook.com">
            <i class="fab fa-facebook-f fa-lg text-white me-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic text-decoration-none" target="_blank" href="https://www.twitter.com">
            <i class="fab fa-twitter fa-lg text-white me-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic text-decoration-none" target="_blank" href="https://accounts.google.com/">
            <i class="fab fa-google-plus-g fa-lg text-white me-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic text-decoration-none" target="_blank" href="https://www.linkedin.com">
            <i class="fab fa-linkedin-in fa-lg text-white me-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic text-decoration-none" target="_blank" href="https://www.instagram.com">
            <i class="fab fa-instagram fa-lg text-white me-4"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic text-decoration-none" target="_blank" href="https://www.pinterest.com">
            <i class="fab fa-pinterest fa-lg text-white"> </i>
          </a>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center">© 2020 Copyright
    <a href="index.php">Cars Of The World</a>
  </div>
  <!-- Copyright -->

</footer>


<!-- Footer -->