<?php
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "admin123"){
        $_SESSION['admin'] = $username;
        header("Location: admin_dashboard.php");
        exit();
    }else{
        $error = "Invalid Username or Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Login | Chandani Furniture</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>

*{margin:0;padding:0;box-sizing:border-box;font-family:Poppins}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(-45deg,#5A3E2B,#8B5E3C,#D4A373,#F5EFE6);
    background-size:400% 400%;
    animation:gradientBG 10s ease infinite;
    overflow:hidden;
}

@keyframes gradientBG{
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

/* floating circles */
body::before, body::after{
    content:"";
    position:absolute;
    width:500px;height:500px;
    background:rgba(255,255,255,0.1);
    border-radius:50%;
    filter:blur(80px);
}
body::before{top:-120px;left:-120px}
body::after{bottom:-120px;right:-120px}

/* glass card */
.login-box{
    width:420px;
    padding:55px 45px;
    border-radius:30px;
    backdrop-filter:blur(20px);
    background:rgba(255,255,255,0.15);
    border:1px solid rgba(255,255,255,0.25);
    box-shadow:0 25px 60px rgba(0,0,0,.4);
    text-align:center;
    animation:fadeIn 1s ease;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(40px)}
    to{opacity:1; transform:translateY(0)}
}

.logo{
    font-size:38px;
    color:#fff;
    margin-bottom:10px;
}

h2{
    color:#fff;
    font-weight:600;
    margin-bottom:30px;
}

/* inputs */
.input-box{
    position:relative;
    margin-bottom:25px;
}

.input-box i{
    position:absolute;
    left:15px;
    top:14px;
    color:#8B5E3C;
}

input{
    width:100%;
    padding:14px 14px 14px 45px;
    border-radius:12px;
    border:none;
    outline:none;
    background:#fff;
    font-size:15px;
    box-shadow:0 4px 10px rgba(0,0,0,.2);
    transition:.3s;
}
input:focus{transform:scale(1.03)}

button{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    font-size:18px;
    font-weight:600;
    background:linear-gradient(45deg,#8B5E3C,#5A3E2B);
    color:#fff;
    cursor:pointer;
    transition:.4s;
    box-shadow:0 8px 20px rgba(0,0,0,.4);
}

button:hover{
    transform:translateY(-3px);
    background:linear-gradient(45deg,#5A3E2B,#3E281C);
}

.error{
    background:#ffebee;
    color:#c62828;
    padding:10px;
    border-radius:8px;
    margin-bottom:20px;
}

.footer{
    margin-top:20px;
    color:#fff;
    font-size:13px;
    opacity:.8;
}

</style>
</head>

<body>

<div class="login-box">

    <div class="logo"><i class="fas fa-couch"></i></div>
    <h2>Chandani Furniture Admin</h2>

    <?php if(isset($error)){ ?>
        <div class="error"><?php echo $error; ?></div>
    <?php } ?>

    <form method="post">
        <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Admin Username" required>
        </div>

        <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button name="login"><i class="fas fa-sign-in-alt"></i> Login</button>
    </form>

    <div class="footer">© Chandani Furniture</div>

</div>

</body>
</html>
