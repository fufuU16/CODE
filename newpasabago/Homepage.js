function redirectToProductView(productId) {
    // Assuming you have a product view page named "productview.php"
    // You can replace this with the actual URL of your product view page
    var productViewUrl = "Productview.php";

    // Append the product ID as a query parameter to the URL
    var urlWithQueryParam = productViewUrl + "?productId=1" + productId;

    // Redirect to the product view page
    window.location.href = urlWithQueryParam;
}
