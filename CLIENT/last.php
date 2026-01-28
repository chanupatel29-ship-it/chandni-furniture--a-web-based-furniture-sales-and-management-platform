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
            <a href="home.php">Home</a>
            <a href="products.php">Products</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
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
