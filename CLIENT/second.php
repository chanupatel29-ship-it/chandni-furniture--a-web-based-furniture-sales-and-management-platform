<style>
/* FEATURED FURNITURE */
.featured-section{
    padding:70px 60px;
    background:#f7f7f7;
}

.featured-section h2{
    text-align:center;
    font-size:32px;
    color:#6b4f3f;
    margin-bottom:10px;
}

.featured-section p{
    text-align:center;
    color:#666;
    margin-bottom:45px;
}

/* Grid */
.featured-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(260px,1fr));
    gap:30px;
}

/* Card */
.furniture-card{
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    transition:0.3s;
}

.furniture-card:hover{
    transform:translateY(-8px);
}

/* Image */
.furniture-card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

/* Info */
.furniture-info{
    padding:18px;
}

.furniture-info h3{
    font-size:18px;
    margin-bottom:6px;
}

.furniture-info p{
    font-size:14px;
    color:#666;
    margin-bottom:10px;
}

/* Price & Button */
.price-row{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.price{
    color:#6b4f3f;
    font-weight:600;
    font-size:16px;
}

.view-btn{
    text-decoration:none;
    background:#d4a373;
    color:#000;
    padding:7px 14px;
    border-radius:5px;
    font-size:14px;
    font-weight:500;
}

.view-btn:hover{
    background:#c08b5c;
}
</style>

<section class="featured-section">
    <h2>Featured Furniture</h2>
    <p>Handpicked designs that bring comfort and elegance to your home</p>

    <div class="featured-grid">

        <!-- Item 1 -->
        <div class="furniture-card">
            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc">
            <div class="furniture-info">
                <h3>Luxury Sofa</h3>
                <p>Premium comfort with modern design</p>
                <div class="price-row">
                    <span class="price">₹25,000</span>
                    <a href="products.php" class="view-btn">View</a>
                </div>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="furniture-card">
            <img src="https://images.unsplash.com/photo-1598300057090-3f5a45f05c17">
            <div class="furniture-info">
                <h3>Wooden Bed</h3>
                <p>Strong teak wood finishing</p>
                <div class="price-row">
                    <span class="price">₹32,000</span>
                    <a href="products.php" class="view-btn">View</a>
                </div>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="furniture-card">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c">
            <div class="furniture-info">
                <h3>Dining Table</h3>
                <p>6 seater family dining set</p>
                <div class="price-row">
                    <span class="price">₹18,000</span>
                    <a href="products.php" class="view-btn">View</a>
                </div>
            </div>
        </div>

        <!-- Item 4 -->
        <div class="furniture-card">
            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7">
            <div class="furniture-info">
                <h3>Office Chair</h3>
                <p>Ergonomic & stylish</p>
                <div class="price-row">
                    <span class="price">₹9,500</span>
                    <a href="products.php" class="view-btn">View</a>
                </div>
            </div>
        </div>

    </div>
</section>
