<?php
echo "De volgende momenten zijn nog beschikbaar:<ul>"; 

$kappersagenda = array("09:45", "10:30");
$afspraak = array("09:15", "09:30", "10:00", "10:15");

foreach($kappersagenda as $afspraak => $tijd){  
echo "<li>{$tijd}</li>";
}

echo "</ul>";