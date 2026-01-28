<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>About Us | Chandni Furniture</title>

<style>
/* ===== Global ===== */
body{
    margin:0;
    font-family:'Poppins', sans-serif;
    background:linear-gradient(135deg,#f5f5f5,#eaeaea);
    color:#333;
}

/* ===== Header ===== */
.header{
    background:linear-gradient(90deg,#6b4f3f,#a67c52);
    padding:20px;
    text-align:center;
    color:#fff;
}
.header h1{
    margin:0;
    font-size:36px;
}

/* ===== Container ===== */
.container{
    max-width:1100px;
    margin:40px auto;
    padding:20px;
}

/* ===== About Section ===== */
.about-box{
    background:#fff;
    border-radius:20px;
    padding:40px;
    box-shadow:0 10px 30px rgba(0,0,0,0.1);
}

.about-box h2{
    color:#6b4f3f;
    font-size:28px;
    margin-bottom:15px;
}

.about-box p{
    font-size:16px;
    line-height:1.8;
    margin-bottom:20px;
}

/* ===== Highlights ===== */
.highlights{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-top:30px;
}

.card{
    background:#f9f9f9;
    padding:25px;
    border-radius:15px;
    text-align:center;
    transition:0.3s;
}
.card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.card h3{
    color:#6b4f3f;
    margin-bottom:10px;
}

/* ===== Footer ===== */
.footer{
    background:#6b4f3f;
    color:#fff;
    text-align:center;
    padding:15px;
    margin-top:50px;
}

/* ===== Responsive ===== */
@media(max-width:600px){
    .header h1{font-size:28px;}
    .about-box{padding:25px;}
}
</style>
</head>

<body>

<!-- ===== Header ===== -->
<div class="header">
    <h1>About Chandni Furniture</h1>
</div>

<!-- ===== Main Content ===== -->
<div class="container">
    <div class="about-box">
        <h2>Who We Are</h2>
        <p>
            Chandni Furniture is a trusted name in quality furniture, delivering
            elegant designs, durable materials, and comfort-focused products for
            modern homes and offices.
        </p>

        <h2>Our Mission</h2>
        <p>
            Our mission is to provide stylish, affordable, and long-lasting furniture
            that transforms your living space into a place of comfort and beauty.
        </p>

        <h2>Why Choose Us?</h2>

        <div class="highlights">
            <div class="card">
                <h3>🪑 Premium Quality</h3>
                <p>We use high-quality materials to ensure durability and comfort.</p>
            </div>

            <div class="card">
                <h3>🎨 Modern Designs</h3>
                <p>Stylish furniture that fits perfectly with modern interiors.</p>
            </div>

            <div class="card">
                <h3>💰 Affordable Prices</h3>
                <p>Best quality furniture at competitive and fair prices.</p>
            </div>

            <div class="card">
                <h3>🤝 Customer Trust</h3>
                <p>Customer satisfaction is our top priority.</p>
            </div>
        </div>
    </div>
</div>

<!-- ===== Footer ===== -->
<div class="footer">
    © <?php echo date("Y"); ?> Chandni Furniture. All Rights Reserved.
</div>

</body>
</html>
