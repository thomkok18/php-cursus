<?php
include("lib/AapOverzicht.php");
include "lib/Aap.php";
$ao = new AapOverzicht();
$ao->voegAapToe(new Aap("Baviaan", "https://www.google.nl/search?q=Baviaan&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Guereza", "https://www.google.nl/search?q=Guereza&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Langoer", "https://www.google.nl/search?q=Langoer&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Neusaap", "https://www.google.nl/search?q=Neusaap&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Tamarin", "https://www.google.nl/search?q=Tamarin&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Brulaap", "https://www.google.nl/search?q=Brulaap&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Halfaap", "https://www.google.nl/search?q=Halfaap&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Mandril", "https://www.google.nl/search?q=Mandril&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Oeakari", "https://www.google.nl/search?q=Oeakari&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Faunaap", "https://www.google.nl/search?q=Faunaap&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Hoelman", "https://www.google.nl/search?q=Hoelman&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Meerkat", "https://www.google.nl/search?q=Meerkat&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Oormaki", "https://www.google.nl/search?q=Oormaki&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Gorilla", "https://www.google.nl/search?q=Gorilla&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Kuifaap", "https://www.google.nl/search?q=Kuifaap&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Mensaap", "https://www.google.nl/search?q=Mensaap&amp;tbm=isch"));
$ao->voegAapToe(new Aap("Spinaap", "https://www.google.nl/search?q=Spinaap&amp;tbm=isch"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Monkey Business</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/aap.css">
    <link href="http://fonts.googleapis.com/css?family=Bangers" rel="stylesheet" type="text/css">
</head>
<body>
<img src="img/monkey-business.jpg">
<h1>select your monkey!</h1>
<img src="img/monkey_swings.png">
<?php foreach ($ao->getAapSoort() as $aap) { ?>
<a class="aap" href="<?php echo $aap->getLink(); ?>"><?php echo $aap->getAap()."<br>"; } ?></a>
</body>
</html>