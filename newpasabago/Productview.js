

function swapImages(event) {
    const mainImage = document.getElementById('mainImage');
    const clickedImage = event.target;

    // Check if the clicked element is an image and has a src attribute
    if (clickedImage.tagName === 'IMG' && clickedImage.src) {
        // Swap the src and alt attributes between the main image and the clicked additional image
        const tempSrc = mainImage.src;
        mainImage.src = clickedImage.src;
        clickedImage.src = tempSrc;

        const tempAlt = mainImage.alt;
        mainImage.alt = clickedImage.alt;
        clickedImage.alt = tempAlt;
    }
}

function displayStock() {
    // Get the selected size and its associated stock
    const sizeSelect = document.getElementById('size');
    const selectedSize = sizeSelect.value;
    const stock = sizeSelect.options[sizeSelect.selectedIndex].getAttribute('data-stock');

    // Display the stock information in the span and div elements
    const stockValue = document.getElementById('stockValue');
    stockValue.textContent = stock;

    // If you want to hide or show the "Stock" div based on the stock value
    const stockDiv = document.getElementById('Stock');
    stockDiv.style.display = parseInt(stock) > 0 ? 'block' : 'none';
}
  
