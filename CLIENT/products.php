<?php include "first.php"; ?>

<style>
.collection-title{ text-align:center; font-size:32px; margin:40px 0 20px; color:#6b4f3f; }
.categories{ text-align:center; margin-bottom:30px; }
.categories button{ padding:8px 18px; margin:5px; border:none; background:#eee; border-radius:20px; cursor:pointer; font-weight:500; }
.categories button.active, .categories button:hover{ background:#6b4f3f; color:#fff; }
.products{ max-width:1200px; margin:auto; display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:25px; padding:20px; }
.card{ background:#fff; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.1); cursor:pointer; transition:0.3s; }
.card:hover{ transform:translateY(-5px); }
.card img{ width:100%; height:180px; object-fit:cover; border-radius:10px 10px 0 0; }
.card-body{ padding:15px; }
.card-body h3{ font-size:17px; }
.card-body p{ font-size:13px; color:#555; margin:5px 0; }
.card-body span{ color:#6b4f3f; font-weight:600; }

.modal{ display:none; position:fixed; inset:0; background:rgba(0,0,0,0.6); align-items:center; justify-content:center; z-index:999; }
.modal-content{ background:#fff; width:90%; max-width:800px; border-radius:10px; display:flex; gap:20px; padding:25px; position:relative; flex-wrap:wrap; }
.modal img{ width:45%; border-radius:10px; min-width:200px; }
.modal-details{ flex:1; }
.modal-details h2{ color:#6b4f3f; }
.modal-details p{ margin:10px 0; font-size:14px; }
.modal-details span{ font-size:18px; font-weight:600; color:#6b4f3f; }
.modal-buttons button{ margin-top:15px; padding:10px 16px; border:none; border-radius:5px; cursor:pointer; margin-right:10px; }
.wishlist{ background:#eee; }
.cart{ background:#6b4f3f; color:#fff; }
.close{ position:absolute; top:10px; right:15px; font-size:20px; cursor:pointer; }
</style>

<h1 class="collection-title">Our Furniture Collection</h1>

<div class="categories">
    <button class="active" onclick="filterCategory('all')">All</button>
    <button onclick="filterCategory('Sofa')">Sofa</button>
    <button onclick="filterCategory('Bed')">Bed</button>
    <button onclick="filterCategory('Dining')">Dining</button>
    <button onclick="filterCategory('Wardrobe')">Wardrobe</button>
</div>

<div class="products" id="productContainer"></div>

<div class="modal" id="productModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">✖</span>
        <img id="modalImg">
        <div class="modal-details">
            <h2 id="modalTitle"></h2>
            <p id="modalDesc"></p>
            <span id="modalPrice"></span>
            <div class="modal-buttons">
                <button class="wishlist">♡ Add to Wishlist</button>
                <button class="cart">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<script>
const products = [
    {title:"Luxury Sofa", desc:"Modern living room sofa", price:"₹25,000", img:"p1.jpg", category:"Sofa"},
    {title:"Green Sofa", desc:"Comfortable green sofa", price:"₹22,000", img:"p2.PNG", category:"Sofa"},
    {title:"Classic Sofa", desc:"Stylish classic sofa", price:"₹20,000", img:"p3.PNG", category:"Sofa"},

    {title:"Wood Bed", desc:"Elegant wooden bed", price:"₹35,000", img:"p4.PNG", category:"Bed"},
    {title:"Modern Bed", desc:"Comfortable bed set", price:"₹38,000", img:"p5.PNG", category:"Bed"},
    {title:"Bed Frame", desc:"Simple bed frame", price:"₹30,000", img:"p6.PNG", category:"Bed"},

    {title:"Dining Set", desc:"Wood dining table", price:"₹18,000", img:"p7.PNG", category:"Dining"},
    {title:"Modern Dining", desc:"Contemporary dining set", price:"₹21,000", img:"p8.PNG", category:"Dining"},
    {title:"Round Dining", desc:"Round dining table", price:"₹19,000", img:"p9.PNG", category:"Dining"},

    {title:"Wardrobe Large", desc:"Spacious wardrobe", price:"₹28,000", img:"p10.jpg", category:"Wardrobe"},
    {title:"Wardrobe White", desc:"Modern white wardrobe", price:"₹30,000", img:"p11.jpg", category:"Wardrobe"},
    {title:"Wardrobe Wooden", desc:"Wood grain wardrobe", price:"₹26,000", img:"p12.jpg", category:"Wardrobe"},
];

function renderProducts(filter="all"){
    const container = document.getElementById("productContainer");
    container.innerHTML="";
    const list = filter==="all"? products : products.filter(p=>p.category===filter);
    list.forEach(p=>{
        const card = document.createElement("div");
        card.className="card";
        card.onclick = ()=> openModal(p.title,p.desc,p.price,p.img);
        card.innerHTML=`
            <img src="${p.img}">
            <div class="card-body">
                <h3>${p.title}</h3>
                <p>${p.desc}</p>
                <span>${p.price}</span>
            </div>`;
        container.appendChild(card);
    });
}
renderProducts();

function filterCategory(cat){
    document.querySelectorAll('.categories button').forEach(b=>b.classList.remove('active'));
    event.target.classList.add('active');
    renderProducts(cat);
}

function openModal(t,d,p,i){
    document.getElementById("modalTitle").innerText=t;
    document.getElementById("modalDesc").innerText=d;
    document.getElementById("modalPrice").innerText=p;
    document.getElementById("modalImg").src=i;
    document.getElementById("productModal").style.display="flex";
}
function closeModal(){
    document.getElementById("productModal").style.display="none";
}
</script>

<?php include "last.php"; ?>
