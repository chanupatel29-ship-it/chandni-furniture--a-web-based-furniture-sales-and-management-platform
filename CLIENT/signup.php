<?php
session_start();
$conn = mysqli_connect("localhost","root","","ck");

$msg = "";

/* SIGNUP PROCESS */
if(isset($_POST['signup']))
{
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    // check already exist
    $check = mysqli_query($conn,"SELECT * FROM signup WHERE email='$email'");
    if(mysqli_num_rows($check)>0){
        $msg = "Email already registered!";
    }
    else{
        mysqli_query($conn,"INSERT INTO signup(name,email,password)
                VALUES('$name','$email','$pass')");
        $msg = "Account created successfully ✔";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Signup</title>
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

/* SIGNUP CARD */
.signup-box{
    width:380px;
    background:#fff;
    padding:35px;
    border-radius:25px;
    box-shadow:0 15px 35px rgba(0,0,0,.3);
    text-align:center;
}

h2{color:#6F4528;margin-bottom:25px}

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

.msg{margin-top:12px;color:#6F4528;font-size:14px}

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

<div class="signup-box">
    <h2>Create Account</h2>

    <form method="post">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Create Password" required>
        <button name="signup">Signup</button>
    </form>

    <div class="msg"><?php echo $msg; ?></div>

    <a href="login.php">Already have account? Login</a>
</div>

</body>
</html>
