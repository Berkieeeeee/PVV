<!DOCTYPE html>
<html>

<head> 
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="navbar">
        <div class="navbar-logo">
            <img src="assets/logo.png" alt="Logo">
        </div>
        <div class="navbar-options">
            <a href="home.php">Home</a>
            <a href="overons.php">Over ons</a>
            <a href="doneren.php">Doneren</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="navbar-dropdown">
            <select onchange="location = this.value;">
                <option value="home.php">Home</option>
                <option value="overons.php">Over ons</option>
                <option value="doneren.php">Doneren</option>
                <option value="contact.php">Contact</option>
            </select>
        </div>
    </div>

    <div class="content-container">
        <div class="text-section">
            <h2>Welkom op onze website!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tortor eget mi condimentum porttitor at id nibh. Etiam venenatis condimentum tellus, sed viverra urna blandit ut. Phasellus consectetur rhoncus tortor, nec pellentesque dolor auctor ac. In consequat lectus eu augue ultricies vulputate. Proin aliquam ipsum vel nulla mattis, at consectetur tortor mattis.</p>
        </div>
        <div class="image-section">
            <img src="assets/image.jpg" alt="Afbeelding">
        </div>
    </div>

    <div class="news-section">
        <div class="news-item">
            <img src="assets/news1.jpg" alt="Nieuws 1">
            <div class="news-item-content">
                <h3>Nieuwsartikel 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tortor eget mi condimentum porttitor at id nibh.</p>
            </div>
        </div>
        <div class="news-item">
            <img src="assets/news2.jpg" alt="Nieuws 2">
            <div class="news-item-content">
                <h3>Nieuwsartikel 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tortor eget mi condimentum porttitor at id nibh.</p>
            </div>
        </div>
        <div class="news-item">
            <img src="assets/news3.jpg" alt="Nieuws 3">
            <div class="news-item-content">
                <h3>Nieuwsartikel 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tortor eget mi condimentum porttitor at id nibh.</p>
            </div>
        </div>
    </div>

    <div class="slider">
        <img src="assets/image1.jpg" alt="Afbeelding 1" class="active">
        <img src="assets/image2.jpg" alt="Afbeelding 2">
        <img src="assets/image3.jpg" alt="Afbeelding 3">
    </div>

    <div class="footer">
        <div class="social-media">
            <img src="assets/facebook.png" alt="Facebook">
            <img src="assets/twitter.png" alt="Twitter">
            <img src="assets/instagram.png" alt="Instagram">
        </div>
        <p>&copy; 2023 PVV. Alle rechten voorbehouden.</p>
    </div>

    <script src="js/script.js"></script>
</body>

</html>