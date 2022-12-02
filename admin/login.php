<?php require "includes/conn.php" ?>
<?php require "includes/header.php";

require 'includes/conn.php';

session_start();

if(isset($_SESSION['admin_email'])){
    echo "<script> location.href='/ecommerce/admin'; </script>";
    exit();
}

?>


<div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-6 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">Admin Login</h1>
            </div>
        </div>

        <div class="container col-md-3 my-4">
            <form class="row g-3" action="scripts/login_script.php" method="POST">
                <div class="col-md-12">
                    <label for="eamil" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>