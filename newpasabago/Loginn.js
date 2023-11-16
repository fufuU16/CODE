document.addEventListener('DOMContentLoaded', function () {
    // Find the logo element
    var logo = document.querySelector('.logo a');

    // Add a click event listener to the logo
    logo.addEventListener('click', function () {
        // Navigate to the homepage.php page
        window.location.href = 'Homepage.php';
    });

    // Get a reference to the "Sign In" button (with ID "signIn")
    const signUpButton = document.getElementById('signUp');

    signUpButton.addEventListener('click', function () {
        // Redirect to Login.php when the "Sign In" button is clicked
        window.location.href = 'Signup.php';
    });
});
