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
<title>Chandni Furniture | Suggestion</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#8B5E3C,#D4A373);
    height:100vh;
    overflow:hidden;
    display:flex;
    flex-direction:column;
}

/* HEADER */
.header{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:12px;
    padding:12px;
    background:rgba(0,0,0,0.25);
}
.header img{
    width:45px;
    height:45px;
    border-radius:50%;
    border:2px solid #fff;
}
.header h1{
    color:#fff;
    font-size:24px;
}

/* CENTER */
.wrapper{
    flex:1;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* CARD */
.box{
    background:#fff;
    width:320px;
    padding:22px;
    border-radius:18px;
    box-shadow:0 20px 35px rgba(0,0,0,.35);
    animation:fade 0.8s ease;
}

@keyframes fade{
    from{opacity:0; transform:translateY(25px);}
    to{opacity:1; transform:translateY(0);}
}

h2{
    text-align:center;
    color:#5A3E2B;
    margin-bottom:10px;
    font-size:20px;
}

label{
    font-size:13px;
    color:#5A3E2B;
}

input,select,textarea{
    width:100%;
    padding:8px;
    margin-top:4px;
    margin-bottom:10px;
    border-radius:8px;
    border:1.5px solid #C9B29B;
    font-size:13px;
}

textarea{
    height:70px;
    resize:none;
}

button{
    width:100%;
    padding:10px;
    border:none;
    border-radius:10px;
    background:linear-gradient(45deg,#8B5E3C,#6F4528);
    color:#fff;
    font-weight:600;
    cursor:pointer;
    font-size:14px;
    transition:0.3s;
}
button:hover{
    transform:scale(1.05);
}

.success{
    text-align:center;
    color:green;
    font-size:13px;
    margin-bottom:8px;
}

/* FOOTER */
.footer{
    background:#5A3E2B;
    color:#fff;
    text-align:center;
    padding:10px;
    font-size:13px;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    <img src="logo1.jpg">
    <h1>Chandni Furniture</h1>
</div>

<div class="wrapper">
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

    <button type="submit" name="submit">Submit Suggestion</button>
</form>

</div>
</div>

<div class="footer">
    © <?php echo date("Y"); ?> Chandni Furniture • We love your ideas 💡
</div>

</body>
</html>
