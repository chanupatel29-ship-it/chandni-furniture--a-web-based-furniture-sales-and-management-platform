<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Chandni Furniture</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

/* HEADER */
.main-header{
    background:linear-gradient(135deg,#6b4f3f,#8b5a3c);
    padding:15px 50px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    box-shadow:0 4px 12px rgba(0,0,0,0.2);
}

/* LEFT LOGO SECTION */
.brand{
    display:flex;
    align-items:center;
    gap:15px;
}

/* CIRCULAR LOGO */
.brand img{
    width:80px;
    height:80px;
    border-radius:50%;
    object-fit:cover;
    border:3px solid #d4a373;
    box-shadow:0 0 15px rgba(0,0,0,0.3);
}

/* BRAND TEXT */
.brand h1{
    color:#fff;
    font-size:28px;
    font-weight:600;
    letter-spacing:1px;
}

.brand span{
    color:#d4a373;
}

/* NAVIGATION */
.navbar a{
    color:#fff;
    text-decoration:none;
    margin-left:20px;
    font-weight:500;
    padding:7px 12px;
    border-radius:6px;
    transition:0.2s;
}

.navbar a:hover{
    background:rgba(212,163,115,0.25);
}

/* LOGOUT BUTTON */
.logout{
    background:#d4a373;
    color:#000 !important;
    font-weight:600;
    border-radius:8px;
}

/* MOBILE */
@media(max-width:768px){
    .main-header{
        flex-direction:column;
        align-items:flex-start;
    }
    .navbar{
        margin-top:10px;
    }
}
</style>
</head>

<body>

<header class="main-header">

    <!-- LEFT : LOGO + NAME -->
    <div class="brand">
        <img src="logo1.jpg" alt="logo">
        <h1>Chandni Furniture</h1>
    </div>

    <!-- RIGHT : MENU -->
    <nav class="navbar">
            <a href="home.php">🏠Home</a>
            <a href=" products.php">🪑Products</a>
            <a href="aboutus.php">📝About Us</a>
            <a href=" contact.php">📞Contact</a>
            <a href="feedback.php">👍feedback</a>
            <a href="suggestion.php">💌suggestion</a>
            <a href="cart.php">🛒cart</a>
            <a href="logout.php" class="logout">Logout</a>
    </nav>

</header>

</body>
</html>

