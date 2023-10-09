<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/week5/formulier.css">
    <title>Mijn eerste formulier</title>
</head>
<body>
    <h1>mijn eerste formulier</h1>
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

    </form>
</body>
</html>