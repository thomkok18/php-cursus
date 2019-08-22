<?php
session_start();
$users = array(
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201",
);
if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST["knop"])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]] == $_POST["pwd"]) {
    $_SESSION["user"] = $_POST["login"];
    $message = "Welkom " . $_SESSION["user"];
} else {
    $message = "Inloggen";
}
function boolean($naam, $wachtwoord) {
    if ($naam) {
        $naam = true;
    } else {
        $naam = false;
    }
    if ($wachtwoord) {
        $wachtwoord = true;
    } else {
        $wachtwoord = false;
    }
    return "Email is: ".$naam."<br>"."Password is: ".$wachtwoord;
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="login">Email:</label>
        <input id="login" type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input id="pwd" type="password" name="pwd" value="">
    </div>
    <input type="submit" name="knop" value="Login">
</form>
<p><?php echo boolean($_POST["login"], $_POST["pwd"]); ?></p>
<p><a href="website.php">Website</a></p>
<p><a href="login.php?loguit">Uitloggen</a></p>
</body>
</html>