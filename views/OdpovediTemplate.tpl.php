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
            <h1>Odpověď na otázku</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="input-otazka">Otázka:</label>
                    <select class="form-control" id="input-otazka" name="otazka">
                        <?php echo $tplData['option-otazky'] ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-eye"></i> Zobrazit</button>
            </form>

            <?php
            if (isset($tplData['otazka'])) {
                ?>
                <div class="otazka">
                    <h4><?php echo $tplData['otazka']['nadpis']; ?></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <p><b>Tazaci: </b></p>
                                <p><?php echo $tplData['otazka']['tazaci']; ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p><b>Datum: </b></p>
                                <p><?php echo $tplData['otazka']['datum']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p><b>Obsah: </b></p>
                        <p><?php echo $tplData['otazka']['obsah']; ?></p>
                    </div>
                </div>
                <?php
            }
            ?>

            <h1>Odpověď</h1>
            <form>
                <div class="form-group">
                    <textarea class="form-control" id="input-odpoved" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-reply"></i> Odpovědět</button>
            </form>
    </main>
</div>
</body>
</html>
