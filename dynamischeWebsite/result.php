<?php
$messages = array();

if (strlen($_GET["naam"]) == 0 && strlen($_GET["adres"]) == 0 && strlen($_GET["email"]) == 0 && strlen($_GET["wachtwoord"]) == 0) {
    $messages[] = "Je moet eerst het formulier invullen.";
} else {
    if (strlen($_GET["naam"]) <= 2) {
        $messages[] = "Een naam moet minimaal 2 letters bevatten.";
    }
    if (strlen($_GET["adres"]) <= 4) {
        $messages[] = "Een adres moet minimaal 4 letters bevatten.";
    }
    if (strlen($_GET["email"]) == 0) {
        $messages[] = "Vul je email in";
    }
    if (strlen($_GET["wachtwoord"]) <= 4) {
        $messages[] = "Een wachtwoord moet minimaal 4 tekens bevatten.";
    }
}
if (!count($messages) == 0) {
    $html = "<ul>";
    foreach ($messages as $message) {
        $html .= "<li>" . $message . "</li>";
    }
    $html .= "</ul>";
    include("index.php");
    echo $html;
} else {
    echo "Naam: " . $_GET["naam"] . "<br>";
    echo "Adres: " . $_GET["adres"] . "<br>";
    echo "Email: " . $_GET["email"] . "<br>";
    echo "Wachtwoord: " . $_GET["wachtwoord"] . "<br>";
}
?>