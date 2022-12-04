<?php
session_start();
require "./includes/head.php";
require './includes/conn.php';

if (!isset($_SESSION['email'])) {
  echo "<script> location.href='/ecommerce'; </script>";
  exit();
}
?>

<?php

$user_id = $_SESSION['user_id'];
$query = 'SELECT products.price, products.id, products.title, products.image, cart.qty from cart, products where products.id = cart.product_id and cart.user_id="' . $user_id . '"';

$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)) {
  $order = "INSERT INTO `orders`(`product_id`, `user_id`, `product_qty`, `order_amount`, `status`) 
    VALUES (" . $row['id'] . "," . $user_id . "," . $row['qty'] . "," . $row['price'] * $row['qty'] + 49 . ", 'Confirmed')";
  $deletefromcart = "DELETE FROM CART WHERE cart.user_id='$user_id'";
  $decreaseqty = "UPDATE PRODUCTS SET qty = qty - 1 where id=".$row['id']."";
  $ans = mysqli_query($con, $decreaseqty);
  $answer = mysqli_query($con, $order);
  $deleted = mysqli_query($con, $deletefromcart);
}

?>



<section class="breadcrumb breadcrumb_bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="breadcrumb_iner">
          <div class="breadcrumb_iner_item">
            <h2>Order Confirmation</h2>
            <p>Home <span>-</span> Order Confirmation</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="confirmation_part padding_top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="confirmation_tittle">
          <h1><span>Thank you. Your order has been received.</span></h1>
        </div>
      </div>
      <!-- <div class="col-lg-6 col-lx-4">
        <div class="single_confirmation_details">
          <h4>order info</h4>
          <ul>
            <li>
              <p>order number</p><span>: 60235</span>
            </li>
            <li>
              <p>data</p><span>: Oct 03, 2017</span>
            </li>
            <li>
              <p>total</p><span>: USD 2210</span>
            </li>
            <li>
              <p>mayment methord</p><span>: Check payments</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-lx-4">
        <div class="single_confirmation_details">
          <h4>Billing Address</h4>
          <ul>
            <li>
              <p>Street</p><span>: 56/8</span>
            </li>
            <li>
              <p>city</p><span>: Los Angeles</span>
            </li>
            <li>
              <p>country</p><span>: United States</span>
            </li>
            <li>
              <p>postcode</p><span>: 36952</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-lx-4">
        <div class="single_confirmation_details">
          <h4>shipping Address</h4>
          <ul>
            <li>
              <p>Street</p><span>: 56/8</span>
            </li>
            <li>
              <p>city</p><span>: Los Angeles</span>
            </li>
            <li>
              <p>country</p><span>: United States</span>
            </li>
            <li>
              <p>postcode</p><span>: 36952</span>
            </li>
          </ul>
        </div>
      </div> -->
    </div>
    <!-- <div class="row">
      <div class="col-lg-12">
        <div class="order_details_iner">
          <h3>My Order</h3>
          <br><br>
          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col" colspan="2">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $allOrders = "SELECT * from orders, products where user_id='$user_id' and orders.product_id=products.id";
              $orderresult = mysqli_query($con, $allOrders);
              while($row = mysqli_fetch_array($orderresult)){
                echo '<tr>
                        <th colspan="2"><span>'.$row['product_id'].'</span></th>
                        <th>'.$row['product_qty'].'</th>
                        <th> <span>'.$row['order_amount'].'</span></th>
                        <th> <span>'.$row['status'].'</span></th>
                      </tr>';
              }
              
              ?>
          </table>
        </div>
      </div>
    </div> -->
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac24fb7b3390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>

</html>

</html>

</html>

</html>

</html>