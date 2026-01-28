<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<title>Chandni Furniture | Logout</title>

<style>
/* ===== Page Layout ===== */
body{
    font-family:'Poppins',sans-serif;
    margin:0;
    background:linear-gradient(135deg,#f5f5f5,#e8e8e8);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.logout-box{
    max-width:500px;
    width:90%;
    background:rgba(255,255,255,0.95);
    border-radius:25px;
    padding:50px 30px;
    text-align:center;
    box-shadow:0 15px 40px rgba(0,0,0,0.15);
    animation:slideIn 0.8s ease;
}

@keyframes slideIn{
    from{opacity:0;transform:scale(0.95);}
    to{opacity:1;transform:scale(1);}
}

/* ===== Icon ===== */
.logout-icon{
    font-size:60px;
    margin-bottom:20px;
}

/* ===== Text ===== */
.logout-box h1{
    color:#6b4f3f;
    font-size:34px;
    margin-bottom:10px;
}
.logout-box p{
    color:#555;
    font-size:16px;
    margin-bottom:30px;
}

/* ===== Buttons ===== */
.btn{
    display:inline-block;
    margin:8px;
    padding:14px 30px;
    background:linear-gradient(90deg,#6b4f3f,#a67c52);
    color:#fff;
    text-decoration:none;
    border-radius:40px;
    font-weight:600;
    transition:0.3s;
}
.btn:hover{
    transform:translateY(-3px) scale(1.05);
}
.secondary{
    background:linear-gradient(90deg,#999,#777);
}

/* ===== Responsive ===== */
@media(max-width:600px){
    .logout-box h1{font-size:28px;}
}
</style>
</head>

<body>

<div class="logout-box">
    <div class="logout-icon">👋</div>
    <h1>You’ve Logged Out</h1>
    <p>Thank you for visiting Chandni Furniture.<br>
       We hope to see you again soon!</p>

    
    <a href="home.php" class="btn secondary">🏠 Home</a>
</div>

</body>
</html>
