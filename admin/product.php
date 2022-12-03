<?php

require 'includes/conn.php';

session_start();

if (!isset($_SESSION['admin_email'])) {
    echo "<script> location.href='/ecommerce/admin/login.php'; </script>";
    exit();
}
require "includes/header.php";

?>


<div class="mainContainer">
    <?php require "includes/sidebar.php" ?>


    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-6 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">Add Product</h1>
            </div>
        </div>

        <div class="container col-md-6 my-4">
            <form class="row g-3" action="manage/addproduct.php" method="POST">
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="form-group col-md-6">
                    <label for="category">State</label>
                    <select id="category" name="category" class="form-control my-2">
                        <option selected>Select a category</option>
                        <option value="Flowering Indoor Plants">Flowering Indoor Plants</option>
                        <option value="Colourful Foliage Indoor Plants">Colourful Foliage Indoor Plants</option>
                        <option value="Low-Light Indoor Plants">Low-Light Indoor Plants</option>
                        <option value="Air Purifying Indoor Plants">Air Purifying Indoor Plants</option>
                        <option value="Trailing Indoor Plants">Trailing Indoor Plants</option>
                        <option value="Small Indoor Plants">Small Indoor Plants</option>
                        <option value="Large Indoor Plants">Large Indoor Plants</option>
                        <option value="Moisture Loving Indoor Plants">Moisture Loving Indoor Plants</option>
                        <option value="Succulents & Cacti">Succulents & Cacti</option>
                        <option value="Air Plants">Air Plants</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="price">
                </div>
                <div class="col-md-6">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" name="qty" class="form-control" id="qty">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="col-md-6">
                    <label for="desc" class="form-label">Description</label>
                    <input type="text" name="desc" class="form-control" id="desc">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>