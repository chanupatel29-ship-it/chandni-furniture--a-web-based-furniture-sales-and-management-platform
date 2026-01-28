<?php
$conn = mysqli_connect("localhost","root","","ck");
if(!$conn){
    die("Connection Failed");
}

if(isset($_POST['submit'])){
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $rating   = $_POST['rating'];
    $feedback = $_POST['feedback'];

    $sql = "INSERT INTO feedback (name,email,rating,feedback)
            VALUES ('$name','$email','$rating','$feedback')";
    mysqli_query($conn,$sql);

    header("Location: feedback.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Chandani Furniture | Feedback</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#8B5E3C,#D4A373,#F5EFE6);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.feedback-box{
    background:#fff;
    width:450px;
    max-width:92%;
    padding:45px 35px;
    border-radius:25px;
    box-shadow:0 25px 50px rgba(0,0,0,.35);
    animation:fadeIn .8s ease;
}

@keyframes fadeIn{
    from{opacity:0;transform:translateY(25px);}
    to{opacity:1;transform:translateY(0);}
}

.feedback-box h2{
    text-align:center;
    margin-bottom:35px;
    color:#5A3E2B;
    font-size:30px;
}

.form-group{
    margin-bottom:22px;
}

label{
    display:block;
    margin-bottom:8px;
    font-weight:500;
    color:#5A3E2B;
}

input,select,textarea{
    width:100%;
    padding:14px;
    border-radius:12px;
    border:2px solid #C9B29B;
    font-size:15px;
    background:#FAF7F2;
    outline:none;
}

input:focus,select:focus,textarea:focus{
    border-color:#8B5E3C;
    background:#fff;
    box-shadow:0 0 12px rgba(139,94,60,.3);
}

textarea{
    height:110px;
    resize:none;
}

button{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    font-size:18px;
    font-weight:600;
    color:#fff;
    background:linear-gradient(135deg,#8B5E3C,#6F4528);
    cursor:pointer;
    margin-top:10px;
}

button:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(0,0,0,.3);
}

.note{
    text-align:center;
    margin-top:25px;
    color:#7A5A40;
    font-style:italic;
}
</style>
</head>

<body>

<div class="feedback-box">
    <h2><i class="fas fa-star"></i> Customer Feedback</h2>

    <form method="post">

        <div class="form-group">
            <label><i class="fas fa-user"></i> Name</label>
            <input type="text" name="name" placeholder="Your name" required>
        </div>

        <div class="form-group">
            <label><i class="fas fa-envelope"></i> Email</label>
            <input type="email" name="email" placeholder="Your email" required>
        </div>

        <div class="form-group">
            <label><i class="fas fa-star-half-alt"></i> Rating</label>
            <select name="rating" required>
                <option value="">Select Rating</option>
                <option>⭐⭐⭐⭐⭐ Excellent</option>
                <option>⭐⭐⭐⭐ Very Good</option>
                <option>⭐⭐⭐ Good</option>
                <option>⭐⭐ Average</option>
                <option>⭐ Poor</option>
            </select>
        </div>

        <div class="form-group">
            <label><i class="fas fa-comment"></i> Feedback</label>
            <textarea name="feedback" placeholder="Write your feedback..." required></textarea>
        </div>

        <button type="submit" name="submit">
            <i class="fas fa-paper-plane"></i> Submit Feedback
        </button>
    </form>

    <div class="note">
        💖 Your feedback helps us improve our furniture quality
    </div>
</div>

</body>
</html>
