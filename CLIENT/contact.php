<?php include "first.php"; ?>

<style>
/* ====== Page Layout ====== */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
    background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.center-content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 20px;
}

.big-box {
    max-width: 900px;
    width: 90%;
    background: rgba(255,255,255,0.95);
    border-radius: 25px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    backdrop-filter: blur(10px);
    padding: 50px 30px;
    position: relative;
    overflow: hidden;
    animation: slideIn 0.8s ease-out;
}

@keyframes slideIn {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
}

/* ====== Header Text ====== */
.contact-header {
    text-align: center;
    margin-bottom: 40px;
}
.contact-header h1 {
    color: #6b4f3f;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 10px;
}
.contact-header p {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
}
.contact-header::after {
    content: '';
    display: block;
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, #6b4f3f, #a67c52);
    margin: 15px auto 0;
    border-radius: 2px;
}

/* ====== Info Cards ====== */
.contact-info {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 40px;
}
.contact-info div {
    flex: 1;
    min-width: 180px;
    text-align: center;
    padding: 20px;
    background: linear-gradient(145deg, #fff, #f9f9f9);
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}
.contact-info div:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.contact-info h3 {
    color: #6b4f3f;
    font-size: 18px;
    margin-bottom: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
}
.contact-info p {
    color: #555;
    font-size: 14px;
    margin: 0;
}

/* ====== Open Modal Button ====== */
.attractive-button {
    display: inline-block;
    margin: 0 auto;
    padding: 15px 35px;
    background: linear-gradient(90deg, #6b4f3f, #a67c52);
    color: #fff;
    border: none;
    border-radius: 50px;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 6px 20px rgba(0,0,0,0.2);
}
.attractive-button:hover {
    background: linear-gradient(90deg, #5a4033, #8e6a47);
    transform: translateY(-3px) scale(1.05);
}

/* ====== Modal ====== */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 95%;
    max-width: 500px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.25);
    padding: 30px 25px;
    backdrop-filter: blur(5px);
    animation: fadeIn 0.3s ease;
}

.modal-content h2 {
    text-align: center;
    color: #6b4f3f;
    margin-bottom: 25px;
    font-size: 24px;
}

.close {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 28px;
    cursor: pointer;
    color: #6b4f3f;
    transition: color 0.3s;
}
.close:hover { color: #a67c52; }

/* ====== Form ====== */
.form-group { margin-bottom: 15px; }
.form-group label {
    font-weight: 600;
    color: #6b4f3f;
    margin-bottom: 5px;
    display: block;
    font-size: 14px;
}
.form-group input, .form-group textarea {
    width: 100%;
    padding: 12px 15px;
    border-radius: 10px;
    border: 2px solid #ddd;
    font-size: 14px;
    background: #fafafa;
    transition: border-color 0.3s, box-shadow 0.3s;
}
.form-group input:focus, .form-group textarea:focus {
    border-color: #6b4f3f;
    box-shadow: 0 0 8px rgba(107,79,63,0.3);
    outline: none;
}
.form-group textarea { resize: vertical; min-height: 100px; }
.error { color: #e74c3c; font-size: 12px; display: none; }

/* ====== Form Button Centered ====== */
.modal button {
    width: 50%;
    max-width: 200px;
    padding: 14px;
    background: linear-gradient(90deg, #6b4f3f, #a67c52);
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: block;
    margin: 20px auto 0;
}
.modal button:hover {
    background: linear-gradient(90deg, #5a4033, #8e6a47);
    transform: translateY(-2px);
}

/* ====== Animations ====== */
@keyframes fadeIn { from {opacity:0;} to {opacity:1;} }

/* ====== Responsive ====== */
@media (max-width: 768px) {
    .contact-info { flex-direction: column; align-items: center; }
    .big-box { padding: 30px 20px; }
    .contact-header h1 { font-size: 28px; }
}
</style>

<div class="center-content">
    <div class="big-box">
        <div class="contact-header">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Reach out with any questions, suggestions, or inquiries about our exquisite furniture collection.</p>
        </div>

        <div class="contact-info">
            <div>
                <h3>📍 Location</h3>
                <p>vijay nagar Street-02, Rajkot, india</p>
            </div>
            <div>
                <h3>📞 Call Us</h3>
                <p>+91 98765 43210</p>
            </div>
            <div>
                <h3>✉ Email</h3>
                <p>chandnifurnitur@gmail.com</p>
            </div>
        </div>

        <button class="attractive-button" onclick="openModal()">📩 Send a Message</button>
    </div>
</div>

<!-- Modal -->
<div id="contactModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>📝 Send Us a Message</h2>
        <form id="contactForm" action="submit_contact.php" method="POST">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
                <div class="error" id="nameError">Please enter your name.</div>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
                <div class="error" id="emailError">Please enter a valid email.</div>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
                <div class="error" id="subjectError">Please enter a subject.</div>
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" required></textarea>
                <div class="error" id="messageError">Please enter your message.</div>
            </div>
            <button type="submit">🚀 Send Message</button>
        </form>
    </div>
</div>

<script>
function openModal() { document.getElementById('contactModal').style.display='block'; }
function closeModal() {
    document.getElementById('contactModal').style.display='none';
    document.getElementById('contactForm').reset();
    document.querySelectorAll('.error').forEach(e=>e.style.display='none');
}

// Form validation
document.getElementById('contactForm').addEventListener('submit', function(e){
    let valid = true;
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const subject = document.getElementById('subject').value.trim();
    const message = document.getElementById('message').value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    document.querySelectorAll('.error').forEach(e=>e.style.display='none');

    if(!name){ document.getElementById('nameError').style.display='block'; valid=false; }
    if(!emailRegex.test(email)){ document.getElementById('emailError').style.display='block'; valid=false; }
    if(!subject){ document.getElementById('subjectError').style.display='block'; valid=false; }
    if(!message){ document.getElementById('messageError').style.display='block'; valid=false; }

    if(!valid) e.preventDefault();
});

// Close modal on outside click
window.onclick = function(event){
    if(event.target === document.getElementById('contactModal')) closeModal();
}
</script>

<?php include "last.php"; ?>
