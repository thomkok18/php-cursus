<?php
include("lib/Programma.php");
include("lib/Liedje.php");

$ditprogramma = new Programma();
$ditprogramma->setNaam("Mijn eerste programma");
$ditprogramma->setOmschrijving("Dit zit er in het album van de Rolling Stones:<br>");

foreach ($ditprogramma->getProgramma() as $programma) {
    echo $programma."<br>";
}

$ditprogramma->voegLiedjeToe(new Liedje("Paint It Black", "Rolling Stones"));
$ditprogramma->voegLiedjeToe(new Liedje("Brown Sugar", "Rolling Stones"));
$ditprogramma->voegLiedjeToe(new Liedje("The Last Time", "Rolling Stones"));

foreach ($ditprogramma->getLiedjes() as $liedje) {
    echo $liedje->getTitel()." - ".$liedje->getArtiest()."<br>";
}
?>