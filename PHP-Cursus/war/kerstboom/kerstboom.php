<?php
$rijen = 9;
$boompje = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	for($i = 0 ; $i < $rijen; $i++) {
	echo "<br>";
        $boompje = substr($boompje, 6) . "*";
	echo $boompje;		
}
?>