<?php include "first.php"; ?>

<style>
/* ===== Page Layout ===== */
body{
    font-family:'Poppins',sans-serif;
    margin:0;
    background:linear-gradient(135deg,#f5f5f5,#e8e8e8);
    min-height:100vh;
    display:flex;
    flex-direction:column;
}

.center-content{
    flex:1;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:40px 20px;
}

.big-box{
    max-width:900px;
    width:90%;
    background:rgba(255,255,255,0.95);
    border-radius:25px;
    padding:50px 30px;
    box-shadow:0 15px 40px rgba(0,0,0,0.15);
    animation:slideIn 0.8s ease;
}

@keyframes slideIn{
    from{opacity:0;transform:scale(0.95);}
    to{opacity:1;transform:scale(1);}
}

/* ===== Header ===== */
.header{
    text-align:center;
    margin-bottom:40px;
}
.header h1{
    color:#6b4f3f;
    font-size:36px;
}
.header p{
    color:#555;
}
.header:after{
    content:'';
    width:100px;
    height:4px;
    background:linear-gradient(90deg,#6b4f3f,#a67c52);
    display:block;
    margin:15px auto;
}

/* ===== Button ===== */
.attractive-button{
    padding:15px 35px;
    background:linear-gradient(90deg,#6b4f3f,#a67c52);
    color:#fff;
    border:none;
    border-radius:50px;
    font-size:18px;
    cursor:pointer;
    box-shadow:0 6px 20px rgba(0,0,0,0.2);
}
.attractive-button:hover{
    transform:translateY(-3px) scale(1.05);
}

/* ===== Modal ===== */
.modal{
    display:none;
    position:fixed;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:95%;
    max-width:500px;
    background:#fff;
    border-radius:20px;
    padding:30px;
    box-shadow:0 15px 40px rgba(0,0,0,0.25);
    z-index:1000;
}

.close{
    position:absolute;
    top:15px;
    right:20px;
    font-size:28px;
    cursor:pointer;
    color:#6b4f3f;
}

/* ===== Form ===== */
.form-group{
    margin-bottom:15px;
}
.form-group label{
    font-weight:600;
    color:#6b4f3f;
    display:block;
    margin-bottom:5px;
}
.form-group input,
.form-group textarea,
.form-group select{
    width:100%;
    padding:12px;
    border-radius:10px;
    border:2px solid #ddd;
    background:#fafafa;
}
.form-group textarea{min-height:100px;}

.modal button{
    width:50%;
    display:block;
    margin:20px auto 0;
    padding:14px;
    background:linear-gradient(90deg,#6b4f3f,#a67c52);
    color:#fff;
    border:none;
    border-radius:10px;
    font-size:16px;
}
</style>

<div class="center-content">
    <div class="big-box">
        <div class="header">
            <h1>Inquiry</h1>
            <p>Have a question about our furniture? Send us your inquiry.</p>
        </div>

        <center>
            <button class="attractive-button" onclick="openModal()">🛋 Send Inquiry</button>
        </center>
    </div>
</div>

<!-- Modal -->
<div id="inquiryModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2 style="text-align:center;color:#6b4f3f;">Furniture Inquiry</h2>

    <form method="post">
        <div class="form-group">
            <label>Your Name</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" required>
        </div>

        <div class="form-group">
            <label>Furniture Type</label>
            <select name="type" required>
                <option value="">Select</option>
                <option>Sofa</option>
                <option>Bed</option>
                <option>Dining Table</option>
                <option>Wardrobe</option>
            </select>
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea name="message" required></textarea>
        </div>

        <button name="submit">Submit Inquiry</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        echo "<p style='color:green;text-align:center;margin-top:10px;'>
        Inquiry submitted successfully!</p>";
    }
    ?>
</div>

<script>
function openModal(){
    document.getElementById('inquiryModal').style.display='block';
}
function closeModal(){
    document.getElementById('inquiryModal').style.display='none';
}
</script>

<?php include "last.php"; ?>
