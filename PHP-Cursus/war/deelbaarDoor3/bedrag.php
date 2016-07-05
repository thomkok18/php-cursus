<?php
function Deelbaar($a) {
	for($i = 3; $i <= $a; $i += 3) {
		if($a == $i){
			$b = true;
			return $b;
		}		
	}
}

if (Deelbaar(6)){
	echo "Het getal is deelbaar door drie";
} else {
	echo "Het getal is niet deelbaar door drie";
}