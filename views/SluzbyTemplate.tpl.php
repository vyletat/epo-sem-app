<!DOCTYPE html>
<html lang="CS">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Tomas Vyleta">

    <!-- Icon next to the title -->
    <link rel="shortcut icon" type="image/x-icon" href="../../pic/icons/icon.png"/>
    <title>Valprojekt - Sluzby</title>

    <?php include "./elem/scripts.php"; ?>

    <!-- JavaScript files-->
    <script src="../../js/sluzby-control.js"></script>

    <!-- CSS files-->
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
<!-- Navbar -->
<?php include "./elem/navbar.php" ?>

<main>
    <div class="container">

        <div class="row">
            <h1 class="page-title display-4">Nabídka služeb</h1>
        </div>

        <div id="main-popis" class="row m-3">
            <p class="text-left">
                Svým zákazníkům nabízíme komplexní služby - od zpracování investičních záměrů a architektonických
                studií,
                přes jednotlivé stupně projektové dokumentace včetně zajištění legislativního rámce staveb formou
                inženýrské
                činnosti, přes návrhy a projekty interiérů, až po autorské a technické dozory v průběhu realizace
                staveb.
                <br>
                Dále nabízíme poradenské služby v oboru pozemních staveb, statické průzkumy a posudky stavebních
                konstrukcí
                a posudky stavebních konstrukcí z hlediska stavební fyziky.
            </p>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                            Dokumentace staveb
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse-body collapse" aria-labelledby="headingOne">
                    <!-- data-parent="#accordionExample" -->
                    <div class="card-body">
                        <ul>
                            <li>architektura, interiéry, design</li>
                            <li>část dokumentace</li>
                            <li>statika stavebních konstrukcí</li>
                            <li>zdravotní technika - kanalizace, vodovod</li>
                            <li>vnější a vnitřní elektroinstalace</li>
                            <li>měření a regulace</li>
                            <li>projekty kuchyňských provozů</li>
                            <li>komunikace a zpevněné plochy</li>
                            <li>ochrana proti radonu</li>
                        </ul>
                        <p>
                            Další části projektové dokumentace (požární ochrana staveb, technologická zařízení,
                            zdravotní
                            technika - rozvody plynu, vytápění, chlazení, vzduchotechnika, slaboproudé rozvody, sadové
                            úpravy, výkazy výměr a rozpočty atd.) jsou zajištěny formou dlouholeté spolupráce se
                            stabilním
                            týmem zkušených kooperujících firem a osob.
                        </p>
                        <!-- Zdorj: https://www.baustav.cz/cs/portfolio-sluzeb/projektova-cinnost -->
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Zaměření a dokumentace skutečného provedení stavby
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse-body collapse" aria-labelledby="headingTwo">
                    <div class="card-body">
                        <p>Zajišťujeme zaměření skutečného stavu objektů jak před začátkem projektové dokumentace u
                            rekonstrukcí, tak i na konci výstavby pro zpracování dokumentace skutečného provedení
                            stavby,
                            kde jsu zachyceny veškeré změny oproti projektu.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Ostatní služby
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse-body collapse" aria-labelledby="headingThree">
                    <div class="card-body">
                        <p>
                            Zpracujeme všechny stupně projektové dokumentace od studií až po prováděcí projekty,
                            případně
                            zabezpečíme i veškerou inženýrskou činnost nezbytnou pro vydání územních, stavebních i
                            kolaudačních rozhodnutí.</p>
                        <h3>Zaměření a dokumentace skutečného provedení stavby</h3>
                        <p>Zajišťujeme zaměření skutečného stavu objektů jak před začátkem projektové dokumentace u
                            rekonstrukcí, tak i na konci výstavby pro zpracování dokumentace skutečného provedení
                            stavby,
                            kde jsu zachyceny veškeré změny oproti projektu.</p>
                        <h3>Studie</h3>
                        <p>Navrhujeme architektonické studie včetně propočtu nákladů, studie proveditelnosti
                            (feasibility
                            studie) a studie investičních záměrů. Součástí studie může být i vizualizace, což poskytuje
                            představu o budoucím objektu či prostoru.</p>
                        <!-- Zdroj: http://domistav.cz/projektova_cinnost -->
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Zpracování grafických návrhů a vizualizací.
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse-body collapse" aria-labelledby="headingFour">
                    <div class="card-body">
                        <ul>
                            <li>architektonická a dispoziční studie</li>
                            <li>stavebně technické a materiálové řešení stavby</li>
                            <li>zpracování podkladů pro ocenění díla</li>
                            <li>zpracování grafického návrhu</li>
                        </ul>
                        <!-- Zdroj: https://www.instav.net/projektova-cinnost -->
                    </div>
                </div>
            </div>
        </div>

        <div id="seznam-buttons" class="row justify-content-center">
            <div class="col-auto">
                <button class="btn btn-secondary" onclick="showAll()">Rozbalit vše</button>
            </div>
            <div class="col-auto">
                <button class="btn btn-secondary" onclick="hideAll()">Zabalit vše</button>
            </div>
        </div>
    </div>
</main>

<!-- Footer, under the main container -->
    <?php include "./elem/footer.php" ?>
</body>
</html>