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
            <h1>Přidání zaměstnance</h1>
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="input-titul">Titul:</label>
                            <input type="text" class="form-control" id="input-titul" name="titul">
                            <small id="titulHelp" class="form-text text-muted">Myšleno titul před jménem. Pokud není, nechte prázdné.</small>
                        </div>
                        <div class="form-group">
                            <label for="input-jmeno">Křestní jméno:</label>
                            <input type="text" class="form-control" id="input-jmeno" name="jmeno" required>
                        </div>
                        <div class="form-group">
                            <label for="input-prijmeni">Příjmení:</label>
                            <input type="text" class="form-control" id="input-prijmeni" name="prijmeni" required>
                        </div>
                        <div class="form-group">
                            <label for="input-cislo">Mobilní číslo:</label>
                            <input type="text" class="form-control" id="input-cislo" name="cislo">
                        </div>
                        <div class="form-group">
                            <label for="input-login">Login:</label>
                            <input type="text" class="form-control" id="input-login" name="login" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Heslo:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="heslo" required>
                        </div>
                        <div class="form-group">
                            <label for="input-email">Emailové adresa:</label>
                            <input type="email" class="form-control" id="input-email" name="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="input-pozice">Pozice:</label>
                            <select class="form-control" id="input-pozice" name="pozice" required>
                                <?php echo $tplData['option-pozice'] ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="input-pravo">Právo:</label>
                            <select class="form-control" id="input-pravo" name="pravo" required>
                                <?php echo $tplData['option-pravo'] ?>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i> Přidat</button>
            </form>

            <h1>Tabulka zaměstnanců</h1>
            <?php
            if (isset($tplData['table'])) {
                echo $tplData['table'];
            }
            ?>
            <script>
                $(document).ready( function () {
                    $('#table-zamestnanci').DataTable();
                } );
            </script>

            <h1>Smazání zaměstnance</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="select-smazat">ID uživatele:</label>
                    <select class="form-control" id="select-smazat" name="smazat" required>
                        <?php echo $tplData['option-smazat'] ?>
                    </select>
                    <small id="smazatHelp" class="form-text text-muted">Zadejte ID zaměstnance, kterého chcete smazat.</small>
                </div>
                <button type="submit" class="btn btn-danger"><i class="fas fa-minus-circle"></i> Smazat</button>
            </form>
    </main>
</div>
</body>
</html>
