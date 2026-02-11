<?php
session_start();
$conn = mysqli_connect("localhost","root","","ck");

/* Get form data safely */
$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$phone   = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';

/* Get all cart products */
$cart = mysqli_query($conn,"SELECT * FROM cart");

while($row = mysqli_fetch_assoc($cart))
{
    $product = $row['product_name'];
    
    // Remove ₹ and comma from price
    $price = str_replace(['₹',','],'',$row['price']);
    
    // If qty missing set default 1
    $qty = $row['qty'] ?? 1;
    
    $total = $price * $qty;

    mysqli_query($conn,"INSERT INTO orders
    (name,email,phone,address,product_name,price,qty,total)
    VALUES
    ('$name','$email','$phone','$address','$product','$price','$qty','$total')");
}

/* Clear cart */
mysqli_query($conn,"DELETE FROM cart");

/* Redirect */
header("Location: order_success.php");
exit();
?>
