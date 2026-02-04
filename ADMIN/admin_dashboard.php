
<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Dashboard | Chandani Furniture</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
*{
    box-sizing:border-box;
}
body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#F5EFE6,#D4A373,#8B5E3C);
    min-height:100vh;
}

/* ===== HEADER ===== */
.header{
    background:linear-gradient(135deg,#8B5E3C,#6F4528);
    color:#fff;
    padding:25px;
    text-align:center;
    font-size:26px;
    font-weight:600;
    box-shadow:0 6px 18px rgba(0,0,0,.3);
}

/* ===== DASHBOARD ===== */
.dashboard{
    max-width:1200px;
    margin:50px auto;
    padding:0 30px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:30px;
}

/* ===== CARD ===== */
.card{
    background:#fff;
    border-radius:22px;
    padding:35px 25px;
    text-align:center;
    box-shadow:0 15px 35px rgba(0,0,0,.25);
    transition:.4s ease;
    position:relative;
    overflow:hidden;
}

/* 🔥 CLICK FIX */
.card::before{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(
        135deg,
        rgba(139,94,60,.15),
        rgba(212,167,115,.15)
    );
    opacity:0;
    transition:.4s;
    pointer-events:none;   /* ⭐ MAIN FIX */
}

.card:hover::before{
    opacity:1;
}

.card:hover{
    transform:translateY(-10px) scale(1.05);
}

.card a{
    position:relative;
    z-index:1;             /* ⭐ CLICK SAFE */
    text-decoration:none;
    color:#5A3E2B;
    font-size:20px;
    font-weight:600;
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:12px;
}

.card i{
    font-size:42px;
    color:#8B5E3C;
}

/* ===== LOGOUT ===== */
.logout{
    background:linear-gradient(135deg,#F44336,#D32F2F);
}
.logout a,
.logout i{
    color:#fff;
}
.logout:hover{
    background:linear-gradient(135deg,#D32F2F,#B71C1C);
}

/* ===== RESPONSIVE ===== */
@media(max-width:600px){
    .header{
        font-size:22px;
    }
    .card{
        padding:30px 20px;
    }
}
</style>
</head>

<body>

<div class="header">
    <i class="fas fa-tachometer-alt"></i>
    Chandani Furniture – Admin Dashboard
</div>

<div class="dashboard">

    <div class="card">
        <a href="admin_users.php">
            <i class="fas fa-users"></i>
            Users
        </a>
    </div>

    <div class="card">
        <a href="feedback_list.php">
            <i class="fas fa-star"></i>
            Feedback
        </a>
    </div>

    <div class="card">
        <a href="admin_suggestion.php">
            <i class="fas fa-lightbulb"></i>
            Suggestions
        </a>
    </div>

    <div class="card">
        <a href="admin_orders.php">
            <i class="fas fa-shopping-cart"></i>
            Orders
        </a>
    </div>

    <div class="card">
        <a href="admin_product.php">
            <i class="fas fa-chair"></i>
            Products
        </a>
    </div>

    <div class="card logout">
        <a href="logout.php">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </a>
    </div>

</div>

</body>
</html>
