<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$conn = mysqli_connect("localhost","root","","ck");

/* ===== ORDER APPROVE ===== */
if(isset($_GET['approve'])){
    $id=$_GET['approve'];
    mysqli_query($conn,"UPDATE orders SET status='Approved' WHERE id=$id");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Orders</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
body{font-family:Poppins;background:#f5efe6;padding:40px;}
table{width:100%;background:#fff;border-collapse:collapse;}
th{background:#6b4f3f;color:#fff;padding:12px;}
td{padding:12px;text-align:center;border-bottom:1px solid #ddd;}
a{padding:6px 12px;background:green;color:#fff;text-decoration:none;border-radius:5px;}
</style>
</head>

<body>
<h2>🛒 Customer Orders</h2>

<table>
<tr>
<th>ID</th>
<th>Customer</th>
<th>Phone</th>
<th>Address</th>
<th>Product</th>
<th>Price</th>
<th>Qty</th>
<th>Total</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php
$data=mysqli_query($conn,"SELECT * FROM orders ORDER BY id DESC");
while($row=mysqli_fetch_assoc($data)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td>₹<?php echo $row['price']; ?></td>
<td><?php echo $row['qty']; ?></td>
<td>₹<?php echo $row['total']; ?></td>
<td><?php echo $row['status']; ?></td>

<td>
<?php if($row['status']!="Approved"){ ?>
<a href="?approve=<?php echo $row['id']; ?>">Approve</a>
<?php } else { echo "Done"; } ?>
</td>

</tr>
<?php } ?>

</table>
</body>
</html>
