<?php
class User {
    private $bdd;
    public $id;
    public $nom;
    public $credits;
    private $email;
    private $mdp;
    
    public static function inscrire($infos){
        $query = "INSERT INTO " . MyPDO::DB_FLAG . "user (nom,email,mdp,creato) VALUES(?,?,?,now()) ";
        MyPDO::getInstance()->query($query,$infos['nom'],$infos['email'],$infos['mdp']);
        // pour chaque joueur crée on crée un systeme qui sera celui de départ ( id_joueur = id_systeme départ)
        $id_user =  MyPDO::getInstance()->lastInsertId();

        return $id_user;
    }
    
    public static function connecter($infos){
        $query = "select * from " . MyPDO::DB_FLAG . "user where email=? and mdp=? ";
        $ret = MyPDO::getInstance()->query($query,$infos['email'],$infos['mdp']);
        return @$ret[0];
    }
        
    public static function liste(){
        $query = "SELECT *
                FROM " . MyPDO::DB_FLAG . "user ";
        $ret = MyPDO::getInstance()->query($query);
        return $ret;
    }

    public function __construct($id) {
        $this->bdd = MyPDO::getInstance();
        $this->load($id);
    }
    public function load($id) {
        $query = "SELECT *
                FROM " . MyPDO::DB_FLAG . "user
                WHERE id=? ";
        $ret = $this->bdd->query($query, $id);
        $this->nom = $ret[0]->nom;
        $this->id = $ret[0]->id;
        $this->email = $ret[0]->email;
        $this->mdp = $ret[0]->mdp;
        $this->credits = $ret[0]->credits;
    }
    
        public function save(){     
        $query ="UPDATE " . MyPDO::DB_FLAG . "user 
            set
            nom = ?,
            credits = ?,
            email =?,
            mdp =?
            WHERE id =?";
        $ret = $this->bdd->query($query,          
                $this->nom,
                $this->credits,
                $this->email,
                $this->mdp,              
                $this->id
                );
    }
    
    
    
}
