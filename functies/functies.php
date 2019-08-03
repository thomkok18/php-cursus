<?php
function temperatuur($Celsius) {
    $Fahrenheit = $Celsius * 1.8 + 32;
    echo $Celsius ." Celsius is " .$Fahrenheit. " Fahrenheit <br><br>";
}
// Voer hier het aantal Celsius in wat je wil omzetten naar Fahrenheit.
temperatuur(22);

function deelbaar($getal) {
        if($getal % 3 == 0){
            $deelbaar = true;
        }
    if ($deelbaar == true){
        echo "Het getal is deelbaar door drie";
    } else {
        echo "Het getal is niet deelbaar door drie";
    }
}

// Voer hier het getal dat je wil controleren of het deelbaar is door 3.
deelbaar(6);

function omdraaien($string) {
    echo "<br><br>".strrev($string);
}

// Voer hier iets in om letters in omgekeerde volgorde te tonen.
omdraaien("Goede morgen! Ik ben Thom");
?>