<?php
$zwemmers["De spartelkuikens"] = 25;
$zwemmers["De waterbuffels"] = 32;
$zwemmers["Plonsmderin"] = 11;
$zwemmers["Bommetje"] = 23;

foreach ($zwemmers as $zwemclub => $leden) {
    echo $zwemclub.": ".$leden;
    for ($aantalLeden = 0; $aantalLeden <= $leden; $aantalLeden += 5) {
        if ($aantalLeden >! $leden) {
            echo "<img src=\"http://www.hometownheroes.org/wp-content/uploads/2014/02/stickman1.png\" alt='stickman1' style='border:0;'>";
        }
    }
    echo "<br>";
}
?>