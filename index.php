<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Chandani Furniture</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
*{box-sizing:border-box;margin:0;padding:0}

body{
    font-family:Poppins;
    height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg,#F5EFE6,#D4A373,#8B5E3C);
}

/* MAIN BOX */
.container{
    width:1100px;
    text-align:center;
}

.title{
    color:#fff;
    font-size:40px;
    margin-bottom:40px;
    font-weight:600;
}

/* CARDS */
.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:40px;
}

.card{
    background:#fff;
    padding:40px 25px;
    border-radius:25px;
    box-shadow:0 15px 35px rgba(0,0,0,.25);
    transition:.4s;
}

.card:hover{
    transform:translateY(-12px) scale(1.05);
}

.card i{
    font-size:55px;
    color:#8B5E3C;
    margin-bottom:20px;
}

.card h2{
    margin-bottom:15px;
    color:#6F4528;
}

.card p{
    color:#777;
    font-size:14px;
    margin-bottom:25px;
}

.card a{
    text-decoration:none;
    background:#8B5E3C;
    color:#fff;
    padding:12px 28px;
    border-radius:30px;
    font-weight:500;
    transition:.3s;
}

.card a:hover{
    background:#6F4528;
}

/* ADMIN SPECIAL COLOR */
.admin a{background:#D32F2F}
.admin a:hover{background:#B71C1C}

/* ABOUT SPECIAL COLOR */
.about a{background:#388E3C}
.about a:hover{background:#1B5E20}
</style>
</head>

<body>

<div class="container">

    <div class="title">
        🪑 Chandani Furniture Store
    </div>

    <div class="cards">

        <!-- USER PANEL -->
        <div class="card">
            <i class="fas fa-user"></i>
            <h2>User Panel</h2>
            <p>Browse furniture, add to cart and place orders.</p>
            <a href="client/Login.php">Enter</a>
        </div>

        <!-- ADMIN PANEL -->
        <div class="card admin">
            <i class="fas fa-user-shield"></i>
            <h2>Admin Panel</h2>
            <p>Manage products, orders, users and feedback.</p>
            <a href="admin/index.php">Login</a>
        </div>

        <!-- ABOUT US -->
        <div class="card about">
            <i class="fas fa-couch"></i>
            <h2>About Us</h2>
            <p>Know more about Chandani Furniture & our mission.</p>
            <a href="client/aboutus.php">View</a>
        </div>

    </div>

</div>

</body>
</html>
