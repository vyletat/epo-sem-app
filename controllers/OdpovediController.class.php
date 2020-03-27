<?php
// nactu rozhrani kontroleru
require_once(DIRECTORY_CONTROLLERS."/IController.interface.php");

/**
 * Ovladac zajistujici vypsani uvodni stranky.
 */
class OdpovediController implements IController {

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

    function optionNadpisyOtazky() {
        $nadpisy = $this->db->nadpisyOtazek();
        $optionNadpisy = "";
        foreach ($nadpisy as $nadpis) {
            $optionNadpisy .= "<option value='$nadpis[idOTAZKA]'>$nadpis[nadpis]</option>";
        }
        return $optionNadpisy;
    }

    function getOtazku($idOtazky) {
        return $this->db->vybranaOtazka($idOtazky);
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
        $tplData['option-otazky'] = $this->optionNadpisyOtazky();

        if (isset($_POST['otazka'])) {
            $otazka = $this->getOtazku($_POST['otazka']);
            $tplData['otazka'] = array('nadpis'=>$otazka[0]['nadpis'], 'tazaci'=>$otazka[0]['jmeno_tazaciho'], 'datum'=>$otazka[0]['datum'], 'obsah'=>$otazka[0]['obsah']);
        }

        //// vypsani prislusne sablony
        // zapnu output buffer pro odchyceni vypisu sablony
        ob_start();
        // pripojim sablonu, cimz ji i vykonam
        require(DIRECTORY_VIEWS ."/OdpovediTemplate.tpl.php");
        // ziskam obsah output bufferu, tj. vypsanou sablonu
        $obsah = ob_get_clean();

        // vratim sablonu naplnenou daty
        return $obsah;
    }

}

?>