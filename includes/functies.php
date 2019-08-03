<!doctype html>
<html>
<body>
        <section><b>
                Dit is de section. Dit staat in functies.php.
        </section></b>
<?php
echo "<br>";
$programeren = array("Java", "HTML", "PHP", "JSP", "Javascript");
foreach ($programeren as $talen) {
    echo $talen . "<br>";
}
?>
</body>
</html>