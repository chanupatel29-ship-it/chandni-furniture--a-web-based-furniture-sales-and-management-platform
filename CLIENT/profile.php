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

/* ===== Profile Card ===== */
.profile-card{
    display:flex;
    flex-wrap:wrap;
    align-items:center;
    gap:30px;
    justify-content:center;
}

.profile-img{
    width:160px;
    height:160px;
    border-radius:50%;
    border:5px solid #a67c52;
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
    object-fit:cover;
}

.profile-info{
    max-width:450px;
}

.profile-info h2{
    color:#6b4f3f;
    margin-bottom:10px;
}

.profile-info p{
    color:#555;
    line-height:1.7;
    margin-bottom:8px;
}

/* ===== Buttons ===== */
.action-btns{
    margin-top:20px;
}
.action-btns a{
    display:inline-block;
    margin-right:10px;
    padding:12px 25px;
    background:linear-gradient(90deg,#6b4f3f,#a67c52);
    color:#fff;
    text-decoration:none;
    border-radius:30px;
    font-weight:600;
    transition:0.3s;
}
.action-btns a:hover{
    transform:translateY(-3px) scale(1.05);
}

/* ===== Responsive ===== */
@media(max-width:768px){
    .profile-card{
        flex-direction:column;
        text-align:center;
    }
}
</style>

<div class="center-content">
    <div class="big-box">

        <div class="header">
            <h1>My Profile</h1>
            <p>Manage your personal information and account details</p>
        </div>

        <div class="profile-card">

            <!-- Profile Image -->
            <img src="assets/images/user.png" class="profile-img">

            <!-- Profile Info -->
            <div class="profile-info">
                <h2>Chandni Customer</h2>
                <p><strong>Email:</strong> chandnifurniture@gmail.com</p>
                <p><strong>Phone:</strong> +91 98765 43210</p>
                <p><strong>Address:</strong> Rajkot, Gujarat, India</p>

                <div class="action-btns">
                    <a href="edit_profile.php">✏ Edit Profile</a>
                    <a href="change_password.php">🔒 Change Password</a>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include "last.php"; ?>
