<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage Page</title>
    <link rel="stylesheet" type="text/css" href="Productview.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>
<body>
  
        <div class="nav-links">
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
    
    <div class="product-container">

    <div class="product-image" id="product1">
    <img src="images/AZ002.jpg" alt="Product 1" id="mainImage">
    <div class="additional-images" onclick="swapImages(event)">
        <img src="images/AZ002_info.jpg" alt="Product 1 - Side 1">
        <!-- Add more images as needed -->
    </div>
</div>
        <div class="product-details">
            <div class="product-name" id="product2-name">Product Name</div>
            <div class="Description" id="Description1">Brand:#### ##### #### ####</div>
                    <div class="product-rating">
                         <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
            <div class="product-price" id="product2-price">$99.99</div>
            <!-- Add other product details as needed -->
            <label for="size">Select Size:</label>
<select id="size" name="size" onchange="displayStock()">
 
    <option value="small" data-stock="10">Small</option>
    <option value="medium" data-stock="15">Medium</option>
    <option value="large" data-stock="20">Large</option>
    <option value="xl" data-stock="5">XL</option>
</select>

<div class="Stock" id="Stock">Available stock: <span id="stockValue">0</span> units</div>
<div class="button-container" >
        <span class="Quantity" id="Quantity">Quantity:</span>  
        <button class="button" onclick="decrementCounter()">-</button>
        <span id="counter">1</span>
        <button class="button" onclick="incrementCounter()">+</button>
    </div>
                 <!-- Buy Now button -->
<button id="buyNow" class="action-button" onclick="buyNow()">Buy Now</button>

<!-- Add to Cart button -->
<button id="addToCart" class="action-button" onclick="addToCart()">Add to Cart</button>

    
   

        </div>
    </div>
</div>


    <div class="container-sale" id="main">
    <div class="flashsale">
      
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
<script>
       var counterValue = 1;
var minValue = 1;
var maxValue = 10;

function incrementCounter() {
    if (counterValue < maxValue) {
        counterValue++;
        updateCounter();
    }
}

function decrementCounter() {
    if (counterValue > minValue) {
        counterValue--;
        updateCounter();
    }
}

function updateCounter() {
    document.getElementById('counter').innerText = counterValue;
}
    </script>

<script src="Productview.js" defer></script>

</body>
</html>
