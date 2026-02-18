<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$conn = mysqli_connect("localhost","root","","ck");
if(!$conn){
    die("Connection Failed");
}

/* ===== APPROVE ORDER ===== */
if(isset($_GET['action'],$_GET['id'])){
    $id = $_GET['id'];

    if($_GET['action']=='approve'){
        mysqli_query($conn,"UPDATE orders SET status='Approved' WHERE id=$id");
    }
    header("Location: admin_orders.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin | Orders</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#F5EFE6,#D4A373,#8B5E3C);
    padding:40px;
}

.container{
    background:#fff;
    padding:30px;
    border-radius:20px;
    max-width:1300px;
    margin:auto;
    box-shadow:0 15px 35px rgba(0,0,0,.2);
}

h2{
    text-align:center;
    color:#5A3E2B;
    margin-bottom:25px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:12px;
    text-align:center;
}

th{
    background:#8B5E3C;
    color:white;
}

tr:nth-child(even){
    background:#faf7f2;
}

/* STATUS BADGES */
.status{
    padding:6px 14px;
    border-radius:20px;
    color:white;
    font-size:13px;
    font-weight:500;
}

.pending{background:#FF9800;}
.approved{background:#4CAF50;}

/* BUTTON */
.btn{
    padding:6px 12px;
    border-radius:6px;
    color:white;
    text-decoration:none;
    font-size:13px;
    font-weight:500;
}

.approve{background:#4CAF50;}
.done{
    background:#999;
    padding:6px 12px;
    border-radius:6px;
    color:#fff;
    font-size:13px;
}
</style>
</head>

<body>

<div class="container">
<h2>🛒 Customer Orders Management</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
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
$statusClass = ($row['status']=="Approved") ? "approved" : "pending";
?>

<tr>
<td><?= $row['id']; ?></td>
<td><?= htmlspecialchars($row['name']); ?></td>
<td><?= htmlspecialchars($row['phone']); ?></td>
<td><?= htmlspecialchars($row['address']); ?></td>
<td><?= htmlspecialchars($row['product_name']); ?></td>
<td>₹<?= $row['price']; ?></td>
<td><?= $row['qty']; ?></td>
<td>₹<?= $row['total']; ?></td>

<td>
<span class="status <?= $statusClass; ?>">
<?= $row['status'] ?? 'Pending'; ?>
</span>
</td>

<td>
<?php if($row['status']!="Approved"){ ?>
<a href="?action=approve&id=<?= $row['id']; ?>" class="btn approve">Approve</a>
<?php } else { ?>
<span class="done">Completed</span>
<?php } ?>
</td>

</tr>
<?php } ?>

</table>
</div>

</body>
</html>
