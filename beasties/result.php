<?php
$messages = array();
$html = '';

if (!isset($_GET["brulaap"]) && !isset($_GET["baviaan"]) && !isset($_GET["orang_oetan"])) {
    $messages[] = "Kies een aap.";
} else {
    if (isset($_GET["brulaap"])) {
        $messages[] = "<img src='img/Brulaap.jpg' height='200px' width='200px' alt='Brulaap'>";
    }
    if (isset($_GET["baviaan"])) {
        $messages[] = "<img src='img/Baviaan.jpg' height='200px' width='200px' alt='Baviaan'>";
    }
    if (isset($_GET["orang_oetan"])) {
        $messages[] = "<img src='img/Oerang-Oetang.jpg' height='200px' width='200px' alt='Oerang-oetang'>";
    }
}
if (!count($messages) == 0) {
    foreach ($messages as $message) {
        $html .= $message;
    }
    include("index.php");
    echo $html;
} else {
    echo "Aap: " . $_GET["brulaap"] . "<br>";
    echo "Aap: " . $_GET["baviaan"] . "<br>";
    echo "Aap: " . $_GET["orang_oetan"] . "<br>";
}
?>