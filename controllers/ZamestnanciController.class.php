<?php
// nactu rozhrani kontroleru
require_once(DIRECTORY_CONTROLLERS."/IController.interface.php");

/**
 * Ovladac zajistujici vypsani uvodni stranky.
 */
class ZamestnanciController implements IController {

    /** @var DatabaseModel $db  Sprava databaze. */
    private $db;

    /**
     * Inicializace pripojeni k databazi.
     */

    public function __construct() {
        // inicializace prace s DB
        require_once (DIRECTORY_MODELS ."/MyDatabase.class.php");
        $this->db = new MyDatabase();
    }

    /**
     * @param $incidents
     * @return string
     */
    function createTable($incidents) {
        $heads = array("ID", "Titul", "Křestní jméno", "Příjmení", "E-mail", "Mobilní číslo", "Login", "Heslo hash", "Pozice", "Právo");
        $table = "<table id='table-zamestnanci' class=\"table table-striped\"><thead class=\"thead-dark\"><tr>";
        foreach ($heads as $head) {
            $table .= "<th>$head</th>";
        }
        $table .= "</tr></thead>";
        foreach ($incidents as $incident) {
            $table .= "<tr>";
            foreach ($incident as $element) {
                $table .= "<td>$element</td>";
            }
            $table .= "</tr>";
        }
        $table .= "</table>";
        return $table;
    }

    function optionPrava() {
        $array = $this->db->vsechnyPrava();
        $options = "";
        foreach ($array as $row) {
            $options .= "<option value='$row[idPRAVO]'>$row[hodnota]</option>";
        }
        return $options;
    }

    function optionPozice() {
        $array = $this->db->vsechnyPozice();
        $options = "";
        foreach ($array as $row) {
            $options .= "<option value='$row[idPOZICE]'>$row[hodnota]</option>";
        }
        return $options;
    }

    function optionSmazatZamestnance() {
        $array = $this->db->smazatZamestnance();
        $options = "";
        foreach ($array as $row) {
            $options .= "<option value='$row[idZAMESTNANEC]'>#$row[idZAMESTNANEC] - $row[titul] $row[krestni_jmeno] $row[prijmeni]</option>";
        }
        return $options;
    }

    function pridatZamestnance($titul, $krestni_jmeno, $prijmeni, $cislo, $login, $heslo, $email, $pozice, $pravo) {
        $this->db->pridaniZamestnance($titul, $krestni_jmeno, $prijmeni, $cislo, $login, $heslo, $email, $pozice, $pravo);
    }

    /**
     * Vrati obsah uvodni stranky.
     * @param string $pageTitle     Nazev stranky.
     * @return string               Vypis v sablone.
     */
    public function show(string $pageTitle):string {
        //// vsechna data sablony budou globalni
        global $tplData;
        $tplData = [];
        // nazev
        $tplData['title'] = $pageTitle;
        $tplData['table'] = $this->createTable($this->db->vsichniZamestnanci());
        $tplData['option-smazat'] = $this->optionSmazatZamestnance();
        $tplData['option-pravo'] = $this->optionPrava();
        $tplData['option-pozice'] = $this->optionPozice();

        if (isset($_POST['jmeno'])) {
            if (isset($_POST['titul'])) {
                $titul = $_POST['titul'];
            }
            $krestni_jmeno = $_POST['jmeno'];
            $prijmeni = $_POST['prijmeni'];
            $cislo = $_POST['cislo'];
            $login = $_POST['login'];
            $heslo = password_hash($_POST['heslo'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $pozice = $_POST['pozice'];
            $pravo = $_POST['pravo'];
            $this->pridatZamestnance($titul, $krestni_jmeno, $prijmeni, $cislo, $login, $heslo, $email, $pozice, $pravo);
        }

        //// vypsani prislusne sablony
        // zapnu output buffer pro odchyceni vypisu sablony
        ob_start();
        // pripojim sablonu, cimz ji i vykonam
        require(DIRECTORY_VIEWS ."/ZamestnanciTemplate.tpl.php");
        // ziskam obsah output bufferu, tj. vypsanou sablonu
        $obsah = ob_get_clean();

        // vratim sablonu naplnenou daty
        return $obsah;
    }

}

?>