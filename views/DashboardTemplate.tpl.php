<?php
// nacteni souboru s funkcemi loginu (prace se session)
include("./models/UserLogin.class.php");
$login = new UserLogin();

if ($login->isUserLoged()) {
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Icon next to the title -->
        <link rel="shortcut icon" type="image/x-icon" href="./pic/icons/icon.png"/>
        <title><?php echo $tplData['title'] ?></title>

        <?php include "./views/elem/head.php"; ?>

    </head>
    <body>

    <?php include "./views/elem/navbar_intra.php"; ?>

    <div class="row">
        <?php include "./views/elem/sidebar_intra.php"; ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        </main>
    </div>
    </body>
    </html>
    <?php
} else {

}
    ?>