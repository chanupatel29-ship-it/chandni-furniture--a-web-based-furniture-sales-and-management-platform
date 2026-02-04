<?php
$conn = mysqli_connect("localhost","root","","ck");
if(!$conn){
    die("Connection Failed");
}

if(isset($_POST['submit'])){
    $name     = mysqli_real_escape_string($conn,$_POST['name']);
    $email    = mysqli_real_escape_string($conn,$_POST['email']);
    $rating   = mysqli_real_escape_string($conn,$_POST['rating']);
    $message  = mysqli_real_escape_string($conn,$_POST['feedback']);

    $sql = "INSERT INTO feedback (name,email,rating,message,status)
            VALUES ('$name','$email','$rating','$message','pending')";
    mysqli_query($conn,$sql);

    header("Location: feedback.php?success=1");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Chandani Furniture | Feedback</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<style>
body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#8B5E3C,#D4A373);
    height:100vh;
    overflow:hidden;
    display:flex;
    justify-content:center;
    align-items:center;
}
.feedback-box{
    background:#fff;
    width:360px;
    padding:28px;
    border-radius:18px;
    box-shadow:0 20px 35px rgba(0,0,0,.3);
}
h2{text-align:center;color:#5A3E2B;margin-bottom:18px;}
label{font-size:14px;color:#5A3E2B;}
input,select,textarea{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:12px;
    border-radius:10px;
    border:1.8px solid #C9B29B;
}
textarea{height:80px;resize:none;}
button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    background:#8B5E3C;
    color:#fff;
    font-weight:600;
    cursor:pointer;
}
.success{
    text-align:center;
    color:green;
    font-size:14px;
    margin-bottom:10px;
}
</style>
</head>

<body>

<div class="feedback-box">
    <h2>⭐ Feedback</h2>

    <?php if(isset($_GET['success'])){ ?>
        <div class="success">Thank you for your feedback 💖</div>
    <?php } ?>

    <form method="post">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Rating</label>
        <select name="rating" required>
            <option value="">Select</option>
            <option>⭐⭐⭐⭐⭐ Excellent</option>
            <option>⭐⭐⭐⭐ Very Good</option>
            <option>⭐⭐⭐ Good</option>
            <option>⭐⭐ Average</option>
            <option>⭐ Poor</option>
        </select>

        <label>Feedback</label>
        <textarea name="feedback" required></textarea>

        <button type="submit" name="submit">Submit</button>
    </form>
</div>

</body>
</html>
