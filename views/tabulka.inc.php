<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Tomas Vyleta">

    <!-- Icon next to the title -->
    <link rel="shortcut icon" type="image/x-icon" href="../../pic/icons/icon.png"/>
    <title>Valprojekt - Tabulka</title>

    <?php include "./elem/scripts.php"; ?>

    <!-- JavaScript files-->
    <script src="../../js/table-control.js"></script>
    <script src="../../js/table-builder.js"></script>

    <!-- CSS files-->
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
<!-- Navbar -->
<?php include "./elem/navbar.php" ?>

<main>
    <div class="container">
        <div class="row">
            <h1 class="page-title display-4">Tabulka zaměstnanců</h1>
        </div>

        <div style="overflow-x: auto">
            <!-- Table -->
            <table id="employe-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">Personal ID</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Email adress</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Username</th>
                </tr>
                </thead>
                <tbody>
                <!-- Here will JS generate the table with employees from XML file -->
                </tbody>
            </table>
    </div>
            <div>
                <p id="tabulka-generator-link" class="text-right">Generated using <a
                        href="https://www.fakenamegenerator.com" target="_blank">fakenamegenerator.com</a>.</p>
            </div>
            <!-- justify-content-end... we want elements on right -->
            <div class="row justify-content-end">
                <div class="col-auto">
                    <button class="btn btn-success" onclick="addRow()">Přidat řádek</button>
                </div>
                <div class="col-auto">
                    <button class="btn btn-danger" onclick="removeLastRow()">Odebrat řádek</button>
                </div>
            </div>

    </div>
</main>

<!-- Footer, under the main container -->
<?php include "./elem/footer.php" ?>
</body>
</html>