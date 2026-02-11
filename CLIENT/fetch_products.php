<?php
$conn=mysqli_connect("localhost","root","","ck");

$cat=$_GET['cat'];

if($cat=="all")
    $query=mysqli_query($conn,"SELECT * FROM products");
else
    $query=mysqli_query($conn,"SELECT * FROM products WHERE category='$cat'");

while($row=mysqli_fetch_assoc($query)){
?>

<div class="card"
onclick="openModal(
'<?php echo $row['title']; ?>',
'<?php echo $row['description']; ?>',
'<?php echo $row['price']; ?>',
'<?php echo $row['image']; ?>'
)">
    <img src="client/<?php echo $row['image']; ?>">
    <div class="card-body">
        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo $row['description']; ?></p>
        <span>₹<?php echo $row['price']; ?></span>
    </div>
</div>

<?php } ?>
