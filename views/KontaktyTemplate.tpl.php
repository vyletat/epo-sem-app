<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Tomas Vyleta">

    <!-- Icon next to the title -->
    <link rel="shortcut icon" type="image/x-icon" href="../../pic/icons/icon.png"/>
    <title><?php echo $tplData['title'] ?></title>

    <?php include "./views/elem/head.php"; ?>

    <!-- JavaScript files-->

    <!-- CSS files-->
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
<!-- Navbar -->
<?php include "./views/elem/navbar.php" ?>

<main>
    <div class="container">
        <h1 class="page-title display-4">Kontakty</h1>
        <div id="adress-container">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <h2>
                        <i class="material-icons">house</i>
                        Nazev:
                    </h2>
                </div>
                <div class="col-md-3">
                    <p class="adress">VALPROJEKT, sdružení</p>
                </div>
            </div>
            <hr>
            <div>
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <h2>
                            <i class="material-icons">room</i>
                            Adresa:
                        </h2>
                    </div>
                    <div class="col-md-3">
                        <p class="adress">Partyzánská 93,<br/> Podbořany<br/> 44101</p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <h2>
                            <i class="material-icons">call</i>
                            Telefon:
                        </h2>
                    </div>
                    <div class="col-md-3">
                        <p class="adress">+420 415 215 109</p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <h2>
                            <i class="material-icons">mail</i>
                            E-mail:
                        </h2>
                    </div>
                    <div class="col-md-2">
                        <p class="adress">valprojekt@seznam.cz</p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <h2>
                            <i class="material-icons">info</i>
                            IC:
                        </h2>
                    </div>
                    <div class="col-md-2">
                        <p class="adress">104 39 625</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h2>
                            <i class="material-icons">map</i>
                            Mapa:
                        </h2>
                    </div>
                    <div class="col-auto">
                        <!-- Map -->
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="800" height="600" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=valprojekt&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://usave.co.uk">usave</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- https://www.embedgooglemap.net -->
    </div>
</main>

<!-- Footer, under the main container -->
<?php include "./views/elem/footer.php" ?>
</body>
</html>