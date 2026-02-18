<?php
$conn = mysqli_connect("localhost","root","","ck");
$count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM cart"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Chandni Furniture | Checkout</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#8B5E3C,#D4A373);
    height:100vh;
    overflow:hidden;
    display:flex;
    flex-direction:column;
}

/* HEADER */
.header{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:12px;
    padding:12px;
    background:rgba(0,0,0,0.25);
}
.header img{
    width:45px;
    height:45px;
    border-radius:50%;
    border:2px solid #fff;
}
.header h1{
    color:#fff;
    font-size:24px;
}

/* CENTER AREA */
.wrapper{
    flex:1;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* CARD */
.box{
    width:330px;
    background:#fff;
    padding:24px;
    border-radius:18px;
    box-shadow:0 20px 35px rgba(0,0,0,.35);
    animation:fade 0.8s ease;
}

@keyframes fade{
    from{opacity:0; transform:translateY(25px);}
    to{opacity:1; transform:translateY(0);}
}

h2{
    text-align:center;
    color:#5A3E2B;
    font-size:22px;
    margin-bottom:12px;
}

label{
    font-size:13px;
    color:#5A3E2B;
}

input,textarea{
    width:100%;
    padding:9px;
    margin-top:4px;
    margin-bottom:10px;
    border-radius:8px;
    border:1.5px solid #C9B29B;
    font-size:13px;
}

textarea{
    height:70px;
    resize:none;
}

button{
    width:100%;
    padding:11px;
    border:none;
    border-radius:10px;
    background:linear-gradient(45deg,#8B5E3C,#6F4528);
    color:#fff;
    font-weight:600;
    font-size:15px;
    cursor:pointer;
    transition:0.3s;
}
button:hover{
    transform:scale(1.05);
}

/* FOOTER */
.footer{
    background:#5A3E2B;
    color:#fff;
    text-align:center;
    padding:10px;
    font-size:13px;
}
</style>


</head>
<script>
document.querySelector("form").addEventListener("submit", function(e){
    let phone = document.querySelector("input[name='phone']").value;

    if(!/^[0-9]{10}$/.test(phone)){
        alert("Please enter valid 10 digit phone number");
        e.preventDefault();
    }
});
</script>
<body>

<!-- HEADER -->
<div class="header">
    <img src="logo1.jpg">
    <h1>Chandni Furniture</h1>
</div>

<div class="wrapper">
<div class="box">

<h2>📦 Delivery Details</h2>

<form action="place_order.php" method="post">
    <label>Full Name</label>
    <input type="text" name="name" required>

    <label>Phone Number</label>
    <input type="text" name="phone" required>

    <label>Full Address</label>
    <textarea name="address" required></textarea>

    <input type="hidden" name="items" value="<?php echo $count; ?>">

    <button type="submit">Place Order 🛒</button>
</form>

</div>
</div>

<div class="footer">
    © <?php echo date("Y"); ?> Chandni Furniture • Safe & Fast Delivery 🚚
</div>

</body>
</html>
