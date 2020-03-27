<?php
//////////////////////////////////////////////////////////////
////////////// Vlastni trida pro praci s databazi ////////////////
//////////////////////////////////////////////////////////////

/**
 * Trida spravujici databazi.
 */
class MyDatabase {

    // PDO objekt pro praci s databazi
    private $pdo;
    // objekt pro spravu session
    //private $mySession;
    // objekt s klicem pro uzivatele ulozeneho v session
    //private $userSessionKey = "current_user";


    public function __construct(){
        // inicialilzuju pripojeni k databazi - informace beru ze settings
        $this->pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS);
        $this->pdo->exec("set names utf8");
        // inicializuju objekt pro praci se session - pouzito pro spravu prihlaseni uzivatele
        // pozn.: v samostatne praci vytvorte pro spravu prihlaseni uzivatele samostatnou tridu.
        //require_once("MySessions.class.php");
        //$this->mySession = new MySession();
    }


    ///////////////////  Obecne funkce  ////////////////////////////////////////////

    /**
     *  Provede dotaz a bud vrati jeho vysledek, nebo vrati null a vypise chybu.
     *
     *  @param string $dotaz        SQL dotaz.
     *  @return PDOStatement        Vysledek dotazu.
     */
    private function executeQuery(string $dotaz){
        // vykonam dotaz
        $res = $this->pdo->query($dotaz);
        if (!$res) {
            $error = $this->pdo->errorInfo();
            echo $error[2];
            return null;
        } else {
            return $res;
        }
    }

    /**
     *  Prevede vysledny objekt dotazu na pole ziskanych dat.
     *
     *  @param PDOStatement $obj  Objekt s vysledky dotazu.
     *  @return array       Pole s vysledky dotazu.
     */
    private function resultObjectToArray(PDOStatement $obj){
        // projdu jednotlive radky tabulky
        /*while($row = $vystup->fetch(PDO::FETCH_ASSOC)){
            $pole[] = $row['login'].'<br>';
        }*/
        // ziskam vsechny radky tabulky jako pole
        return $obj->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Jednoduche cteni z prislusne DB tabulky.
     *
     * @param string $tableName         Nazev tabulky.
     * @param string $whereStatement    Pripadne omezeni na ziskani radek tabulky. Default "".
     * @param string $orderByStatement  Pripadne razeni ziskanych radek tabulky. Default "".
     * @return array                    Vraci pole ziskanych radek tabulky.
     */
    public function selectFromTable(string $tableName, string $whereStatement = "", $orderByStatement = ""):array {
        // slozim dotaz
        $q = "SELECT * FROM ".$tableName
            .(($whereStatement == "") ? "" : " WHERE $whereStatement")
            .(($orderByStatement == "") ? "" : " ORDER BY $orderByStatement");
        // provedu ho a vratim vysledek
        $obj = $this->executeQuery($q);
        $res = $this->resultObjectToArray($obj);
        return $res;
    }

    /**
     * Jednoduchy zapis do prislusne tabulky.
     *
     * @param string $tableName         Nazev tabulky.
     * @param string $insertStatement   Text s nazvy sloupcu pro insert.
     * @param string $insertValues      Text s hodnotami pro prislusne sloupce.
     * @return bool                     Vlozeno v poradku?
     */
    public function insertIntoTable(string $tableName, string $insertStatement, string $insertValues):bool {
        // slozim dotaz
        $q = "INSERT INTO $tableName($insertStatement) VALUES ($insertValues)";
        // provedu ho a vratim vysledek
        $obj = $this->executeQuery($q);
        if($obj == null){
            return false;
        } else {
            return true;
        }
    }

    /**
     * Jednoducha uprava radku databazove tabulky.
     *
     * @param string $tableName                     Nazev tabulky.
     * @param string $updateStatementWithValues     Cela cast updatu s hodnotami.
     * @param string $whereStatement                Cela cast pro WHERE.
     * @return bool                                 Upraveno v poradku?
     */
    public function updateInTable(string $tableName, string $updateStatementWithValues, string $whereStatement):bool {
        // slozim dotaz
        $q = "UPDATE $tableName SET $updateStatementWithValues WHERE $whereStatement";
        // provedu ho a vratim vysledek
        $obj = $this->executeQuery($q);
        if($obj == null){
            return false;
        } else {
            return true;
        }
    }

    /**
     * Dle zadane podminky maze radky v prislusne tabulce.
     *
     * @param string $tableName         Nazev tabulky.
     * @param string $whereStatement    Podminka mazani.
     */
    public function deleteFromTable(string $tableName, string $whereStatement){
        // slozim dotaz
        $q = "DELETE FROM $tableName WHERE $whereStatement";
        // provedu ho a vratim vysledek
        $obj = $this->executeQuery($q);
        if($obj == null){
            return false;
        } else {
            return true;
        }
    }

    ///////////////////  KONEC: Obecne funkce  ////////////////////////////////////////////

    ///////////////////  Konkretni funkce  ////////////////////////////////////////////

    /**
     * Ziskani zaznamu vsech uzivatelu aplikace.
     *
     * @return array    Pole se vsemi uzivateli.
     */
    public function getAllUsers(){
        // ziskam vsechny uzivatele z DB razene dle ID a vratim je
        $users = $this->selectFromTable(TABLE_ZAMESTNANEC, "", "idZAMESTNANEC");
        return $users;
    }


    /**
     * Uprava konkretniho uzivatele v databazi.
     *
     * @param int $idUzivatel   ID upravovaneho uzivatele.
     * @param string $login     Login.
     * @param string $heslo     Heslo.
     * @param string $jmeno     Jmeno.
     * @param string $email     E-mail.
     * @param int $idPravo      ID prava.
     * @return bool             Bylo upraveno?
     */
    public function updateUser(int $idUzivatel, string $login, string $heslo, string $jmeno, string $email, int $idPravo){
        // slozim cast s hodnotami
        $updateStatementWithValues = "login='$login', heslo='$heslo', jmeno='$jmeno', email='$email', id_pravo='$idPravo'";
        // podminka
        $whereStatement = "id_uzivatel=$idUzivatel";
        // provedu update
        return $this->updateInTable(TABLE_UZIVATEL, $updateStatementWithValues, $whereStatement);
    }

    /**
     * Dotaz pro vraceni vsech polozek o zamestnancich
     *
     * @return array
     */
    function vsichniZamestnanci() {
        $query = 'SELECT * FROM `zamestnanec`;';
        $obj = $this->executeQuery($query);
        $res = $this->resultObjectToArray($obj);
        return $res;
    }

    /**
     * Dotaz pro option pro vybrani otazky, na kterou chce zamestnanec odpovedet.
     *
     * @return array
     */
   function nadpisyOtazek() {
       $query = 'SELECT nadpis, idOTAZKA FROM `otazka`;';
       $obj = $this->executeQuery($query);
       $res = $this->resultObjectToArray($obj);
       return $res;
   }

    /**
     * Dotaz pro oprion elemnt na mazani zamestnancu.
     *
     * @return array
     */
   function smazatZamestnance() {
       $query = 'SELECT idZAMESTNANEC, titul, krestni_jmeno, prijmeni FROM `zamestnanec`;';
       $obj = $this->executeQuery($query);
       $res = $this->resultObjectToArray($obj);
       return $res;
   }

    function vsechnyPrava() {
        $query = 'SELECT idPRAVO, hodnota FROM `pravo`;';
        $obj = $this->executeQuery($query);
        $res = $this->resultObjectToArray($obj);
        return $res;
    }

    function vsechnyPozice() {
        $query = 'SELECT idPOZICE, hodnota FROM `pozice`;';
        $obj = $this->executeQuery($query);
        $res = $this->resultObjectToArray($obj);
        return $res;
    }

    function vybranaOtazka(string $idOtazky) {
        $query = 'SELECT * FROM `otazka` WHERE ' . $idOtazky . ' = idOTAZKA;';
        $obj = $this->executeQuery($query);
        $res = $this->resultObjectToArray($obj);
        return $res;
    }

    function pridaniZamestnance($titul, $krestni_jmeno, $prijmeni, $cislo, $login, $heslo, $email, $pozice, $pravo) {
       $tablename = 'zamestnanec';
        $insertStatement = 'idZAMESTNANEC, titul, krestni_jmeno, prijmeni, email, mobilni_cislo, login, heslo, pozice, pravo';
        $insertValues = '101,' . $titul . ',' . $krestni_jmeno . ',' . $prijmeni . ',' . $email . ',' . $cislo . ',' . $login . ',' . $heslo . ',' . $pozice . ',' . $pravo;
        $this->insertIntoTable($tablename, $insertStatement, $insertValues);
    }

    function getHeslo(string $login) {
        $where = "login='$login'";
        $user = $this->selectFromTable(TABLE_ZAMESTNANEC, $where);
        // ziskal jsem uzivatele
        if(count($user)){
            // ziskal - ulozim ho do session
            //$_SESSION[$this->userSessionKey] = $user[0]; // beru prvniho nalezeneho
            return $user[0];
        } else {
            // neziskal jsem uzivatele
            return $user[0];
        }
    }

    ///////////////////  KONEC: Konkretni funkce  ////////////////////////////////////////////

    ///////////////////  Sprava prihlaseni uzivatele  ////////////////////////////////////////

    /**
     * Overi, zda muse byt uzivatel prihlasen a pripadne ho prihlasi.
     *
     * @param string $login     Login uzivatele.
     * @param string $heslo     Heslo uzivatele.
     * @return bool             Byl prihlasen?
     */
    public function userLogin(string $login, string $heslo){
        // ziskam uzivatele z DB - primo overuju login i heslo
        $where = "login='$login' AND heslo='$heslo'";
        $user = $this->selectFromTable(TABLE_ZAMESTNANEC, $where);
        // ziskal jsem uzivatele
        if(count($user)){
            // ziskal - ulozim ho do session
           //$_SESSION[$this->userSessionKey] = $user[0]; // beru prvniho nalezeneho
            return true;
        } else {
            // neziskal jsem uzivatele
            return false;
        }
    }

    /**
     * Odhlasi soucasneho uzivatele.
     */
    public function userLogout(){
        unset($_SESSION[$this->userSessionKey]);
    }

    /**
     * Test, zda je nyni uzivatel prihlasen.
     *
     * @return bool     Je prihlasen?
     */
    public function isUserLogged(){
        return isset($_SESSION[$this->userSessionKey]);
    }

    /**
     * Pokud je uzivatel prihlasen, tak vrati jeho data.
     *
     * @return mixed|null   Data uzivatele nebo null.
     */
    public function getLoggedUserData(){
        if($this->isUserLogged()){
            return $_SESSION[$this->userSessionKey];
        } else {
            return null;
        }
    }

    ///////////////////  KONEC: Sprava prihlaseni uzivatele  ////////////////////////////////////////

}

?>