<?php
// nactu rozhrani kontroleru
require_once(DIRECTORY_CONTROLLERS."/IController.interface.php");

/**
 * Ovladac zajistujici vypsani uvodni stranky.
 */
class LoginController implements IController {

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

    //TODO osetreni inputu string

    function overitHeslo(string $login, string $heslo) {
        $overeni = false;
        if ($this->db->userLogin($login, $heslo)){
            $overeni = true;
        }
        return $overeni;
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

        if (isset($_POST['action'])) {
            if ($_POST['action'] == 'login') {
                $login = $_POST['login'];
                //$heslo = password_hash($_POST['heslo'], PASSWORD_DEFAULT);
                $oldHeslo = $this->db->getHeslo($login);
                //$hash = password_hash($_POST['heslo'], PASSWORD_DEFAULT);
                //$verify = password_verify($_POST['heslo'], $oldHeslo['heslo']);
                if (password_verify($_POST['heslo'], $oldHeslo['heslo'])) {
                    $tplData['verify'] = true;
                    $tplData['login'] = $login;
                    $tplData['heslo'] = password_hash($_POST['heslo'], PASSWORD_DEFAULT);
                }else {
                    $tplData['verify'] = false;
                }
            }
        }

        //// vypsani prislusne sablony
        // zapnu output buffer pro odchyceni vypisu sablony
        ob_start();
        // pripojim sablonu, cimz ji i vykonam
        require(DIRECTORY_VIEWS ."/LoginTemplate.tpl.php");
        // ziskam obsah output bufferu, tj. vypsanou sablonu
        $obsah = ob_get_clean();

        // vratim sablonu naplnenou daty
        return $obsah;
    }

}

?>