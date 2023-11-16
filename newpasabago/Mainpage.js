window.addEventListener('scroll', function() {
    var footer = document.getElementById('footer');
    if (window.scrollY > 100) { // Adjust the scroll threshold as needed
      footer.classList.add('show-footer');
    } else {
      footer.classList.remove('show-footer');
    }
  });