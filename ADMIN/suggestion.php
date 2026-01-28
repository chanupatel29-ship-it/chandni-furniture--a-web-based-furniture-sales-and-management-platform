
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
        mysqli_query($conn,"UPDATE suggestion SET status='approved' WHERE id=$id");
    }
    if($action == 'reject'){
        mysqli_query($conn,"UPDATE suggestion SET status='rejected' WHERE id=$id");
    }

    header("Location: admin_suggestion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin | Suggestion Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #F5EFE6 0%, #D4A373 50%, #8B5E3C 100%);
    background-attachment: fixed;
    margin: 0;
    padding: 40px;
    min-height: 100vh;
    color: #5A3E2B;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    padding: 40px;
    animation: fadeInUp 0.8s ease-out;
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

h2 {
    text-align: center;
    color: #5A3E2B;
    font-weight: 600;
    font-size: 32px;
    margin-bottom: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 i {
    color: #8B5E3C;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    margin-top: 20px;
}

th, td {
    padding: 16px 12px;
    text-align: center;
    border-bottom: 1px solid #E8D5C4;
    transition: all 0.3s ease;
}

th {
    background: linear-gradient(135deg, #8B5E3C, #6F4528);
    color: white;
    font-weight: 600;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    position: sticky;
    top: 0;
    z-index: 10;
}

tr:hover {
    background: #FAF7F2;
    transform: scale(1.01);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

td {
    font-size: 14px;
    color: #5A3E2B;
}

.status {
    font-weight: 600;
    text-transform: capitalize;
    padding: 6px 12px;
    border-radius: 20px;
    display: inline-block;
    min-width: 80px;
}

.approved {
    background: linear-gradient(135deg, #4CAF50, #45A049);
    color: white;
    box-shadow: 0 3px 8px rgba(76, 175, 80, 0.3);
}

.rejected {
    background: linear-gradient(135deg, #F44336, #D32F2F);
    color: white;
    box-shadow: 0 3px 8px rgba(244, 67, 54, 0.3);
}

.pending {
    background: linear-gradient(135deg, #FF9800, #F57C00);
    color: white;
    box-shadow: 0 3px 8px rgba(255, 152, 0, 0.3);
}

.btn {
    padding: 8px 14px;
    text-decoration: none;
    border-radius: 8px;
    color: white;
    font-size: 14px;
    font-weight: 500;
    margin: 0 4px;
    display: inline-block;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    border: none;
    cursor: pointer;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
}

.approve {
    background: linear-gradient(135deg, #4CAF50, #45A049);
}

.approve:hover {
    background: linear-gradient(135deg, #45A049, #388E3C);
}

.reject {
    background: linear-gradient(135deg, #F44336, #D32F2F);
}

.reject:hover {
    background: linear-gradient(135deg, #D32F2F, #B71C1C);
}

.btn i {
    margin-right: 5px;
}

@media (max-width: 768px) {
    body {
        padding: 20px;
    }
    .container {
        padding: 20px;
    }
    h2 {
        font-size: 24px;
        margin-bottom: 30px;
    }
    table {
        font-size: 12px;
    }
    th, td {
        padding: 10px 6px;
    }
    .btn {
        padding: 6px 10px;
        font-size: 12px;
    }
}
</style>
</head>

<body>

<div class="container">
    <h2><i class="fas fa-lightbulb"></i> Chandani Furniture – Suggestion Admin Panel</h2>

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
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['category']); ?></td>
        <td><?php echo htmlspecialchars($row['message']); ?></td>
        <td class="status <?php echo $row['status']; ?>">
            <?php echo $row['status']; ?>
        </td>
        <td>
            <a href="?action=approve&id=<?php echo $row['id']; ?>" class="btn approve" title="Approve"><i class="fas fa-thumbs-up"></i> Approve</a>
            <a href="?action=reject&id=<?php echo $row['id']; ?>" class="btn reject" title="Reject"><i class="fas fa-thumbs-down"></i> Reject</a>
        </td>
    </tr>
    <?php } ?>

    </table>
</div>

</body>
</html>