<?php
$conn = mysqli_connect("localhost","root","","ck");
if(!$conn){
    die("Connection Failed");
}

if(isset($_GET['action'],$_GET['id'])){
    $id = $_GET['id'];

    if($_GET['action']=='approve'){
        mysqli_query($conn,"UPDATE suggestion SET status='approved' WHERE id=$id");
    }
    if($_GET['action']=='reject'){
        mysqli_query($conn,"UPDATE suggestion SET status='rejected' WHERE id=$id");
    }
    header("Location: admin_suggestion.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin | Suggestion</title>
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
    max-width:1200px;
    margin:auto;
}
h2{text-align:center;color:#5A3E2B;margin-bottom:25px;}
table{
    width:100%;
    border-collapse:collapse;
}
th,td{
    padding:12px;
    text-align:center;
}
th{background:#8B5E3C;color:white;}
tr:nth-child(even){background:#faf7f2;}

.status{
    padding:6px 12px;
    border-radius:20px;
    color:white;
    font-size:13px;
}
.pending{background:#FF9800;}
.approved{background:#4CAF50;}
.rejected{background:#F44336;}

.btn{
    padding:6px 10px;
    border-radius:6px;
    color:white;
    text-decoration:none;
    font-size:13px;
}
.approve{background:#4CAF50;}
.reject{background:#F44336;}
</style>
</head>

<body>

<div class="container">
<h2>💡 Suggestion Management</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Category</th>
    <th>Message</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php
$data = mysqli_query($conn,"SELECT * FROM suggestion ORDER BY id DESC");
while($row = mysqli_fetch_assoc($data)){
?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= htmlspecialchars($row['name']); ?></td>
    <td><?= htmlspecialchars($row['email']); ?></td>
    <td><?= htmlspecialchars($row['category']); ?></td>
    <td><?= htmlspecialchars($row['message']); ?></td>
    <td><span class="status <?= $row['status']; ?>"><?= ucfirst($row['status']); ?></span></td>
    <td>
        <a href="?action=approve&id=<?= $row['id']; ?>" class="btn approve">Approve</a>
        <a href="?action=reject&id=<?= $row['id']; ?>" class="btn reject">Reject</a>
    </td>
</tr>
<?php } ?>
</table>
</div>

</body>
</html>
