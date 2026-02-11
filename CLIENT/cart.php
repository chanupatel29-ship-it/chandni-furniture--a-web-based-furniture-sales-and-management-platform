<?php include "first.php"; ?>
<?php
$conn = mysqli_connect("localhost","root","","ck");
$data = mysqli_query($conn,"SELECT * FROM cart ORDER BY id DESC");
?>

<style>
.cart-title{ text-align:center; font-size:32px; margin:40px 0; color:#6b4f3f; }
.cart-container{ max-width:1100px; margin:auto; padding:20px; }

.cart-item{
    display:flex;
    gap:20px;
    background:#fff;
    padding:15px;
    margin-bottom:20px;
    border-radius:10px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
}
.cart-item img{ width:150px; border-radius:10px; }
.cart-info h3{ margin:0; color:#6b4f3f; }
.cart-info p{ font-size:14px; color:#555; }
.price{ font-weight:600; color:#000; margin-top:8px; }

.checkout{
    text-align:center;
    margin:30px;
}
.checkout button{
    padding:12px 25px;
    border:none;
    background:#6b4f3f;
    color:#fff;
    font-size:18px;
    border-radius:6px;
    cursor:pointer;
}
</style>

<h1 class="cart-title">🛒 My Cart</h1>

<div class="cart-container">

<?php while($row=mysqli_fetch_assoc($data)){ ?>
    <div class="cart-item">
        <img src="<?php echo $row['image']; ?>">
        <div class="cart-info">
            <h3><?php echo $row['product_name']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <div class="price"><?php echo $row['price']; ?></div>
        </div>
    </div>
<?php } ?>

<div class="checkout">
   <a href="checkout.php">
   <button>Proceed To Order</button>
</a>
</div>

</div>

<?php include "last.php"; ?>
