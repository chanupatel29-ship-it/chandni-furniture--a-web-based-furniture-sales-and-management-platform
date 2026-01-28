<?php
$conn = mysqli_connect("localhost","root","","ck");
if(!$conn){
    die("Connection Failed");
}

if(isset($_POST['submit'])){
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $category = $_POST['category'];
    $message  = $_POST['message'];

    $sql = "INSERT INTO suggestion (name,email,category,message)
            VALUES ('$name','$email','$category','$message')";
    mysqli_query($conn,$sql);

    header("Location: suggestion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Chandani Furniture | Suggestion</title>
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

.suggestion-box {
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(15px);
    width: 480px;
    max-width: 90%;
    padding: 50px 40px;
    border-radius: 25px;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
    animation: slideIn 1s ease-out;
    position: relative;
    z-index: 1;
}

@keyframes slideIn {
    from { opacity: 0; transform: translateY(30px) scale(0.95); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}

.suggestion-box::after {
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

.suggestion-box h2 {
    text-align: center;
    margin-bottom: 40px;
    color: #5A3E2B;
    font-weight: 600;
    font-size: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.suggestion-box h2 i {
    color: #8B5E3C;
    font-size: 36px;
}

.form-group {
    margin-bottom: 25px;
}

label {
    font-weight: 500;
    color: #5A3E2B;
    margin-bottom: 8px;
    display: block;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
}

label i {
    color: #8B5E3C;
    font-size: 18px;
}

input, textarea, select {
    width: 100%;
    padding: 14px 16px;
    border-radius: 12px;
    border: 2px solid #C9B29B;
    outline: none;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    transition: all 0.3s ease;
    background: #FAF7F2;
    box-sizing: border-box;
}

input:focus, textarea:focus, select:focus {
    border-color: #8B5E3C;
    box-shadow: 0 0 15px rgba(139, 94, 60, 0.4);
    background: #FFF;
    transform: translateY(-1px);
}

textarea {
    resize: none;
    height: 110px;
    line-height: 1.5;
}

select {
    appearance: none;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%238B5E3C' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6,9 12,15 18,9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 16px center;
    background-size: 18px;
    padding-right: 45px;
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

.note {
    text-align: center;
    font-size: 15px;
    color: #7A5A40;
    margin-top: 30px;
    font-style: italic;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.note i {
    color: #D4A373;
}

@media (max-width: 480px) {
    .suggestion-box {
        padding: 40px 25px;
        width: 95%;
    }
    .suggestion-box h2 {
        font-size: 28px;
        margin-bottom: 30px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        font-size: 15px;
    }
    input, textarea, select {
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

<div class="suggestion-box">
    <h2><i class="fas fa-lightbulb"></i> Chandani Furniture</h2>

    <form method="post">
        <div class="form-group">
            <label for="name"><i class="fas fa-user"></i> Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>

        <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
        </div>

        <div class="form-group">
            <label for="category"><i class="fas fa-list"></i> Category</label>
            <select id="category" name="category" required>
                <option value="">Select Category</option>
                <option value="Sofa">Sofa</option>
                <option value="Bed">Bed</option>
                <option value="Dining">Dining</option>
                <option value="Wardrobe">Wardrobe</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message"><i class="fas fa-comment"></i> Message</label>
            <textarea id="message" name="message" placeholder="Share your suggestion or idea..." required></textarea>
        </div>

        <button type="submit" name="submit"><i class="fas fa-paper-plane"></i> Submit Suggestion</button>
    </form>

    <div class="note">
        <i class="fas fa-sparkles"></i> Your ideas help us design better furniture
    </div>
</div>

</body>
</html>