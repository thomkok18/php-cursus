<?php
$kappersagenda = [
    ["Mevr. Pietersen", "9:15"],
    ["Mevr. Willems", "9:30"],
    ["", "9:45"],
    ["Paul van den Broek", "10:00"],
    ["Karel de Meeuw", "10:15"],
    ["", "10:30"]
];

print("De volgende momenten zijn nog beschikbaar:<ul>");

foreach ($kappersagenda as $afspraak) {
    if ($afspraak[0] == "") {
        print("<li>{$afspraak[0]} om {$afspraak[1]}");
    }
}