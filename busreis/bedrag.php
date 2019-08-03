<?php
$leeftijd = 0;

if ($leeftijd < 0) {
    $leeftijd = 0;
    echo "Voer een geldige leeftijd in.";
} else if ($leeftijd < 3) {
    echo "Je mag gratis mee met de busreis.";
} else if ($leeftijd >= 12) {
    $berekening = 10;
    $reisKosten = (string)$berekening;
    echo "Je moet &euro;", $reisKosten, " betalen om met de busreis mee te mogen.";
} else if ($leeftijd < 12 || $leeftijd > 65) {
    $berekening = 10;
    $berekening = $berekening / 2;
    $reisKosten = (string)$berekening;
    echo "Je moet &euro;", $reisKosten, " betalen om met de busreis mee te mogen.";
}
?>