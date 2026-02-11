<?php 
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}
$conn=mysqli_connect("localhost","root","","ck");

if(isset($_POST['add']))
{
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    $category=$_POST['category'];

    $img=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"../client/".$img);

    mysqli_query($conn,"INSERT INTO products(title,description,price,image,category)
    VALUES('$title','$desc','$price','$img','$category')");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Products</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:Poppins;
    background:#f5efe6;
    margin:0;
    padding:40px;
}

/* Page Title */
h1{
    text-align:center;
    color:#6b4f3f;
    margin-bottom:30px;
}

/* Form Card */
.form-box{
    width:500px;
    margin:auto;
    background:#fff;
    padding:30px;
    border-radius:12px;
    box-shadow:0 8px 20px rgba(0,0,0,0.1);
}

.form-box h2{
    text-align:center;
    color:#6b4f3f;
}

input, textarea, select{
    width:100%;
    padding:10px;
    margin-top:8px;
    margin-bottom:15px;
    border:1px solid #ddd;
    border-radius:6px;
    font-size:14px;
}

button{
    width:100%;
    padding:12px;
    background:#6b4f3f;
    color:white;
    border:none;
    border-radius:6px;
    font-size:16px;
    cursor:pointer;
}
button:hover{ background:#5a3f31; }

/* Table */
.table-box{
    margin-top:50px;
    background:#fff;
    padding:30px;
    border-radius:12px;
    box-shadow:0 8px 20px rgba(0,0,0,0.1);
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#6b4f3f;
    color:#fff;
    padding:12px;
}

td{
    padding:12px;
    border-bottom:1px solid #eee;
    text-align:center;
}

img{
    border-radius:6px;
}
</style>
</head>

<body>

<h1>🛠 Admin Product Panel</h1>

<div class="form-box">
<h2>Add Product</h2>

<form method="post" enctype="multipart/form-data">
<input type="text" name="title" placeholder="Product Title" required>
<textarea name="desc" placeholder="Description"></textarea>
<input type="text" name="price" placeholder="Price">

<select name="category">
<option>Sofa</option>
<option>Bed</option>
<option>Dining</option>
<option>Wardrobe</option>
</select>

<input type="file" name="image" required>
<button name="add">Add Product</button>
</form>
</div>

<div class="table-box">
<h2>All Products</h2>

<table>
<tr>
<th>ID</th>
<th>Image</th>
<th>Name</th>
<th>Price</th>
</tr>

<?php
$data=mysqli_query($conn,"SELECT * FROM products ORDER BY id DESC");
while($row=mysqli_fetch_assoc($data)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><img src="../client/<?php echo $row['image']; ?>" width="70"></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['price']; ?></td>
</tr>
<?php } ?>
</table>
</div>

</body>
</html>
