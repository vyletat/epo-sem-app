<!DOCTYPE html>
<html lang="cs">
<!-- Head of document -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icon next to the title -->
    <link rel="shortcut icon" type="image/x-icon" href="./pic/icons/icon.png"/>
    <title><?php echo $tplData['title'] ?></title>

    <?php include "./views/elem/head.php"; ?>

    <!-- JavaScript files-->
    <script src="js/login.js"></script>
    <!-- CSS files-->
    <link rel="stylesheet" href="css/style.css">
</head>

<!-- Body of document -->
<body>

<!-- Navbar -->
<?php include "./views/elem/navbar.php" ?>

<main>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Vítejte na stránkách Valprojektu</h1>
            <p>Jsme společnost zabývající se projektovou činností.</p>
        </div>
    </div>

    <!-- Main container -->
    <div class="container">

        <div>
            <div class="com-md-12">
                <!-- Carousel -->
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="carousel-slide mx-auto d-block" src="./pic/carou/meeting-2284501_960_720.jpg"
                                 alt="Dum">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Vše na míru</h5>
                                <p>Každý detail s Vámi prodiskutujeme tváří v tvář.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="carousel-slide mx-auto d-block" src="./pic/carou/architecture-1836070_960_720.jpg"
                                 alt="Lide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Stavby snů</h5>
                                <p>Nejste ničím omezeni, sdělte nám sen a my ho splníme.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="carousel-slide mx-auto d-block" src="./pic/carou/building-plan-354233_960_720.jpg"
                                 alt="Vykres">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Plánek</h5>
                                <p>Navrhujeme plánky se vším všudy a vše zařídíme.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#carousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Předešlý</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Další</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Decription of Valprojekt -->
        <div id="main-popis" class="row m-5">
            <div class="col-md-12">
                <p class="text-center">Pellentesque ipsum. Mauris metus. Maecenas fermentum, sem in pharetra
                    pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Nulla pulvinar eleifend
                    sem. Aliquam erat volutpat. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Mauris
                    metus. Suspendisse sagittis ultrices augue. Duis condimentum augue id magna semper rutrum. Curabitur
                    vitae diam non enim vestibulum interdum. Nullam faucibus mi quis velit. Cras elementum. Donec vitae
                    arcu. Aliquam erat volutpat. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede.
                    Pellentesque sapien. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                    architecto beatae vitae dicta sunt explicabo. Nunc auctor. Sed elit dui, pellentesque a, faucibus
                    vel, interdum nec, diam. Duis pulvinar.</p>
            </div>
        </div>
        <!-- https://www.lipsum.com -->

        <!-- Horizontal rule -->
        <hr>

        <!-- First row of columns -->
        <div class="row">
            <div class="col-md-6">
                <h2>Kontakty</h2>
                <p>Zde najdete všechny potřebné informace, aby jste nás mohli kontaktovat a také jak se knám dostat.</p>
                <p>
                    <a class="btn btn-info" href="view/public/kontakty.php" role="button">Přejít na stránku &raquo;</a>
                </p>
            </div>
            <div class="col-md-6">
                <h2>Reference</h2>
                <p>Chceme, aby jste věděli, že jste v dobrých rukách, proto se můžete podívat na odborníky v oboru.</p>
                <p>
                    <a class="btn btn-info" href="view/public/reference.php" role="button">Přejít na stránku &raquo;</a>
                </p>
            </div>
            <div class="col-md-6">
                <h2>Nabidka sluzeb</h2>
                <p>Zde najdete seznam našich nabízených služeb.</p>
                <p>
                    <a class="btn btn-info" href="view/public/sluzby.php" role="button">Přejít na stránku &raquo;</a>
                </p>
            </div>
            <div class="col-md-6">
                <h2>Album</h2>
                <p>Fotoalbum s projekty, které si můžete prohlednout, aby jste věděli, že odvádíme skvělou práci.</p>
                <p>
                    <a class="btn btn-info" href="view/album-1.php" role="button">Přejít na stránku &raquo;</a>
                </p>
            </div>
        </div>
        <!-- Second row of columns -->
        <div class="row">
            <div class="col-md-6">
                <h2>Tabulka</h2>
                <p>Interní přehled všech našich zaměstnanců, ulehčující správu a získání většího přehledu.</p>
                <p>
                    <a class="btn btn-info" href="view/public/tabulka.php" role="button">Přejít na stránku &raquo;</a>
                </p>
            </div>
            <div class="col-md-6">
                <h2>Dotazy</h2>
                <p>Zde je prostor pro vaše dotazy a naše odpovědi.</p>
                <p>
                    <a class="btn btn-info" href="view/public/forum.php" role="button">Přejít na stránku &raquo;</a>
                </p>
            </div>
        </div>
    </div> <!-- End of main container -->
</main>

<!-- Footer, under the main container -->
<?php include "./views/elem/footer.php" ?>

</body>
</html>


