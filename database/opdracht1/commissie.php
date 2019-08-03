<?php
$commissie = $_GET['commissie'];
require_once('classes/Database.php');

$db = new Database();
$aantal = $db->getAantal($commissie);
$result = $db->getLeden($commissie);
$naam = $db->getCommissienaam($commissie);
?>
<!DOCTYPE html>

<head>
    <title><?php echo $naam ?></title>

</head>
<body>

<h1>Commissie: <?php echo $naam ?></h1>
<?php
if (isset($error)) {
    echo "<p>.$con.</p>";
}
if ($aantal == 0) {
    echo "Er zijn geen gegevens gevonden ..!";
} else {
    ?>

    <table>
        <tr>
            <th>Naam</th>
            <th>Telefoon</th>
        </tr>
        <?php
        while ($row = $result->fetch()) {
            ?>
            <tr>
                <td><?php echo $row['naam'] ?></td>
                <td><?php echo $row['telefoonnummer'] ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td>Aantal leden</td>
            <td><?php echo $aantal ?></td>
        </tr>
    </table>
<?php } ?>
<button onclick=window.location.replace("index.php")>Kies een andere commissie</button>
</body>
</html>