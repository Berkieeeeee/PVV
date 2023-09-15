<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PVV</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="assets/logo.png" alt="Logo">
            </div>
            <ul class="navbar-options">
                <li><a href="home.php">Home</a></li>
                <li><a href="overons.php">Over ons</a></li>
                <li><a href="doneren.php">Doneren</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="navbar-dropdown">
                <select onchange="location = this.value;">
                    <option value="home.php">Home</option>
                    <option value="overons.php">Over ons</option>
                    <option value="doneren.php">Doneren</option>
                    <option value="contact.php">Contact</option>
                </select>
            </div>
        </nav>
    </header>

    <main class="content-container">
        <div class="text-section">
            <h2>Email:</h2>
            <p>Pvv@partij.com</p>
        </div>
        <div class="image-section">
            <img src="assets/image.jpg" alt="Afbeelding">
        </div>
    </main>

    <section class="news-section">
        <div class="news-item">
            <img src="assets/facebook.png" alt="Nieuws 1">
            <div class="news-item-content">
                <h3>Facebook</h3>
            </div>
        </div>
        <div class="news-item">
            <img src="assets/twitter.png" alt="Nieuws 2">
            <div class="news-item-content">
                <h3>Twitter</h3>
            </div>
        </div>
        <div class="news-item">
            <img src="assets/instagram.png" alt="Nieuws 3">
            <div class="news-item-content">
                <h3>Instagram</h3>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="social-media">
            <img src="assets/facebook.png" alt="Facebook">
            <img src="assets/twitter.png" alt="Twitter">
            <img src="assets/instagram.png" alt="Instagram">
        </div>
        <p>&copy; 2023 PVV. Alle rechten voorbehouden.</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>
