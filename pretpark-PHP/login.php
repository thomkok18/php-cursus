<?php
include_once("lib/config.php");
include_once("lib/Gebruiker.php");

if (isset($_POST['login'])) {
    extract($_POST);
    $gebruiker = new Gebruiker();
    if ($gebruiker->checkLogin($_POST['password'], $_POST['login'])) {
        session_start();
        header('Location: index.php');
    } else {
        $message[] = "Uw login gegevens kloppen niet";
    }
}

$pagina = 'login';

include("layout/header.php");
?>

<?php if (isset($_POST['login'])) { ?>
    <div class="alert alert-danger" role="alert">
        <strong><?= htmlspecialchars($message[0]); ?></strong>
    </div>
<?php } ?>

    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            <h1>Inloggen</h1>
        </div>
    </div>
    <form id="loginForm" class="form-horizontal" action="#" method="post">
        <div class="form-group">
            <label for="login" class="col-sm-2 control-label">Login</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" name="login" required placeholder="Login">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Verstuur</button>
            </div>
        </div>
    </form>

<?php include("layout/footer.php"); ?>