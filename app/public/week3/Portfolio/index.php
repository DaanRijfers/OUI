<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Portfolio</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php    
include 'header.php';
?>
    <div class="home" id="home">
        <div class="container">
            <div class="home-content">
                <p>Welkom op mijn online portfolio, een digitale reis door mijn wereld van creativiteit en prestaties. 
                    ik nodig je uit om meer over mij te ontdekken en een kijkje te nemen in enkele van mijn meest opmerkelijke projecten.</p>
             </div>
             <img src="Afbeeldingen/download.jfif" alt="Programmeur">
        </div>
    </div>
    <div class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-title">
                    <h3>About me</h3>
                </div>
                <div class="about-me-text">
                    <p>Ik ben Daan, een gepassioneerde en nieuwsgierige ziel op een reis genaamd het leven. Ik geloof dat elke dag een kans biedt om te leren, te groeien en te genieten van de prachtige reis die we maken.
    
                        <p>Mijn passie ligt in ICT. Of ik nu bezig ben met sporten of gamen, ik ben altijd op zoek naar manieren om mijn creativiteit en vaardigheden te verbeteren.</p>
                        
                        <p>In mijn vrije tijd kun je me vaak vinden bij de sportschool of bij vrienden.</p>
                        
                        <p>Een van mijn diepste overtuigingen is dat het delen van kennis en ervaringen de wereld een betere plek maakt.</p>
                        
                        <p>Ik ben  vriendelijk, nieuwsgierig, gedreven van aard en geloof sterk in [een persoonlijke overtuiging of levensmotto, bijvoorbeeld: het streven naar positieve verandering]. Ik sta altijd open voor nieuwe kansen en ontmoetingen, en ik kijk er naar uit om nieuwe vrienden te maken, samen te werken aan inspirerende projecten</p>
                </div>
            </div>   
        </div>
    </div>
    <div class="projects" id="projects">
        <div class="container">
            <div class="projects-content">
                <h3>Projects</h3>
                <p>Dit zijn alle projecten die ik heb gedaan</p>
                <div class="projects-grid">
                    <div class="grid-item">
                        <div class="placeholder-image">
                            <img src="Afbeeldingen/illustrations_light blue_coffee.png" alt="Oui-afbeelding">
                        </div>
                        <div class="project-text">
                            <a href="">Project OUI</a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="placeholder-image">
                            <img src="Afbeeldingen/illustrations_light blue_coffee.png" alt="Oui-afbeelding">
                        </div>
                        <div class="project-text">
                            <a href="">Project OUI</a>
                        </div>
                    </div>
                    <!-- Voeg meer projecten toe op dezelfde manier -->
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="container">
            <div class="contact-content">
                <h3>Contact</h3>
                <form action="index.php" method="post" name="formulier">
                    <div>
                        <label for="voornaam">Voornaam:</label>
                        <input type="text" id="voornaam" name="voornaam" placeholder="Voer hier je voornaam" required>
                    </div>
                    <div>
                        <label for="achternaam">Achternaam:</label>
                        <input type="text" id="achternaam" name="achternaam">
                    </div>
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div>
                        <label for="bericht">Bericht:</label>
                        <textarea id="bericht" name="bericht"></textarea>
                    </div>
                    <div>
                        <label for="password">Wachtwoord:</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <div>
                        <label for="soort">Contact type</label>
                        <select>
                            <option value="email">E-mail</option>
                            <option value="telefoon">Telefoon</option>
                            <option value="post">Post</option>
                        </select>
                    </div>
                    <div>
                        <label>Wil je de nieuwsbrief?</label>
                        <input type="radio" id="ja" name="nieuwsbrief" value="ja">
                        <input type="radio" id="nee" name="nieuwsbrief" value="nee">
                    </div>
                    <div>
                        <input type="submit" value="Verstuur">
                    </div>
                        </div>
                    </div>
                </div>
    <div id="opdracht" class="opdracht">
        <div class="opdracht-container">
            <div class="opdracht-content">
                <div class="opdracht-text">
                <?php 
                    function vergelijkMet100($getal) {
                        if ($getal === null) {
                            echo "Geen getal opgegeven.";
                        }
                        elseif ($getal > 100) {
                            echo "$getal is hoger dan 100.";
                        }
                        elseif ($getal < 100) {
                            echo "$getal is later dan 100.";
                        }
                        else {
                            echo "$getal is gelijk aan 100.";
                        }
                    }

                    $getal = 128;
                    $resultaat = vergelijkMet100($getal);
                    echo "<p>$resultaat </p>";
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>
    <footer id="footer" class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-text">
                    <h3>&copy;Daan Rijfers</h3>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
