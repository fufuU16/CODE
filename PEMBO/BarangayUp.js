document.addEventListener("DOMContentLoaded", function() {
    var image1 = document.querySelector('.image1 img');
    var image2 = document.querySelector('.image2 img');
    var image3 = document.querySelector('.image3 img');

    var description = document.querySelector('.description');

    image2.addEventListener('click', function() {
        var tempSrc = image1.src;
        image1.src = image2.src;
        image2.src = tempSrc;

        if (image1.src.includes('slide1.png')) {
            description.innerHTML = "<h2>Pembo Elementary School</h2><p>Barangay Pembo's mission is innovative transformation and global change through adopting modernization and open sourcing, sustainably holistic, morally self-replicating. Highest of good of all solutions founded on comprehensive and modifiable community, models duplicated globally that include sustainable development goals for infrastructure, food, education and arts, peace and order disaster resilience, economics and fulfilled living.</p>";
        } else if (image1.src.includes('slide2.png')) {
            description.innerHTML = "<h2>Barangay Pembo</h2><p>ddddddddddddddddddddddddddss resilience, economics and fulfilled living.</p>";
        } else if (image1.src.includes('slide3.png')) {
            description.innerHTML = "<h2>Osmak</h2><p>asdaasdasssasd</p>";
        }
    });

    image3.addEventListener('click', function() {
        var tempSrc = image1.src;
        image1.src = image3.src;
        image3.src = tempSrc;

        if (image1.src.includes('slide1.png')) {
            description.innerHTML = "<h2>Pembo Elementary School</h2><p>Barangay Pembo's mission is innovative transformation and global change through adopting modernization and open sourcing, sustainably holistic, morally self-replicating. Highest of good of all solutions founded on comprehensive and modifiable community, models duplicated globally that include sustainable development goals for infrastructure, food, education and arts, peace and order disaster resilience, economics and fulfilled living.</p>";
        } else if (image1.src.includes('slide2.png')) {
            description.innerHTML = "<h2>Barangay Pembol</h2><p>ddddddddddddddddddddddddddss resilience, economics and fulfilled living.</p>";
        } else if (image1.src.includes('slide3.png')) {
            description.innerHTML = "<h2>Osmak</h2><p>asdaasdasssasd</p>";
        }
    });
});
