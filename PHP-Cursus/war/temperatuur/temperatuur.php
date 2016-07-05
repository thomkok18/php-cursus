<?php
function temperatuur($Celsius) {
$Fahrenheit = $Celsius * 1.8 + 32;
echo $Celsius ." Celsius is " .$Fahrenheit. " Fahrenheit";
}

temperatuur(22);
?>