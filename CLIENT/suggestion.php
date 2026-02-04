<?php
$conn = mysqli_connect("localhost","root","","ck");
if(!$conn){
    die("Connection Failed");
}

if(isset($_POST['submit'])){
    $name     = mysqli_real_escape_string($conn,$_POST['name']);
    $email    = mysqli_real_escape_string($conn,$_POST['email']);
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $message  = mysqli_real_escape_string($conn,$_POST['message']);

    $sql = "INSERT INTO suggestion (name,email,category,message,status)
            VALUES ('$name','$email','$category','$message','pending')";
    mysqli_query($conn,$sql);

    header("Location: suggestion.php?success=1");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Chandani Furniture | Suggestion</title>
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
.box{
    background:#fff;
    width:380px;
    padding:30px;
    border-radius:20px;
    box-shadow:0 20px 35px rgba(0,0,0,.35);
}
h2{text-align:center;color:#5A3E2B;margin-bottom:18px;}
label{font-size:14px;color:#5A3E2B;}
input,select,textarea{
    width:100%;
    padding:10px;
    margin:6px 0 12px;
    border-radius:10px;
    border:1.8px solid #C9B29B;
}
textarea{height:85px;resize:none;}
button{
    width:100%;
    padding:12px;
    background:#8B5E3C;
    color:white;
    border:none;
    border-radius:10px;
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

<div class="box">
<h2>💡 Suggestion</h2>

<?php if(isset($_GET['success'])){ ?>
<div class="success">Thank you for your suggestion 💖</div>
<?php } ?>

<form method="post">
    <label>Name</label>
    <input type="text" name="name" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Category</label>
    <select name="category" required>
        <option value="">Select</option>
        <option>Sofa</option>
        <option>Bed</option>
        <option>Dining</option>
        <option>Wardrobe</option>
        <option>Other</option>
    </select>

    <label>Message</label>
    <textarea name="message" required></textarea>

    <button type="submit" name="submit">Submit</button>
</form>
</div>

</body>
</html>
