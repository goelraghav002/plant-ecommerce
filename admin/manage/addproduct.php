<?php require "../includes/conn.php" ?>
<?php
    $title = $specs = $mrp = $price = $color = $storage = $image = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $title = $_POST['title'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $desc = $_POST['desc'];
        $image = $_POST['image'];
    }

    $query = "INSERT INTO `products`(`category`, `title`, `price`, `qty`, `desc`, `image`)
    VALUES ('$category','$title','$price','$qty','$desc','$image')";
    
    

    if(mysqli_query($conn, $query)){
        echo "inserted";
        header("Location: ../products.php");
    }
?>