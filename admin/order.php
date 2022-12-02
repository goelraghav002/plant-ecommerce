<?php require_once "includes/header.php" ?>
<?php require "includes/conn.php" ?>

<!-- <?php
    $query = 'SELECT users_products.id, users_products.status, users_products.user_id, users_products.item_id, product.title, users.first_name, users.last_name, product.sale_price FROM users_products, product, users WHERE users_products.user_id = users.id AND users_products.item_id = product.id and users_products.status="confirmed"';

    $result = mysqli_query($conn, $query);
?> -->


<!-- <div class="mainContainer">
    <?php require "includes/sidebar.php" ?>


    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-6 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">All Products</h1>
            </div>
        </div>

        <div class="container">
        <table class="table container">
        <thead>
            <tr>
                <th scope="col">Order Id</th>
                <th scope="col">Customer Id</th>
                <th scope="col">Order name</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Order Amount</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_array($result)){
                echo '<tr>
                <th scope="row">'.$row['id'].'</th>
                <td>'.$row['user_id'].'</td>
                <td>'.$row['title'].'</td>
                <td>'.$row['first_name'] .' '. $row['last_name'] .'</td>
                <td>Rs. '.$row['sale_price'].'</td>
                <td>'.$row['status'].'</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
        </div>
    </div>
</div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>