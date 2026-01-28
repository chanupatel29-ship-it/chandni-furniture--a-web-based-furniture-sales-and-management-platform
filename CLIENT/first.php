<?php
// Start session (for profile / logout)
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Chandni Furniture</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    color: #333;
}

/* Header */
.main-header {
    background: linear-gradient(135deg, #6b4f3f 0%, #8b5a3c 100%);
    padding: 20px 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    position: relative;
    overflow: hidden;
}

.main-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
    pointer-events: none;
}

/* Logo */
.logo {
    font-size: 28px;
    font-weight: 700;
    color: #fff;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
}

.logo::before {
    content: '\f4d5'; /* Font Awesome furniture icon */
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    margin-right: 10px;
    color: #d4a373;
}

/* Navigation */
.navbar {
    display: flex;
    align-items: center;
    position: relative;
    z-index: 1;
}

.navbar a {
    color: #fff;
    text-decoration: none;
    margin-left: 30px;
    font-size: 16px;
    font-weight: 500;
    position: relative;
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
    padding: 8px 12px;
    border-radius: 6px;
}

/* Icons for links */
.navbar a[href="home.php"]::before { content: '\f015'; margin-right: 8px; } /* Home */
.navbar a[href="contact.php"]::before { content: '\f095'; margin-right: 8px; } /* Phone */
.navbar a[href="inquiries.php"]::before { content: '\f0e0'; margin-right: 8px; } /* Envelope */
.navbar a[href="profile.php"]::before { content: '\f007'; margin-right: 8px; } /* User */
.navbar a[href="products.php"]::before { content: '\f1b3'; margin-right: 8px; } /* Cube */

/* Hover effect */
.navbar a:hover {
    background: rgba(212, 163, 115, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Logout button style */
.logout {
    background: linear-gradient(135deg, #d4a373 0%, #c08b5c 100%);
    color: #000 !important;
    padding: 10px 18px;
    border-radius: 8px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

.logout:hover {
    background: linear-gradient(135deg, #c08b5c 0%, #a67c52 100%);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}

.logout::before {
    content: '\f2f5'; /* Sign out icon */
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    margin-right: 8px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .main-header {
        padding: 15px 20px;
        flex-direction: column;
        align-items: flex-start;
    }
    
    .logo {
        margin-bottom: 15px;
        font-size: 24px;
    }
    
    .navbar {
        flex-wrap: wrap;
        width: 100%;
    }
    
    .navbar a {
        margin-left: 0;
        margin-right: 15px;
        margin-bottom: 10px;
    }
    
    .logout {
        margin-top: 10px;
    }
}
</style>
</head>

<body>

<header class="main-header">
    <div class="logo">Chandni Furniture</div>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="contact.php">Contact</a>
        <a href="inquiries.php">Inquiries</a>
        <a href="profile.php">Profile</a>
        <a href="products.php">Products</a>
        <a href="logout.php" class="logout">Logout</a>
    </nav>
</header>

<!-- Rest of your page content goes here -->

</body>
</html>


