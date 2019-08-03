<?php
/**
 * Created by PhpStorm.
 * User: beuningent
 * Date: 22-05-17
 * Time: 09:52
 */
require_once('classes/Database.php');

$db = new Database();
$commissies = $db->getCommissies();

?>
<!DOCTYPE html>
<head>
    <title>Kies commissie</title>
    <script>
        function updateValue(value) {
            window.location.replace("commissie.php?commissie=" + value);
        }
    </script>
</head>
<body>
<h1>Kies een commissie</h1>
<?php
if(isset($error)) {
    echo "<p>.$con.</p>";
}
?>
Commissie: <select name="commissie" onchange="updateValue(this.value)">
    <option value=''>Kies een commissie
        <?php
        while($row = $commissies->fetch()) {
        ?>
    <option value='<?php echo $row['idCommissie'].'\'>'. $row['commissienaam'] ?>'
            </option>
        <?php } ?>
    </select>
    </body>
</html>