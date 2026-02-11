<?php
session_start();
$conn = mysqli_connect("localhost","root","","ck");

$msg = "";

/* LOGIN PROCESS */
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $check = mysqli_query($conn,"SELECT * FROM signup 
                WHERE email='$email' AND password='$pass'");

    if(mysqli_num_rows($check) > 0){
        $_SESSION['user'] = $email;
        header("Location: home.php");
    }else{
        $msg = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Login</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>
*{box-sizing:border-box;margin:0;padding:0}
body{
    font-family:Poppins;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#F5EFE6,#D4A373,#8B5E3C);
}

/* LOGIN CARD */
.login-box{
    width:360px;
    background:#fff;
    padding:35px;
    border-radius:25px;
    box-shadow:0 15px 35px rgba(0,0,0,.3);
    text-align:center;
}

h2{
    color:#6F4528;
    margin-bottom:25px;
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:none;
    background:#f2f2f2;
    border-radius:8px;
}

button{
    width:100%;
    padding:12px;
    background:#8B5E3C;
    color:#fff;
    border:none;
    border-radius:30px;
    font-size:16px;
    cursor:pointer;
    margin-top:10px;
}

button:hover{background:#6F4528}

.msg{color:red;margin-top:10px}

a{
    display:block;
    margin-top:15px;
    text-decoration:none;
    color:#6F4528;
    font-size:14px;
}
</style>
</head>

<body>

<div class="login-box">
    <h2>User Login</h2>

    <form method="post">
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button name="login">Login</button>
    </form>

    <div class="msg"><?php echo $msg; ?></div>

    <a href="signup.php">New user? Create account</a>
</div>

</body>
</html>
