<?php
$conn = mysqli_connect("localhost","root","","ck");
if(!$conn){
    die("Connection Failed");
}

/* ===== ACTION LOGIC ===== */
if(isset($_GET['action']) && isset($_GET['id'])){
    $id = $_GET['id'];
    $action = $_GET['action'];

    if($action == 'approve'){
        mysqli_query($conn,"UPDATE feedback SET status='approved' WHERE id=$id");
    }
    if($action == 'reject'){
        mysqli_query($conn,"UPDATE feedback SET status='rejected' WHERE id=$id");
    }

    header("Location: admin_feedback.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin | Feedback Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#F5EFE6,#D4A373,#8B5E3C);
    margin:0;
    padding:40px;
    min-height:100vh;
}

.container{
    max-width:1200px;
    margin:auto;
    background:#fff;
    padding:40px;
    border-radius:20px;
    box-shadow:0 20px 40px rgba(0,0,0,0.3);
}

h2{
    text-align:center;
    color:#5A3E2B;
    margin-bottom:30px;
}

table{
    width:100%;
    border-collapse:collapse;
    border-radius:15px;
    overflow:hidden;
}

th{
    background:#8B5E3C;
    color:white;
    padding:14px;
}

td{
    padding:14px;
    text-align:center;
    border-bottom:1px solid #e5d2be;
}

tr:hover{background:#faf7f2;}

.status{
    padding:6px 12px;
    border-radius:20px;
    color:white;
    font-weight:600;
}

.approved{background:#4CAF50;}
.rejected{background:#F44336;}
.pending{background:#FF9800;}

.btn{
    padding:7px 12px;
    border-radius:8px;
    color:white;
    text-decoration:none;
    font-size:13px;
    margin:0 3px;
    display:inline-block;
}

.approve{background:#4CAF50;}
.reject{background:#F44336;}
</style>
</head>

<body>

<div class="container">
<h2><i class="fas fa-star"></i> Chandani Furniture – Feedback Admin Panel</h2>

<table>
<tr>
    <th>ID</th>
    <th>Type</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Rating</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php
$data = mysqli_query($conn,"SELECT * FROM feedback ORDER BY id DESC");
while($row = mysqli_fetch_assoc($data)){
?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= htmlspecialchars($row['type']); ?></td>
    <td><?= htmlspecialchars($row['name']); ?></td>
    <td><?= htmlspecialchars($row['email']); ?></td>
    <td><?= htmlspecialchars($row['message']); ?></td>
    <td><?= $row['rating']; ?> ⭐</td>
    <td class="status <?= $row['status']; ?>">
        <?= ucfirst($row['status']); ?>
    </td>
    <td>
        <a href="?action=approve&id=<?= $row['id']; ?>" class="btn approve">
            <i class="fas fa-check"></i>
        </a>
        <a href="?action=reject&id=<?= $row['id']; ?>" class="btn reject">
            <i class="fas fa-times"></i>
        </a>
    </td>
</tr>
<?php } ?>
</table>
</div>

</body>
</html>
