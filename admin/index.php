<?php
require 'includes/conn.php';

session_start();

if(!isset($_SESSION['admin_email'])){
    echo "<script> location.href='/ecommerce/admin/login.php'; </script>";
    exit();
}

    $mail = '';
    if (isset($_SESSION['admin_email'])){
        $mail = $_SESSION["admin_email"];
    }
    $name= '';

    $query = 'SELECT * FROM admin';
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result)){
        if($row['email'] == $mail){
            $name = $row['name'];
        }
    }

?>
<?php require_once "includes/header.php" ?>

<div class="mainContainer">
    <?php require "includes/sidebar.php" ?>


    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-8 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">Welcome to Admin Panel</h1>
                <h4>Hi, <?php echo $name ?> </h4>
            </div>
        </div>

        
        <div class="container">
            <table class="table container">
                <thead class="py-4">
                    <tr>
                        <th scope="col">Admin Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require "includes/conn.php" ?>
                    <?php
                    $query = 'SELECT * FROM `admin`';

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><th>" . $row['id'] . "</th>";
                        echo "<th>" . $row['name'] . "</th>";
                        echo "<td>" . $row['mobile'] . "</td>";
                        echo "<td>" . $row['email']  . "</td>";
                        echo "<td>
                                <a href='scripts/delete_script.php?id={$row['id']}'><button type='button' class='btn btn-danger'>Delete</button></a>
                            </td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>