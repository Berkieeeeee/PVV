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
            <h2>Welkom op de PVV-website!</h2>
            <p>De Partij voor de Vrijheid (PVV) is een politieke partij in Nederland die zich inzet voor de belangen van
                onze burgers. Wij streven naar vrijheid, veiligheid, en welvaart voor alle Nederlanders. Onze partij is
                toegewijd aan het vertegenwoordigen van de stemmen en zorgen van het Nederlandse volk.</p>
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
            </div>
        </div>
        <div class="news-item">
            <img src="assets/news2.jpg" alt="Nieuws 2">
            <div class="news-item-content">
                <h3>Nieuwsartikel 2</h3>
            </div>
        </div>
        <div class="news-item">
            <img src="assets/news3.jpg" alt="Nieuws 3">
            <div class="news-item-content">
                <h3>Nieuwsartikel 3</h3>
            </div>
        </div>
    </div>

    <!-- Popup for Donation -->
        <div id="donate-popup" class="donate-popup">
            <div class="donate-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <h2>Ondersteun de PVV</h2>
                <p>Steun ons werk door een donatie te doen.</p>
                <button onclick="redirectToDonate()">Doneren</button>
            </div>
        </div>
        <script>
            // Function to show the donation popup
            function showPopup() {
                document.getElementById('donate-popup').style.display = 'block'; 
            }

            // Function to close the donation popup
            function closePopup() {
                document.getElementById('donate-popup').style.display = 'none';
            }

            // Function to redirect to the donate.php page
            function redirectToDonate() {
                window.location.href = 'doneren.php';
            }

            // Show the popup when the page is loaded
            window.addEventListener('load', showPopup);
        </script>



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