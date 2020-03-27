<?php
// nacteni souboru s funkcemi loginu (prace se session)
include("./models/UserLogin.class.php");
$login = new UserLogin();
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Tomas Vyleta">

    <!-- Icon next to the title -->
    <link rel="shortcut icon" type="image/x-icon" href="./pic/icons/icon.png"/>
    <title><?php echo $tplData['title']; ?></title>

    <?php include "./views/elem/head.php"; ?>

    <!-- JavaScript files-->
    <script src="./js/login.js"></script>
    <!-- CSS files-->
    <link rel="stylesheet" href="./css/signin.css">
</head>
<?php
// zpracovani odeslanych formularu - mam akci?
/*if (isset($_POST["action"])) {
    $user = $_POST["user"];
    $login->login($user["login"]);
    echo '<script>window.open("http://localhost/epo-sem-app/?page=dashboard","_self")</script>';
}*/
/*echo $tplData['heslo'] . '<br>';
echo $tplData['hash'] . '<br>';
echo $tplData['database'] . '<br>';
echo $tplData['verify'] . '<br>';*/
echo $tplData['overeni'];
if (isset($tplData['verify'])) {
    if ($tplData['verify']) {
        echo "kokot1";
        $login->login($tplData["login"]);
        echo '<script>window.open("http://localhost/epo-sem-app/?page=dashboard","_self")</script>';
    } else {
        echo "kokot2";
    }
}

///////////// PRO NEPRIHLASENE UZIVATELE ///////////////
if (!$login->isUserLoged()) {
    ?>
    <body>
    <form class="form-signin" method="POST">
        <img class="mb-4" src="./pic/icons/valprojekt.jpg" alt="Valprojekt logo"
             style="width:300px; max-height:100%">
        <h1 class="h3 mb-3 font-weight-normal">Prosím, přihlašte se</h1>

        <label for="inputNickname" class="sr-only">Nickname</label>
        <input name="login" type="text" id="inputNickname" class="form-control" placeholder="Login" required
               autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input name="heslo" type="password" id="inputPassword" class="form-control" placeholder="Heslo"
               required>

        <div class="checkbox mb-3">
            <label>
                <input name="user[remember-me]" type="checkbox" value="remember-me"> Zapamatovat
            </label>

        </div>
        <button name="action" value="login" class="btn btn-lg btn-primary btn-block" type="submit" onclick="validateLogin()">
            Přihlásit
        </button>
        <div class="alert alert-danger fade hide" role="alert">
            Spatne zadany uzivatel nebo heslo.
        </div>
    </form>
    </body>
    <?php
} else {
    ///////////// PRO PRIHLASENE UZIVATELE ///////////////
    echo '<script>window.open("http://localhost/epo-sem-app/?page=dashboard","_self")</script>';
}
?>
</html>
