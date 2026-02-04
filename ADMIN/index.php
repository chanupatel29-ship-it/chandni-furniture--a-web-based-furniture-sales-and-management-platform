<?php
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // static admin credentials
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
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #8B5E3C 0%, #D4A373 50%, #F5EFE6 100%);
    background-attachment: fixed;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    position: relative;
}

body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                      radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.login-box {
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(15px);
    width: 400px;
    max-width: 90%;
    padding: 50px 40px;
    border-radius: 25px;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
    animation: slideIn 1s ease-out;
    position: relative;
    z-index: 1;
    text-align: center;
}

@keyframes slideIn {
    from { opacity: 0; transform: translateY(30px) scale(0.95); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}

.login-box::after {
    content: '';
    position: absolute;
    top: -15px;
    left: -15px;
    right: -15px;
    bottom: -15px;
    background: linear-gradient(135deg, #8B5E3C, #D4A373, #F5EFE6);
    border-radius: 30px;
    z-index: -1;
    opacity: 0.2;
}

.login-box h2 {
    color: #5A3E2B;
    margin-bottom: 30px;
    font-weight: 600;
    font-size: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.login-box h2 i {
    color: #8B5E3C;
    font-size: 36px;
}

input {
    width: 100%;
    padding: 14px 16px;
    margin-bottom: 20px;
    border-radius: 12px;
    border: 2px solid #C9B29B;
    outline: none;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    transition: all 0.3s ease;
    background: #FAF7F2;
    box-sizing: border-box;
}

input:focus {
    border-color: #8B5E3C;
    box-shadow: 0 0 15px rgba(139, 94, 60, 0.4);
    background: #FFF;
    transform: translateY(-1px);
}

button {
    width: 100%;
    padding: 16px;
    background: linear-gradient(135deg, #8B5E3C, #6F4528);
    border: none;
    color: white;
    font-size: 18px;
    font-weight: 600;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
    margin-top: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

button:hover {
    background: linear-gradient(135deg, #6F4528, #5A3E2B);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
}

button:active {
    transform: translateY(-1px);
}

.error {
    color: #F44336;
    margin-bottom: 20px;
    font-weight: 500;
    background: rgba(244, 67, 54, 0.1);
    padding: 10px;
    border-radius: 8px;
    border-left: 4px solid #F44336;
}

@media (max-width: 480px) {
    .login-box {
        padding: 40px 25px;
        width: 95%;
    }
    .login-box h2 {
        font-size: 28px;
        margin-bottom: 25px;
    }
    input {
        padding: 12px 14px;
        font-size: 14px;
    }
    button {
        padding: 14px;
        font-size: 16px;
    }
}
</style>
</head>

<body>

<div class="login-box">
    <h2><i class="fas fa-lock"></i> Admin Login</h2>

    <?php if(isset($error)){ ?>
        <div class="error"><i class="fas fa-exclamation-triangle"></i> <?php echo $error; ?></div>
    <?php } ?>

    <form method="post">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit" name="login"><i class="fas fa-sign-in-alt"></i> Enter World</button>
    </form>
</div>

</body>
</html>