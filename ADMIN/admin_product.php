<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}
$conn = mysqli_connect("localhost","root","","ck");
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin | Client Cart Products</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<style>
body{
    font-family:Poppins;
    background:#f5efe6;
    padding:40px;
}
table{
    width:100%;
    background:#fff;
    border-collapse:collapse;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}
th,td{
    padding:12px;
    border-bottom:1px solid #ddd;
    text-align:center;
}
th{
    background:#6b4f3f;
    color:#fff;
}
img{
    width:80px;
    border-radius:8px;
}
</style>
</head>
<body>

<h2>🛒 Client Added Products</h2>

<table>
<tr>
    <th>ID</th>
    <th>Image</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Client</th>
    <th>Date</th>
</tr>

<?php
$data = mysqli_query($conn,"SELECT * FROM cart ORDER BY id DESC");
while($row = mysqli_fetch_assoc($data)){
?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><img src="<?= $row['image']; ?>"></td>
    <td><?= $row['product_name']; ?></td>
    <td><?= $row['description']; ?></td>
    <td><?= $row['price']; ?></td>
    <td><?= $row['added_by']; ?></td>
    <td><?= $row['added_on']; ?></td>
</tr>
<?php } ?>
</table>

</body>
</html>
