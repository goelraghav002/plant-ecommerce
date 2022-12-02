<?php require "includes/conn.php" ?>
<?php require_once "includes/header.php" ?>


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
                <div class="col-md-6">
                    <label for="specs" class="form-label">Specification</label>
                    <input type="text" name="specs" class="form-control" id="specs">
                </div>
                <div class="col-md-6">
                    <label for="mrp" class="form-label">M.R.P</label>
                    <input type="number" name="mrp" class="form-control" id="mrp">
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Sale Price</label>
                    <input type="number" name="price" class="form-control" id="price">
                </div>
                <div class="col-md-6">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" name="color" class="form-control" id="color">
                </div>
                <div class="col-md-6">
                    <label for="storage" class="form-label">Storage</label>
                    <input type="text" name="storage" class="form-control" id="storage">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Storage</label>
                    <input type="file" name="image" class="form-control" id="image">
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