<?php
//////////////////////////////////////////////////////////////////
/////////////////  Globalni nastaveni aplikace ///////////////////
//////////////////////////////////////////////////////////////////

//// Pripojeni k databazi ////

/** Adresa serveru. */
define("DB_SERVER","localhost"); // https://students.kiv.zcu.cz
/** Nazev databaze. */
define("DB_NAME","valprojekt-epo");
/** Uzivatel databaze. */
define("DB_USER","root");
/** Heslo uzivatele databaze */
define("DB_PASS","");


//// Nazvy tabulek v DB ////

/** Tabulky s daty. */
define("TABLE_ODPOVED", "odpoved");
define("TABLE_OTEZKA", "otazka");
define("TABLE_POZICE", "pozice");
define("TABLE_PRIHLASOVACI_PRAVO", "prihlasovaci_pravo");
define("TABLE_VYBAVENI", "vybaveni");
define("TABLE_VYPUJCUJE_SI", "vypujcuje_si");
define("TABLE_ZAMESTNANEC", "zamestnanec");


//// Dostupne stranky webu ////

/** Adresar kontroleru. */
const DIRECTORY_CONTROLLERS = "./controllers";
/** Adresar modelu. */
const DIRECTORY_MODELS = "./models";
/** Adresar sablon */
const DIRECTORY_VIEWS = "./views";

/** Dostupne webove stranky. */
const WEB_PAGES = array(
    "home" => array(
        "file_name" => "HomeController.class.php",
        "class_name" => "HomeController",
        "title" => "Valprojekt",
        "name" => "Home"
    ),
    "login" => array(
        "file_name" => "LoginController.class.php",
        "class_name" => "LoginController",
        "title" => "Valprojekt · Přihlášení",
        "name" => "Add incidents"
    ),
    "sluzby" => array(
        "file_name" => "SluzbyController.class.php",
        "class_name" => "SluzbyController",
        "title" => "Valprojekt · Služby",
        "name" => "incidents Table"
    ),
    "reference" => array(
        "file_name" => "ReferenceController.class.php",
        "class_name" => "ReferenceController",
        "title" => "Valprojekt · Reference",
        "name" => "Calculation methods"
    ),
    "kontakty" => array(
        "file_name" => "KontaktyController.class.php",
        "class_name" => "KontaktyController",
        "title" => "Valprojekt · Kontakty",
        "name" => "Charts"
    ),
    "forum" => array(
        "file_name" => "ForumController.class.php",
        "class_name" => "ForumController",
        "title" => "Valprojekt · Fórum",
        "name" => "Help"
    ),
    "dashboard" => array(
        "file_name" => "DashboardController.class.php",
        "class_name" => "DashboardController",
        "title" => "IntraVal · Dasboard",
        "name" => "Help"
    ),
    "zamestnanci" => array(
        "file_name" => "ZamestnanciController.class.php",
        "class_name" => "ZamestnanciController",
        "title" => "IntraVal · Zaměstnanci",
        "name" => "Help"
    ),
    "odpovedi" => array(
        "file_name" => "OdpovediController.class.php",
        "class_name" => "OdpovediController",
        "title" => "IntraVal · Odpovědi",
        "name" => "Help"
    )
    // TODO - doplnit spravu uzivatelu
);

/** Klic defaultni webove stranky. */
const DEFAULT_WEB_PAGE_KEY = "home";

?>