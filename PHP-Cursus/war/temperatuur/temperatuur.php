<?php
$leeftijd = 2;
if ($leeftijd > 65) {
	echo "het kost 5 euro";
} else if ($leeftijd >= 12 && $leeftijd < 65) {
	echo "het kost 5 euro";
} else if ($leeftijd < 3) {
	echo "het is gratis";
} else {
	echo "het kost 10 euro";
}
?>