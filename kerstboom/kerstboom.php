<?php
$rijen = 9;
$boom = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
for ($rij = 0; $rij < $rijen; $rij++) {
    $boom = substr($boom, 6) . "*";
    echo $boom;
    echo "<br>";
}
?>