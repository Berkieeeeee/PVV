<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/doneren.css">
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
        <div class="doneren-form">
            <h2>Donatieformulier</h2>
            <form action="doneren.php" method="POST">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required><br>

                <label for="bedrag">Bedrag:</label>
                <input type="number" id="bedrag" name="bedrag" step="0.01" required><br>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required><br>

                <input type="submit" value="Doneren">
            </form>
        </div>

        <div class="leaderboard">
            <table>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pvv";

                // Connectie
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connectie
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["donatieID"]) && isset($_POST["extraBedrag"])) {
                        // donatie door userID
                        $donationID = $_POST["donatieID"];
                        $extraAmount = floatval($_POST["extraBedrag"]);

                        $sql = "UPDATE donations SET amount = amount + ? WHERE id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("di", $extraAmount, $donationID);

                        if ($stmt->execute()) {
                            header("Location: doneren.php"); // Redirect naar zelfde pagina na succevolle donatie
                            exit();
                        } else {
                            echo "Er is een fout opgetreden tijdens het verhogen van uw donatie: " . $conn->error;
                        }
                    } else {
                        // nieuwe donaties
                        $name = $_POST["naam"];
                        $email = $_POST["email"];
                        $amount = floatval($_POST["bedrag"]);

                        $sql = "INSERT INTO donations (name, email, amount) VALUES (?, ?, ?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("ssd", $name, $email, $amount);

                        if ($stmt->execute()) {
                            header("Location: doneren.php"); 
                            exit();
                        } else {
                            echo "Donatie mislukt: " . $conn->error;
                        }
                    }
                }

                $sql = "SELECT name, SUM(amount) AS total_amount FROM donations GROUP BY name ORDER BY total_amount DESC LIMIT 5";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data van elke rij
                    echo "<h2>Top 5 Donaties</h2>";
                    echo "<table>";
                    while ($row = $result->fetch_assoc()) {
                        echo "Naam: " . $row["name"] . " | Totaalbedrag: €" . $row["total_amount"] . "<br>";
                    }
                    echo "</table>";
                } else {
                    echo "Geen donaties gevonden.";
                }

                $conn->close();
                ?>



            </table>
        </div>
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