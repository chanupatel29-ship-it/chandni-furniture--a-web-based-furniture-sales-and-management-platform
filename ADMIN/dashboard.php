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
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #F5EFE6 0%, #D4A373 50%, #8B5E3C 100%);
    background-attachment: fixed;
    min-height: 100vh;
    color: #5A3E2B;
    overflow-x: hidden;
}

.header {
    background: linear-gradient(135deg, #8B5E3C, #6F4528);
    color: white;
    padding: 30px 20px;
    text-align: center;
    font-size: 28px;
    font-weight: 600;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    position: relative;
    z-index: 10;
}

.header::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #D4A373, #F5EFE6, #D4A373);
}

.dashboard {
    padding: 50px 40px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    animation: fadeInUp 1s ease-out;
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

.card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    padding: 40px 30px;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    text-align: center;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(139, 94, 60, 0.1), rgba(212, 167, 115, 0.1));
    opacity: 0;
    transition: opacity 0.4s ease;
}

.card:hover {
    transform: translateY(-10px) scale(1.05);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
}

.card:hover::before {
    opacity: 1;
}

.card a {
    text-decoration: none;
    color: #5A3E2B;
    font-size: 20px;
    font-weight: 600;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    transition: color 0.3s ease;
}

.card:hover a {
    color: #8B5E3C;
}

.card i {
    font-size: 40px;
    color: #8B5E3C;
    transition: transform 0.3s ease;
}

.card:hover i {
    transform: scale(1.1);
}

.logout {
    background: linear-gradient(135deg, #F44336, #D32F2F);
    color: white;
}

.logout a {
    color: white;
}

.logout:hover {
    background: linear-gradient(135deg, #D32F2F, #B71C1C);
}

.logout i {
    color: white;
}

@media (max-width: 768px) {
    .header {
        font-size: 24px;
        padding: 25px 15px;
    }
    .dashboard {
        padding: 30px 20px;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }
    .card {
        padding: 30px 20px;
    }
    .card a {
        font-size: 18px;
    }
    .card i {
        font-size: 35px;
    }
}
</style>
</head>

<body>

<div class="header">
    <i class="fas fa-tachometer-alt"></i> Chandani Furniture – Admin Dashboard
</div>

<div class="dashboard">

    <div class="card">
        <a href="admin_users.php">
            <i class="fas fa-users"></i>
            Users
        </a>
    </div>

    <div class="card">
        <a href="feedback.php">
            <i class="fas fa-star"></i>
            Feedback
        </a>
    </div>

    <div class="card">
        <a href="suggestion.php">
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
        <a href="admin_products.php">
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