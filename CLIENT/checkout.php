<?php
$conn = mysqli_connect("localhost","root","","ck");
$count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM cart"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
body{font-family:Poppins;background:#f5efe6;margin:0;}
.box{
    max-width:500px;
    margin:60px auto;
    background:#fff;
    padding:30px;
    border-radius:10px;
    box-shadow:0 4px 15px rgba(0,0,0,0.2);
}
h2{text-align:center;color:#6b4f3f;}
input,textarea{
    width:100%;
    padding:10px;
    margin:10px 0;
    border-radius:6px;
    border:1px solid #ccc;
}
button{
    width:100%;
    padding:12px;
    background:#6b4f3f;
    color:#fff;
    border:none;
    font-size:18px;
    border-radius:6px;
}
</style>
</head>

<body>

<div class="box">
<h2>📦 Delivery Details</h2>

<form action="place_order.php" method="post">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <textarea name="address" placeholder="Full Address" required></textarea>

    <input type="hidden" name="items" value="<?php echo $count; ?>">

    <button type="submit">Place Order</button>
</form>
</div>

</body>
</html>
