<?php include "first.php"; ?>

<style>
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
    max-width:600px;
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
.header{
    text-align:center;
    margin-bottom:30px;
}
.header h1{
    color:#6b4f3f;
    font-size:34px;
}
.header:after{
    content:'';
    width:90px;
    height:4px;
    background:linear-gradient(90deg,#6b4f3f,#a67c52);
    display:block;
    margin:12px auto;
}
.form-group{
    margin-bottom:15px;
}
label{
    font-weight:600;
    color:#6b4f3f;
}
input{
    width:100%;
    padding:12px;
    border-radius:10px;
    border:2px solid #ddd;
    font-size:14px;
}
input:focus{
    border-color:#6b4f3f;
    outline:none;
}
.btn{
    display:block;
    margin:20px auto 0;
    padding:14px 35px;
    background:linear-gradient(90deg,#6b4f3f,#a67c52);
    color:#fff;
    border:none;
    border-radius:30px;
    font-weight:600;
    cursor:pointer;
}
.btn:hover{
    transform:translateY(-2px);
}
</style>

<div class="center-content">
<div class="big-box">

<div class="header">
    <h1>Change Password</h1>
</div>

<form method="post">
    <div class="form-group">
        <label>Current Password</label>
        <input type="password" required>
    </div>

    <div class="form-group">
        <label>New Password</label>
        <input type="password" required>
    </div>

    <div class="form-group">
        <label>Confirm New Password</label>
        <input type="password" required>
    </div>

    <button class="btn">🔒 Update Password</button>
</form>

</div>
</div>

<?php include "last.php"; ?>
