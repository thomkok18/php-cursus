<?php
$zwemmers["De spartelkuikens"] = 25;
$zwemmers["De waterbuffels"] = 32;
$zwemmers["Plonsmderin"] = 11;
$zwemmers["Bommetje"] = 23;
foreach ($zwemmers as $label => $waarde) {
	echo $label . " " . $waarde;
	for($i = 0; $i <= $waarde; $i += 5){		
		if ($i >! $waarde){
			echo '<img src="http://www.hometownheroes.org/wp-content/uploads/2014/02/stickman1.png" border=0>'; 
		}
	}	
	echo "<br>";
}
?>