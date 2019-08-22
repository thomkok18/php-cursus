<?php
include("lib/AutoOverzicht.php");
include "lib/Auto.php";

$options = array("--Alle merken--", "Audi", "Ferrari", "Fiat", "Mercedes", "Opel", "Volkswagen");
$minprijs = 0;
$maxprijs = 99999999999999;

if ($_POST) {
    if ($_POST["minprijs"] !== null) {
        $minprijs = $_POST["minprijs"];
    } else {
        $minprijs = 0;
    }

    if ($_POST["maxprijs"] !== null) {
        $maxprijs = $_POST["maxprijs"];
    } else {
        $maxprijs = 99999999999999;
    }
}



$ao = new AutoOverzicht();

$ao->voegAutoToe(new Auto("<h5>Merk: Audi<br>Prijs : € 102500.00</h5>", "img/audi1.png", 102500.00, "Audi"));
$ao->voegAutoToe(new Auto("<h5>Merk: Audi<br>Prijs : € 108250.00</h5>", "img/audi1.png", 108250.00, "Audi"));
$ao->voegAutoToe(new Auto("<h5>Merk: Ferrari<br>Prijs : € 99500.00</h5>", "img/ferrari1.jpg", 99500.00, "Ferrari"));
$ao->voegAutoToe(new Auto("<h5>Merk: Ferrari<br>Prijs : € 122500.00</h5>", "img/ferrari2.jpg", 122500.00, "Ferrari"));
$ao->voegAutoToe(new Auto("<h5>Merk: Ferrari<br>Prijs : € 152500.00</h5>", "img/ferrari3.jpg", 152500.00, "Ferrari"));
$ao->voegAutoToe(new Auto("<h5>Merk: Fiat<br>Prijs : € 10500.00</h5>", "img/fiat1.jpg", 10500.00, "Fiat"));
$ao->voegAutoToe(new Auto("<h5>Merk: Fiat<br>Prijs : € 11500.00</h5>", "img/fiat2.jpg", 11500.00, "Fiat"));
$ao->voegAutoToe(new Auto("<h5>Merk: Mercedes<br>Prijs : € 82500.00</h5>", "img/mercedes1.jpg", 82500.00, "Mercedes"));
$ao->voegAutoToe(new Auto("<h5>Merk: Mercedes<br>Prijs : € 132700.00</h5>", "img/mercedes2.jpg", 132700.00, "Mercedes"));
$ao->voegAutoToe(new Auto("<h5>Merk: Mercedes<br>Prijs : € 87500.00</h5>", "img/mercedes3.jpg", 87500.00, "Mercedes"));
$ao->voegAutoToe(new Auto("<h5>Merk: Mercedes<br>Prijs : € 222650.00</h5>", "img/mercedes4.jpg", 222650.00, "Mercedes"));
$ao->voegAutoToe(new Auto("<h5>Merk: Opel<br>Prijs : € 13500.00</h5>", "img/opel1.jpg", 13500.00, "Opel"));
$ao->voegAutoToe(new Auto("<h5>Merk: Opel<br>Prijs : € 9500.00</h5>", "img/opel2.jpg", 9500.00, "Opel"));
$ao->voegAutoToe(new Auto("<h5>Merk: Opel<br>Prijs : € 19500.00</h5>", "img/opel3.jpg", 19500.00, "Opel"));
$ao->voegAutoToe(new Auto("<h5>Merk: Volkswagen<br>Prijs : € 16340.00</h5>", "img/volkswagen1.png", 16340.00, "Volkswagen"));
$ao->voegAutoToe(new Auto("<h5>Merk: Volkswagen<br>Prijs : € 18340.00</h5>", "img/volkswagen2.jpg", 18340.00, "Volkswagen"));
$ao->voegAutoToe(new Auto("<h5>Merk: Volkswagen<br>Prijs : € 21670.00</h5>", "img/volkswagen3.png", 21670.00, "Volkswagen"));
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- JQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <title>PHP Cursus</title>

    <!-- Modifications -->
    <link rel="stylesheet" href="css/wheely.css">
</head>

<body>
<div>
    <header>
        <div class="container wheely">
        </div>
    </header>
    <div>
        <div class="col-xs-12">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="sel1">Merk:</label>
                    <select id="sel1" class="form-control" id="merk" name="merk">
                        <?php foreach ($options as $option) { ?>
                            <?php if ($_POST) { ?>
                                <option <?php if ($option === $_POST["merk"]) {echo 'selected="selected"';} ?> value="<?php echo $option; ?>"><?php echo $option; ?></option>
                            <?php } else { ?>
                                <option <?php if ($option === "--Alle merken--") {echo 'selected="selected"';} ?> value="<?php echo $option; ?>"><?php echo $option; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="minprijs">Minimale prijs:</label>
                    <input type="text" class="form-control" id="minprijs" name="minprijs" value="<?php echo $minprijs; ?>">
                </div>
                <div class="form-group">
                    <label for="maxprijs">Maximale prijs:</label>
                    <input type="text" class="form-control" id="maxprijs" name="maxprijs" value="<?php if ($maxprijs !== 99999999999999) {echo $maxprijs;} ?>">
                </div>
                <button type="submit" name="knop" value="submit" class="btn btn-default">Submit</button>
            </form>
            <div>
                <div>
                    <?php foreach ($ao->getAutoSoort() as $auto) { ?>
                    <?php if ($_POST) { ?>
                            <?php if ((!$_POST["merk"] && !$_POST["minprijs"] && !$_POST["maxprijs"] || ($_POST["merk"] === $auto->getMerk() || $_POST["merk"] === "--Alle merken--") && $minprijs <= $auto->getPrijs() && $maxprijs >= $auto->getPrijs())) { ?>
                                <div value="<?php echo $auto->getPrijs(); ?>, <?php echo $auto->getMerk(); ?>" class="wheely-img" style="background-image:url('<?php echo $auto->getLink(); ?>')"><?php echo $auto->getAuto(); ?></div>
                            <?php } ?>
                        <?php } else { ?>
                            <div value="<?php echo $auto->getPrijs(); ?>, <?php echo $auto->getMerk(); ?>" class="wheely-img" style="background-image:url('<?php echo $auto->getLink(); ?>')"><?php echo $auto->getAuto(); ?></div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>