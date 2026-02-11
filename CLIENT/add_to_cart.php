<?php
$conn = mysqli_connect("localhost","root","","ck");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name  = $_POST['name'];
    $desc  = $_POST['desc'];
    $price = $_POST['price'];
    $img   = $_POST['image'];

    $sql = "INSERT INTO cart(product_name,description,price,image)
            VALUES('$name','$desc','$price','$img')";
    mysqli_query($conn,$sql);

    echo "added";
}
?>
