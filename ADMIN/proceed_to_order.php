<?php
include "db.php";

if(isset($_POST['place_order']))
{
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];

    // cart mathi data levu
    session_start();
    $cart = $_SESSION['cart'];

    foreach($cart as $item)
    {
        $pname = $item['name'];
        $price = $item['price'];
        $qty   = $item['qty'];
        $total = $price * $qty;

        $query = "INSERT INTO orders(name,email,phone,address,product_name,price,qty,total)
                  VALUES('$name','$email','$phone','$address','$pname','$price','$qty','$total')";
        mysqli_query($conn,$query);
    }

    // cart clear
    unset($_SESSION['cart']);

    echo "<script>alert('Order Placed Successfully');window.location='index.php';</script>";
}
?>
