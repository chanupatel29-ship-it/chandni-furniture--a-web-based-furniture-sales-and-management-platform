<?php
session_start();
$conn = mysqli_connect("localhost","root","","ck");

if(!$conn){
    die("DB Error");
}

$name  = $_POST['name'];
$desc  = $_POST['desc'];
$price = $_POST['price'];
$image = $_POST['image'];

$user = isset($_SESSION['user']) ? $_SESSION['user'] : 'Guest';

$sql = "INSERT INTO cart (product_name, description, price, image, added_by)
        VALUES ('$name','$desc','$price','$image','$user')";

mysqli_query($conn,$sql);
echo "success";
?>
