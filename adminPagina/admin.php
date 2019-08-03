<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator") {
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op het admingedeelte van de website</h1>";
    echo "<p><a href='login.php'>Loginpagina</a></p>";
} else {
    header('location: login.php');
}
?>