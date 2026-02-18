<!DOCTYPE html>
<html>
<head>
<title>Order Success | Chandni Furniture</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Poppins;}

body{
    height:100vh;
    background:linear-gradient(135deg,#8B5E3C,#D4A373);
    display:flex;
    justify-content:center;
    align-items:center;
}

/* Card */
.box{
    background:#fff;
    width:380px;
    padding:40px 30px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 20px 40px rgba(0,0,0,.35);
    animation:pop 0.8s ease;
}

@keyframes pop{
    from{opacity:0; transform:scale(0.7);}
    to{opacity:1; transform:scale(1);}
}

/* Success Circle */
.circle{
    width:90px;
    height:90px;
    background:linear-gradient(45deg,#2ecc71,#27ae60);
    border-radius:50%;
    margin:auto;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:45px;
    color:#fff;
    margin-bottom:15px;
    box-shadow:0 8px 20px rgba(0,0,0,.2);
}

h1{
    color:#5A3E2B;
    margin-bottom:10px;
}

p{
    color:#777;
    font-size:14px;
}

/* Buttons */
.btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 25px;
    background:linear-gradient(45deg,#8B5E3C,#6F4528);
    color:#fff;
    text-decoration:none;
    border-radius:30px;
    font-weight:600;
    transition:.3s;
}
.btn:hover{transform:scale(1.08);}

.small{
    display:block;
    margin-top:10px;
    color:#999;
    font-size:13px;
}
</style>
</head>

<body>

<div class="box">

<div class="circle">✔</div>

<h1>Order Placed!</h1>
<p>Thank you for shopping with <b>Chandni Furniture</b></p>
<span class="small">Our team will contact you shortly 🚚</span>

<a href="home.php" class="btn">Continue Shopping 🛒</a>

</div>

</body>
</html>
