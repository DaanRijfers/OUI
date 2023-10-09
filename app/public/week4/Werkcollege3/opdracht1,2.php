<!DOCTYPE html>
<html>
<head>
    <title>Social Media Pagina</title>
</head>
<body>
<?php
$socialImg = ["facebook.png", "twitter.png", "instagram.png", "linkedin.png"];
$socialName = ["Facebook", "Twitter", "Instagram", "LinkedIn"];
$socialURL = ["https://www.facebook.com", "https://www.twitter.com", "https://www.instagram.com", "https://www.linkedin.com"];

// Loop om sociale media logo's en links weer te geven
for ($i = 0; $i < count($socialImg); $i++) {
    echo '<a href="' . $socialURL[$i] . '" target="_blank"><img src="' . $socialImg[$i] . '" alt="' . $socialName[$i] . '"></a><br>';
}
?>
</body>
</html>
