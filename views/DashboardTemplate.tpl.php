<?php
// nacteni souboru s funkcemi loginu (prace se session)
include("../../php/UserLogin.class.php");
$login = new UserLogin;
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Webové stránky sdružení Valprojekt.">
    <meta name="keywords" content="Valprojekt,projektová činnost,plány,budovy,stavby,vyměření">
    <meta name="author" content="Tomas Vyleta">

    <!-- Icon next to the title -->
    <link rel="shortcut icon" type="image/x-icon" href="../../pic/icons/icon.png"/>
    <title>Valprojekt - dashboard</title>

    //nacteni vsech spolecnych linku a script
    <?php include "./elem/scripts.php"; ?>

    <!-- JavaScript files-->
    <script src="../../js/dashboard.js"></script>

    <!-- CSS files-->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
</head>
<?php
// zpracovani odeslanych formularu - mam akci?
if (isset($_POST["logout"])) {
    $login->logout();
    echo '<script>window.open(index2.index2.phpf")</script>';
    //TODO kdyz je session null, tak nejste prihlasen, else odhlaseni probehlo uspesne s time cekanim a pak presmerovat
}

if ($login->isUserLoged()) {
    ?>
    <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Valprojekt</a>
        <ul class="navbar-nav px-3">
            <li id="login-name" class="nav-item">
                <!-- Vypise login usera -->
                <?php echo $login->getUserInfo(); ?>
            </li>
            <li class="nav-item text-nowrap">
                <form method="POST">
                    <button name="logout" type="submit">Sign out</button>
                </form>
            </li>
        </ul>
    </nav>
    <main>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i class="fas fa-home"></i>
                                    Přehled<span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-users"></i>
                                    Zaměstnanci
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-toolbox"></i>
                                    Zařízení
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-project-diagram"></i>
                                    Projekty
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="far fa-comment-alt"></i>
                                    Komentáře
                                </a>
                            </li>
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Saved reports</span>
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>

                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <h1>Main page</h1>
                    <hr>
                </main>
            </div>
        </div>
    </main>
    </body>
    <?php
} else {
?>
<body>
    <p>Nejste přihlášen.</p>
</body>
<?php
}
?>
</html>