<?php require "../includes/conn.php" ?>
<?php
    $title = $specs = $mrp = $price = $color = $storage = $image = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $title = $_POST['title'];
        $specs = $_POST['specs'];
        $mrp = $_POST['mrp'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $storage = $_POST['storage'];
        $image = $_POST['image'];
    }

    $query = "INSERT INTO `product`(`title`, `specification`, `mrp`, `sale_price`, `color`, `storage`, `image`) 
    VALUES ('".$title."','" . $specs ."','".$mrp."','".$price."','".$color."','".$storage."','".$image."')";
    
    

    if(mysqli_query($conn, $query)){
        echo "inserted";
        header("Location: ../products.php");
    }
?>