<?php require './includes/head.php' ?>


  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Tracking Order</h2>
              <p>Home <span>-</span> Tracking Order</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="tracking_box_area padding_top">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-12">
          <div class="tracking_box_inner">
            <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was
              given
              to you on your receipt and in the confirmation email you should have received.</p>
            <form class="row tracking_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="order" name="order" placeholder="Order ID">
              </div>
              <div class="col-md-12 form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Billing Email Address">
              </div>
              <div class="col-md-12 form-group">
                <button type="submit" value="submit" class="btn_3">Track Order</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php require './includes/footer.php' ?>



  <script src="js/jquery-1.12.1.min.js"></script>

  <script src="js/popper.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/jquery.magnific-popup.js"></script>

  <script src="js/swiper.min.js"></script>

  <script src="js/masonry.pkgd.js"></script>

  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>

  <script src="js/slick.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/price_rangs.js"></script>

  <script src="js/custom.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac1b9ace3390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>