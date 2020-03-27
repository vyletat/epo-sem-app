<?php 

/**
 *  Objekt pro spravu prihlaseni uzivatelu.
 *  @author Michal Nykl
 */
class UserLogin{
    /** @var MySession $ses  Objekt pro praci se session. */
    private $ses;
    /** @var string name  Klic pro ulozeni jmena do session. */
    private $name = "login";
    /** @var string $date  Klic pro ulozeni datumu do session. */
    private $date = "date";
    /** @var string  $password  Klic pro ulozeni hesla do session.*/
    private $password = "password";
    
    /**
     *  Pri vytvoreni objektu zahaji session.
     */
    public function __construct(){
        include_once("MySessions.class.php");
        // inicializuju objekt sessny
        $this->ses = new MySession();
    }
    
    /**
     *  Otestuje, zda je uzivatel prihlasen.
     *  @return boolean
     */
    public function isUserLoged(){
        return $this->ses->isSessionSet($this->name);
    }
    
    /**
     *  Nastavi do session jmeno uzivatele a datum prihlaseni.
     *  @param string $userName Jmeno uzivatele.
     */
    public function login($userName){
        $this->ses->addSession($this->name, $userName); // jmeno
        $this->ses->addSession($this->date, date("d. m. Y, G:m:s"));
    }
    
    /**
     *  Odhlasi uzivatele.
     */
    public function logout(){
        $this->ses->removeSession($this->name);
        $this->ses->removeSession($this->date);
    }
    
    /**
     *  Vrati informace o uzivateli.
     *  @return string  Informace o uzivateli.
     */
    public function getUserInfo(){
        $name = $this->ses->readSession($this->name);
        return "Uživatel: $name";
    }
    
}
?>