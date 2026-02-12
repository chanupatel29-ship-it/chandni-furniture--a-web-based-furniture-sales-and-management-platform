<?php include "first.php"; ?>

<style>
/* HERO (FIXED SMALL HEIGHT) */
.hero{
    width:100%;
    height:420px;   /* 👈 MAIN CHANGE (size control here) */
    background:url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7') center/cover no-repeat;
    background-size:cover;
    display:flex;
    align-items:center;
}

/* Dark box */
.hero-box{
    background:rgba(0,0,0,0.55);
    padding:35px 40px;
    margin-left:60px;
    border-radius:10px;
    max-width:460px;
    color:#fff;
}

/* Text */
.hero-box h1{
    font-size:30px;
    font-weight:600;
    margin-bottom:12px;
}

.hero-box p{
    font-size:14px;
    line-height:1.6;
    margin-bottom:20px;
    color:#eaeaea;
}

/* Button */
.hero-btn{
    background:#d4a373;
    color:#000;
    padding:10px 22px;
    border-radius:6px;
    text-decoration:none;
    font-weight:600;
    display:inline-block;
}

.hero-btn:hover{
    background:#c08b5c;
}
</style>

<section class="hero">
    <div class="hero-box">
        <h1>Quality Furniture for Every Home</h1>
        <p>Elegant, durable & affordable furniture crafted with perfection.</p>
        <a href="products.php" class="hero-btn">Explore Collection</a>
    </div>
</section>


<style>
/* FEATURED FURNITURE */
.featured-section{
    padding:70px 60px;
    background:#f8f8f8;
}

.featured-title{
    text-align:center;
    font-size:32px;
    margin-bottom:45px;
    color:#5a3e2b;
}

.featured-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(260px,1fr));
    gap:30px;
}

.furniture-card{
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0,0,0,0.12);
    transition:0.3s;
}

.furniture-card:hover{
    transform:translateY(-6px);
}

.furniture-card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card-body{
    padding:18px;
}

.card-body h3{
    font-size:18px;
    margin-bottom:6px;
    color:#333;
}

.card-body p{
    font-size:14px;
    color:#666;
    margin-bottom:10px;
}

.price{
    font-weight:600;
    color:#6b4f3f;
    font-size:16px;
}
</style>

<section class="featured-section">
    <h2 class="featured-title">Featured Furniture</h2>

    <div class="featured-grid">

        <!-- Sofa -->
        <div class="furniture-card">
            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc" alt="Luxury Sofa">
            <div class="card-body">
                <h3>Luxury Sofa</h3>
                <p>Comfortable & stylish sofa set</p>
                <div class="price">₹25,000</div>
            </div>
        </div>

        <!-- Bed -->
        <div class="furniture-card">
            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85" alt="Wooden Bed">
            <div class="card-body">
                <h3>Wooden Bed</h3>
                <p>Premium quality teak wood bed</p>
                <div class="price">₹32,000</div>
            </div>
        </div>

        <!-- Dining -->
        <div class="furniture-card">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" alt="Dining Table">
            <div class="card-body">
                <h3>Dining Table</h3>
                <p>6 Seater dining table set</p>
                <div class="price">₹18,000</div>
            </div>
        </div>

        <!-- Chair -->
        <div class="furniture-card">
            <img src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4" alt="Modern Chair">
            <div class="card-body">
                <h3>Modern Chair</h3>
                <p>Elegant modern chair design</p>
                <div class="price">₹7,500</div>
            </div>
        </div>

    </div>
</section>


<style>
/* WHY CHOOSE SECTION */
.why-choose{
    padding:70px 50px;
    background:#f7f5f3;
}

.why-choose h2{
    text-align:center;
    font-size:32px;
    margin-bottom:10px;
    color:#6b4f3f;
}

.why-choose .subtitle{
    text-align:center;
    color:#666;
    margin-bottom:45px;
    font-size:15px;
}

/* Cards */
.choose-cards{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
    gap:30px;
}

.choose-card{
    background:#ffffff;
    padding:35px 25px;
    text-align:center;
    border-radius:14px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    transition:0.3s;
}

.choose-card:hover{
    transform:translateY(-8px);
}

/* Icon circle */
.choose-icon{
    width:70px;
    height:70px;
    margin:0 auto 20px;
    border-radius:50%;
    background:#d4a373;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:30px;
    color:#000;
}

.choose-card h3{
    font-size:18px;
    margin-bottom:10px;
    color:#6b4f3f;
}

.choose-card p{
    font-size:14px;
    color:#555;
    line-height:1.6;
}
</style>

<section class="why-choose">
    <h2>Why Choose Chandni Furniture?</h2>
    <p class="subtitle">We deliver comfort, quality and trust in every piece</p>

    <div class="choose-cards">

        <div class="choose-card">
            <div class="choose-icon">🪑</div>
            <h3>Premium Quality</h3>
            <p>We use high-quality wood and materials to ensure long-lasting furniture.</p>
        </div>

        <div class="choose-card">
            <div class="choose-icon">💰</div>
            <h3>Affordable Prices</h3>
            <p>Best quality furniture at prices that suit every budget.</p>
        </div>

        <div class="choose-card">
            <div class="choose-icon">🛠️</div>
            <h3>Custom Design</h3>
            <p>Furniture designed as per your space, style, and requirements.</p>
        </div>

        <div class="choose-card">
            <div class="choose-icon">🤝</div>
            <h3>Trusted Service</h3>
            <p>Customer satisfaction and after-sales support you can rely on.</p>
        </div>

    </div>
</section>


<style>
/* FOOTER */
.footer{
    background:linear-gradient(135deg, #5a3e2b, #7a5a43);
    color:#fff;
    padding:50px 60px 25px;
    font-family:'Poppins', sans-serif;
}

.footer-container{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(220px, 1fr));
    gap:40px;
    margin-bottom:30px;
}

/* Footer Headings */
.footer h3{
    margin-bottom:15px;
    font-size:18px;
    display:flex;
    align-items:center;
    gap:8px;
}

/* Footer text */
.footer p{
    font-size:14px;
    line-height:1.7;
    color:#f1f1f1;
}

/* Links */
.footer a{
    color:#f1f1f1;
    text-decoration:none;
    font-size:14px;
    display:block;
    margin-bottom:8px;
}

.footer a:hover{
    color:#d4a373;
}

/* Contact info */
.footer .contact-item{
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:10px;
    font-size:14px;
}

/* Social icons */
.social-icons a{
    display:inline-block;
    margin-right:12px;
    font-size:18px;
    color:#fff;
    transition:0.3s;
}

.social-icons a:hover{
    color:#d4a373;
}

/* Bottom */
.footer-bottom{
    border-top:1px solid rgba(255,255,255,0.2);
    padding-top:15px;
    text-align:center;
    font-size:14px;
    color:#f1f1f1;
}
</style>

<footer class="footer">
    <div class="footer-container">

        <!-- About -->
        <div>
            <h3>🪑 Chandni Furniture</h3>
            <p>
                Chandni Furniture provides elegant, durable & affordable furniture
                to make every home beautiful and comfortable.
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3>🔗 Quick Links</h3>
            <a href="🏠home.php">Home</a>
            <a href=" 🪑products.php">Products</a>
            <a href="📝aboutus.php">About Us</a>
            <a href=" 📞contact.php">Contact</a>
            <a href="👍feedback.php">feedback</a>
            <a href="💌suggestion.php">suggestion</a>
        </div>

        <!-- Contact -->
        <div>
            <h3>📞 Contact Us</h3>
            <div class="contact-item">📍 India</div>
            <div class="contact-item">✉ chandnifurniture@gmail.com</div>
            <div class="contact-item">📱 +91 98765 43210</div>
        </div>

        <!-- Social -->
        <div>
<h3><i class="fas fa-share-alt"></i> Connect</h3>
            <div class="social-icons">
                 <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 Chandni Furniture | Comfort Meets Quality 🛋️
    </div>
</footer>
