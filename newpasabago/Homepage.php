<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage Page</title>
    <link rel="stylesheet" type="text/css" href="Homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #f6f5f7;
    font-family: 'Montserrat', sans-serif,'Inter';
    min-height: 100%;
    margin: 0;
    max-height: 100%;
}

.nav-links {
    position: absolute;
    top: 10px;
    right: 20px; 
    display: flex;
}

.nav-links a {
    color: #387d3d; 
    text-decoration: none;
    margin: 0 10px;
}

.nav-links a:hover {
    text-decoration: underline;
}

.nav-links a:hover::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 100%;
    transform: translate(-50%, -50%);
    width: 10px; 
    height: 10px;
    background-color: #387d3d; 
    border-radius: 50%;
}

.outer-container {
  display: flex;
  justify-content: center; 
  align-items: center;
  padding: 10px; 
  background-color: #fff; 
  max-width: 100%;
  width: 100%;
  margin: 0 auto;
  border-radius: 10px;
  height: 80px;
  margin-top: 50px;
  margin-bottom: 10px;
}
.search {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px; 
  background-color: #fff; 
  max-width: 64%;
  width: 100%;
  margin: 0 auto;
  border-radius: 10px;
  height: 60px;
  margin-top: 20px;
  margin-bottom: 10px;
   
}
@media (max-width: 768px) { /* Adjust the breakpoint (768px) as needed */
  .search {
    max-width: 100%;
  }
}
.search-bar {
  flex: 1;
  padding: 10px;
  border: 1px solid #306532;
  border-radius: 5px 0 0 5px;
  font-size: 14px;
}

.search-button {
  background: #387d3d;
  border: 1px solid #387d3d;
  color: #fff;
  border-radius: 0 5px 5px 0;
  padding: 10px 15px;
  cursor: pointer;
  font-size: 14px;
  margin-left: -20px;
}
.search-button:hover {
background: #306532;
}
.container-sale {
  margin-top: 20px;
  top: 10%;
  position: relative;
  width: 100%;
  max-width: 1152px;
  background:  #ffffff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 80px 10px; 
}
.container {
  margin-top: 20px;
  top: 10%;
  position: relative;
  width: 100%;
  max-width: 1152px;
  background:  #4da153;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 80px 10px; 
}

.limited{
  position: absolute;
width: 186.67px;
height: 60px;
top: 20px; 
    left: 20px;
    font-family: 'Inter', sans-serif;
font-style: normal;
font-weight: 700;
font-size: 40px;
line-height: 150%;

letter-spacing: -0.019em;
display: flex;
align-items: center;
justify-content: center;

color: #F24822;
}
.limited .shape {
  position: absolute;
  width: 176px;
  height: 48px;
  left: 0;
  top: 0;
  background: #FFF500;
  border-radius: 19.2px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.edition {
  top: 15px; 
  left: 200px; 
  position: absolute;
  width: 186.67px;
  height: 60px;
  font-family: 'Inter', sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 150%;
  letter-spacing: -0.019em;
  color: #FFFFFF;
}
.banner {
  width: 100%;
  max-width: 65%;
  height: 150px;
  background-color: #ccc;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}

@media (max-width: 768px) { 
  .banner {
    max-width: 100%;
  }
}

.banner img {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.slide {
  animation: bannerFade 16s infinite; 
  opacity: 0;
  position: absolute;
}

.slide:nth-child(1) {
  animation-delay: 0s;
}

.slide:nth-child(2) {
  animation-delay: 4s;
}

.slide:nth-child(3) {
  animation-delay: 8s;
}

.slide:nth-child(4) {
  animation-delay: 12s;
}

@keyframes bannerFade {
  0%, 25% { opacity: 1; } 
  28%, 53% { opacity: 0; }
  56%, 81% { opacity: 0; }
  84%, 100% { opacity: 1; }
}


.container .products {
  display: grid;
  grid-template-columns: repeat(5, 1fr); 
  gap: 10px;
  width: 100%;
  margin-top: 20px;
  justify-content: center;
  align-items: center;
  justify-content: space-between;
  max-width: 900px; 
  margin: 0 auto;
}
.container .product img {
  max-width: 100%;
  max-height: 100%;
  width: 70px;
  height: 70px;
 
}

.container .product {
  background: #fff;
  flex: 1;

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border: 1px solid #ccc;
  padding: 10px;
  box-sizing: border-box;
  transition: transform 0.2s;
  margin: 0;
  max-width: 200px;
  min-width: 100px;
  border-radius: 10px;
}


.container .product:hover {
  transform: scale(1.1);
}

.container .product-name {
  margin-top: auto;
  text-align: center;
  font-family: 'Inter', sans-serif;
}

.container .product-price {
  margin-top: 10px;
  color: red;
  text-align: center;font-family: 'Inter', sans-serif;
}


.container-sale .flashsale {
  display: grid;
  grid-template-columns: repeat(5, 1fr); 
  gap: 10px;
  width: 100%;
  margin-top: 20px;
  justify-content: center; 
  align-items: center;
  justify-content: space-between;
  max-width: 900px; 
  margin: 0 auto;
}
.container-sale  .product img {
  max-width: 100%;
  max-height: 100%;
  width: 70px;
  height: 70px;
 
}


.container-sale  .product {
  background: #fff;
  flex: 1;

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border: 1px solid #ccc;
  padding: 10px;
  box-sizing: border-box;
  transition: transform 0.2s;
  margin: 0;
  max-width: 200px;
  min-width: 100px;
  border-radius: 10px;
}


.container-sale  .product:hover {
  transform: scale(1.1);
}

.container-sale  .product-name {
  margin-top: auto;
  text-align: center;
  font-family: 'Inter', sans-serif;
}

.container-sale  .product-price {
  margin-top: 10px;
  color: red;
  text-align: center;font-family: 'Inter', sans-serif;
}

.qwe {
  position: absolute;
  top: 10px; 
    left: 15px;
    margin-bottom: 5px;
    
}
.qwe img {
  width: 186.67px;
  height: 100px; 
}

    </style>
</head>
<body>
  
        <div class="nav-links">
            <a href="Mainpage.php" class="Mainpage">Home</a>
            <a href="Login.php" class="login">Login</a>
            <a href="#" class="about-us">About Us</a>
        </div>
    <div class="outer-container">
        <div class="search">
        <div class="logo">
            <a href="Homepage.php">
                <img src="images/Natashalogo.png" alt="natasha">
            </a>
            </div>
            <input type="text" class="search-bar" placeholder="Search...">
            <button class="search-button">Search</button>
        </div> 
    </div>  
    <div class="banner">
        <img src="images/banner1.png" alt="Image 1" class="slide">
        <img src="images/banner2.png" alt="Image 2" class="slide">
        <img src="images/banner3.png" alt="Image 3" class="slide">
        <img src="images/banner4.png" alt="Image 3" class="slide">
      </div>
    <div class="container" id="main">
        <div class="limited">
            
            <div class="shape">
                LIMITED
            </div>
        </div> 
        <div class="edition">
            EDITION
        </div>
     
        <div class="products">
        <div class="product" id="product1" onclick="redirectToProductView('1')">
             <div>
             <img src="images/AZ002.jpg" alt="Product 1">
               </div>
                 <div class="product-name" id="product2-name">Product Name</div>
                  <div class="product-price" id="product2-price">$99.99</div>
              </div>
        
           <div class="product"id="product2"onclick="redirectToProductView('2')">
                <div><img src="images/AZ020.jpg" alt="Product 2"></div>
              
                <div class="product-name"id="product2-name">Another Product</div>
                <div class="product-price"id="product2-price">$89.99</div>
            </div>
        
              <div class="product"id="product3"onclick="redirectToProductView('3')">
                <div><img src="images/Static.jpg" alt="Product 3">
</div>
                <div class="product-name"id="product2-name">Yet Another Product</div>
                <div class="product-price"id="product2-price">$79.99</div>
            </div>
        
           <div class="product"id="product4"onclick="redirectToProductView('4')">
                <div> <img src="images/Reward.jpg" alt="Product 4"></div>
               
                <div class="product-name"id="product2-name">Final Product</div>
                <div class="product-price"id="product2-price">$69.99</div>
            </div>
           <div class="product"id="product5"onclick="redirectToProductView('5')">
                <div><img src="images/AZ036.jpg" alt="Product 5"></div>
                <div class="product-name" id="product2-name">Product Name</div>
                <div class="product-price"id="product2-price">$99.99</div>
            </div>
            
         
    </div></div>
    <div class="container-sale" id="main">
    <div class="flashsale">
        <div class="qwe">
            <div><img src="images/flashsale.png" alt="flasale"></div>
            
        </div> 
        <div class="product"id="product6"onclick="redirectToProductView('6')">
            <div><img src="images/SH330.jpg" alt="Product 6"></div>
            <div class="product-name" id="product2-name">Product Name 2</div>
            <div class="product-price" id="product2-price">$89.99</div>
        </div>
    
        <div class="product"id="product7"onclick="redirectToProductView('7')">
            <div><img src="images/101GD.jpg" alt="Product 7"></div>
            <div class="product-name"id="product2-name">Yet Another Product</div>
            <div class="product-price"id="product2-price">$79.99</div>
        </div>
    
        <div class="product"id="product8"onclick="redirectToProductView('8')">
            <div><img src="images/101NT.jpg" alt="Product 8"></div>
            <div class="product-name"id="product2-name">Final Product</div>
            <div class="product-price"id="product2-price">$69.99</div>
        </div>
      <div class="product"id="product9"onclick="redirectToProductView('9')">
            <div><img src="images/100OR.jpg" alt="Product 9"></div>
            <div class="product-name"id="product2-name">Final Product</div>
            <div class="product-price"id="product2-price">$69.99</div>
        </div>
        <div class="product"id="product10"onclick="redirectToProductView('10')">
            <div><img src="images/104OR.jpg" alt="Product 10"></div>
            <div class="product-name"id="product2-name">Final Product</div>
            <div class="product-price"id="product2-price">$69.99</div>
        </div>
     </div>
</div>



<script src="Homepage.js"></script>
        
</body>
</html>
