<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$conn = mysqli_connect("localhost","root","","ck");

/* ⚠️ If your table name is different change here */
$table = "signup";

/* DELETE USER */
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn,"DELETE FROM $table WHERE id=$id");
    header("Location: admin_users.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Users</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
body{
    font-family:'Poppins',sans-serif;
    background:#F5EFE6;
    margin:0;
}

/* HEADER */
.header{
    background:#6F4528;
    color:#fff;
    padding:20px 40px;
    font-size:24px;
    font-weight:600;
}

/* CONTAINER */
.container{
    max-width:1100px;
    margin:40px auto;
    background:#fff;
    padding:30px;
    border-radius:18px;
    box-shadow:0 10px 25px rgba(0,0,0,.15);
}

/* TABLE */
table{
    width:100%;
    border-collapse:collapse;
}
th{
    background:#8B5E3C;
    color:#fff;
    padding:14px;
    text-align:left;
}
td{
    padding:12px;
    border-bottom:1px solid #eee;
}

tr:hover{background:#faf7f4}

/* DELETE BTN */
.delete{
    background:#e53935;
    color:#fff;
    padding:6px 12px;
    border-radius:6px;
    text-decoration:none;
    font-size:13px;
}
.delete:hover{background:#c62828}

/* BACK BTN */
.back{
    display:inline-block;
    margin-bottom:20px;
    text-decoration:none;
    color:#6F4528;
    font-weight:600;
}
</style>
</head>

<body>

<div class="header">
    <i class="fas fa-users"></i> Manage Users
</div>

<div class="container">

<a href="admin_dashboard.php" class="back">
    ← Back to Dashboard
</a>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php
$data = mysqli_query($conn,"SELECT * FROM $table ORDER BY id DESC");

while($row=mysqli_fetch_assoc($data)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td>
    <a class="delete" href="?delete=<?php echo $row['id']; ?>" 
       onclick="return confirm('Delete this user?')">
       Delete
    </a>
</td>
</tr>
<?php } ?>

</table>

</div>

</body>
</html>
