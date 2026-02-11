<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$conn = mysqli_connect("localhost","root","","ck");

/* ===== SAFE COUNT FUNCTION (NO ERROR IF TABLE MISSING) ===== */
function getCount($conn,$table){
    $check = mysqli_query($conn,"SHOW TABLES LIKE '$table'");
    if(mysqli_num_rows($check)>0){
        $res = mysqli_query($conn,"SELECT COUNT(*) as total FROM $table");
        $data = mysqli_fetch_assoc($res);
        return $data['total'];
    }else{
        return 0;
    }
}

/* ⚠️ Change signup → if your user table name different */
$user_count = getCount($conn,"signup");
$order_count = getCount($conn,"orders");
$feedback_count = getCount($conn,"feedback");
$suggestion_count = getCount($conn,"suggestion");
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
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Poppins',sans-serif;background:#F5EFE6}

/* LAYOUT */
.container{display:flex;min-height:100vh}

/* SIDEBAR */
.sidebar{
    width:250px;
    background:#6F4528;
    color:#fff;
    padding-top:30px;
    position:relative;
}
.logo{text-align:center;font-size:22px;font-weight:600;margin-bottom:40px}

.menu a{
    display:block;color:#fff;text-decoration:none;
    padding:18px 25px;font-size:17px;transition:.3s;
}
.menu a:hover{background:#8B5E3C}
.menu i{margin-right:10px}

.logout{position:absolute;bottom:30px;width:250px}
.logout a{background:#D32F2F}
.logout a:hover{background:#B71C1C}

/* MAIN */
.main{flex:1;padding:40px}
.header{font-size:28px;font-weight:600;margin-bottom:30px;color:#5A3E2B}

/* STATS */
.stats{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:25px;
    margin-bottom:40px;
}
.stat-card{
    background:#fff;
    padding:30px;
    border-radius:18px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,.15);
}
.stat-card i{font-size:35px;color:#8B5E3C}
.stat-card h1{font-size:38px;margin:10px 0;color:#6F4528}
.stat-card p{color:#777;font-size:17px}

/* NAV CARDS */
.dashboard{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:30px;
}
.card{
    background:#fff;padding:40px 20px;text-align:center;
    border-radius:18px;box-shadow:0 10px 25px rgba(0,0,0,.15);
    transition:.3s;
}
.card:hover{transform:translateY(-8px)}
.card i{font-size:45px;color:#8B5E3C;margin-bottom:15px}
.card a{text-decoration:none;color:#5A3E2B;font-size:20px;font-weight:600}

@media(max-width:768px){
    .sidebar{display:none}
    .main{padding:25px}
}
</style>
</head>

<body>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="logo">Admin Panel</div>

        <div class="menu">
            <a href="admin_users.php"><i class="fas fa-users"></i> Users</a>
            <a href="feedback_list.php"><i class="fas fa-star"></i> Feedback</a>
            <a href="admin_suggestion.php"><i class="fas fa-lightbulb"></i> Suggestions</a>
            <a href="admin_orders.php"><i class="fas fa-shopping-cart"></i> Orders</a>
        </div>

        <div class="menu logout">
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>

    <!-- MAIN -->
    <div class="main">
        <div class="header">
            <i class="fas fa-tachometer-alt"></i> Dashboard Overview
        </div>

        <!-- ANALYTICS -->
        <div class="stats">
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <h1><?php echo $user_count; ?></h1>
                <p>Total Users</p>
            </div>

            <div class="stat-card">
                <i class="fas fa-shopping-cart"></i>
                <h1><?php echo $order_count; ?></h1>
                <p>Total Orders</p>
            </div>

            <div class="stat-card">
                <i class="fas fa-star"></i>
                <h1><?php echo $feedback_count; ?></h1>
                <p>Total Feedback</p>
            </div>

            <div class="stat-card">
                <i class="fas fa-lightbulb"></i>
                <h1><?php echo $suggestion_count; ?></h1>
                <p>Total Suggestions</p>
            </div>
        </div>

        <!-- NAVIGATION -->
        <div class="dashboard">
            <div class="card">
                <i class="fas fa-users"></i><br><br>
                <a href="admin_users.php">Manage Users</a>
            </div>

            <div class="card">
                <i class="fas fa-star"></i><br><br>
                <a href="feedback_list.php">View Feedback</a>
            </div>

            <div class="card">
                <i class="fas fa-lightbulb"></i><br><br>
                <a href="admin_suggestion.php">View Suggestions</a>
            </div>

            <div class="card">
                <i class="fas fa-shopping-cart"></i><br><br>
                <a href="admin_orders.php">View Orders</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>
