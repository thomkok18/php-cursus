<?php
include_once('lib/config.php');
include_once('lib/Product.php');
include_once('lib/Saldo.php');
include_once('lib/Winkelwagen.php');

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    return;
}

$product = new Product();
$producten = $product->getProducten();
$pagina = 'winkelwagen';
$winkelwagen = new Winkelwagen();
$winkelwagens = $winkelwagen->getWinkelwagens();
$saldo = new Saldo();
$geldvoorraad = $saldo->getSaldoVoorraad();
$id = $_GET['id'];
$subtotaal = 0;
$verzendkosten = 0.95;
$totaal = 0.00;
$aantalProducten = 0;
$idproduct = $winkelwagen->getIdproductByIdgebruiker($id);
$aantal = $winkelwagen->getProductAantal();
$productPrijs = $product->getProductPrijs();
$productVoorraad = $product->getProductVoorraad();
$productTitel = $product->getProductTitel();
$productUrl = $product->getProductUrl();

for ($i = 0; $i < sizeof($idproduct); $i++) {
    $aantalProducten = $aantalProducten + $aantal[$i]->aantal;
    $subtotaal = $subtotaal + $productPrijs[$i]->prijs * $aantal[$i]->aantal;
    $totaal = $subtotaal + $verzendkosten;
}

if (isset($_POST['betalen'])) {
    if ($totaal === $subtotaal + $verzendkosten) {
        foreach ($geldvoorraad as $key => $geld) {
            $saldo->updateSaldo(1, $geld->getSaldo(), number_format($totaal, 2), 'verkocht');
        }
        for ($i = 0; $i < sizeof($idproduct); $i++) {
            $product->updateVoorraad($idproduct[$i], $productVoorraad[$i]->voorraad, $aantal[$i]->aantal, 'verkocht');
        }
        $winkelwagen->deleteWinkelwagen($_SESSION['login']['idgebruiker']);
        header('Location:winkelwagen.php?id=' . $_SESSION['login']['idgebruiker']);
    }
}

if (isset($_GET['deleteProduct']) && !empty($_GET['deleteProduct'])) {
    $winkelwagen->deleteProduct($_GET['deleteProduct'], $_SESSION['login']['idgebruiker']);
    header('Location: winkelwagen.php?id=' . $_SESSION['login']['idgebruiker']);
}

if (isset($_GET['idproduct']) && !empty($_GET['idproduct']) && isset($_GET['productAantal']) && $_GET['productAantal'] != null) {
    $winkelwagen->updateAantal($_GET['idproduct'], $_SESSION['login']['idgebruiker'], $_GET['productAantal']);
    if ($_GET['productAantal'] == 0) {
        $winkelwagen->deleteProduct($_GET['idproduct'], $_SESSION['login']['idgebruiker']);
    }
    header('Location: winkelwagen.php?id=' . $_SESSION['login']['idgebruiker']);
}

include("layout/header.php");
?>

    <div id="winkelwagenContainer" class="container-fluid">
        <div class="page-header">
            <h1>Winkel</h1>
        </div>

        <form class="form-horizontal" method="post">
            <div>
                <?php if ($winkelwagen->getProductByIdgebruiker($id) != null) {
                    for ($i = 0; $i < sizeof($idproduct); $i++) {
                        $item = $idproduct[$i];
                        $voorraad = $productVoorraad[$i]->voorraad;
                        $aantalProd = $aantal[$i]->aantal;
                        $prijs = $productPrijs[$i]->prijs;
                        $titel = $productTitel[$i]->titel;
                        $url = $productUrl[$i]->urlfoto;
                        ?>
                        <div id="productDiv" class="col-lg-12">
                            <div class="col-lg-5">
                                <div id="productAfbeeldingDiv" class="col-xs-12 col-sm-6">
                                    <img id="productAfbeelding" src="<?= $url; ?>" alt="Product">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <h3 class="tabelWinkel"><?= $titel; ?></h3>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div id="deleteProductDiv" class="col-xs-12 col-sm-2 col-md-1">
                                    <a class="text-danger" href="winkelwagen.php?deleteProduct=<?= $item; ?>">Verwijderen</a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="col-xs-12 col-sm-6">
                                    <select id="voorraadSelectbox<?= $item; ?>" class="tabelWinkel voorraad col-xs-12" name="aantal" onchange="refresh(<?= $_SESSION['login']['idgebruiker']; ?>, <?= $item; ?>);">
                                        <?php for ($prod = 0; $prod <= $voorraad; $prod++) { ?>
                                            <option <?php if ($prod == $aantalProd) { ?> selected <?php } ?> ><?= $prod; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div id="prijsDiv" class="col-xs-12 col-sm-6">
                                    <b id="prijs"><?= htmlspecialchars('€ ' . number_format($prijs * $aantalProd, 2)); ?></b>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-lg-12">
                        <div id="subtotaalDiv" class="col-xs-12">
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <b class="col-xs-12 col-sm-6">Subtotaal</b>
                                <b class="col-xs-12 col-sm-6"><?= htmlspecialchars('€ ' . number_format($subtotaal, 2)); ?></b>
                            </div>
                        </div>
                        <div id="verzendskostenDiv" class="col-xs-12">
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <p id="verzendskosten" class="col-xs-12 col-sm-6">Verzendskosten</p>
                                <p id="verzending" class="col-xs-12 col-sm-6"><?= htmlspecialchars('€ ' . number_format($verzendkosten, 2)); ?></p>
                            </div>
                        </div>
                        <div id="totaalDiv" class="col-xs-12">
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <b class="col-xs-12 col-sm-6">Totaal</b>
                                <b class="col-xs-12 col-sm-6"><?= htmlspecialchars('€ ' . number_format($totaal, 2)); ?></b>
                            </div>
                        </div>
                        <div id="betalenDiv" class="col-xs-12">
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <button id="betalen" class="col-xs-12 btn" type="submit" name="betalen">Betalen</button>
                            </div>
                        </div>
                    </div>

                    <?php } else { ?>
                    <p id="winkelwagenLeeg"><?= htmlspecialchars('Er zijn nog geen producten in het winkelwagentje.'); ?></p>
                <?php } ?>

            </div>
        </form>
    </div>
    <script>
        function refresh(idgebruiker, idproduct) {
            var e = document.getElementById("voorraadSelectbox" + idproduct);
            var productAantal = e.options[e.selectedIndex].value;
            window.location.href = "winkelwagen.php?id=" + idgebruiker + "&idproduct=" + idproduct + "&productAantal=" + productAantal;
        }
    </script>

<?php
include("layout/footer.php");
?>