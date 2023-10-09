<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de ingediende gegevens op
    $temperatuur = $_POST["temperatuur"];
    $conversie = $_POST["conversie"];

    // Voer de juiste conversie uit op basis van de keuze
    if ($conversie == "c_naar_f") {
        $resultaat = celsius_naar_fahrenheit($temperatuur);
        $message = "{$temperatuur} graden Celsius is gelijk aan {$resultaat} graden Fahrenheit.";
    } elseif ($conversie == "f_naar_c") {
        $resultaat = fahrenheit_naar_celsius($temperatuur);
        $message = "{$temperatuur} graden Fahrenheit is gelijk aan {$resultaat} graden Celsius.";
    }
}

// Functie om Celsius naar Fahrenheit om te zetten
function celsius_naar_fahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Functie om Fahrenheit naar Celsius om te zetten
function fahrenheit_naar_celsius($fahrenheit) {
    return ($fahrenheit - 32) * 5/9;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatuur Conversie</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
        <div class="header-container">
            <div class="header-logo">
                <a href="#home">Daan.Rijfers</a>
            </div>
            <div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About me</a></li>
                    <li><a href="index.php ">Projects</a></li>
                </ul>
            </div>
        </div>
    </header>
    <h1>Temperatuur Conversie</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="temperatuur">Temperatuur:</label>
        <input type="text" id="temperatuur" name="temperatuur" required>
        <select name="conversie" id="conversie">
            <option value="c_naar_f">Celsius naar Fahrenheit</option>
            <option value="f_naar_c">Fahrenheit naar Celsius</option>
        </select>
        <input type="submit" value="Converteer">
    </form>
    <?php
    if (isset($message)) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>

