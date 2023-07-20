<?php

class Demandeurs
{

    public $id;
    public $firstname;
    public $lastname;
    public $sexe;
    public $tel;
    public $email;
    public $login;
    public $password;
    // public $langue;
    // public $poste;
    // public $entreprise;
    // public $debut;
    // public $fin;

    /**
     * 
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $reqDemandeur = $db->prepare('
            SELECT * FROM demandeur
            WHERE id = ?
        ');
        $reqDemandeur->execute([$id]);
        $data = $reqDemandeur->fetch();

        $this->id = $id;
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->sexe = $data['sexe'];
        $this->tel = $data['tel'];
        $this->email = $data['email'];
        $this->login = $data['login'];
        $this->password = $data['password'];
        // $this->langue = $data['langue'];
        // $this->poste = $data['poste'];
        // $this->entreprise = $data['entreprise'];
        // $this->debut = $data['debut'];
        // $this->fin = $data['fin'];
    }

    /**
     * Envoie password les articles
     * @return array
     */
    static function getAllDemandeur() {

        global $db;

        $reqDemandeur = $db->prepare('
            SELECT * FROM demandeur
        ');
        $reqDemandeur->execute([]);
        return $reqDemandeur->fetchAll();

    }

    static function newDemandeur($data) {
        global $db;
        $query = "INSERT INTO demandeur SET firstname=:firstname, lastname=:lastname, sexe=:sexe, tel=:tel, email=:email, login=:login, password=:password";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":firstname", $data['firstname']);
        $stmt->bindParam(":lastname", $data['lastname']);
        $stmt->bindParam(":sexe", $data['sexe']);
        $stmt->bindParam(":tel", $data['tel']);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":login", $data['login']);
        $stmt->bindParam(":password", $data['password']);
        
        $stmt->execute();
    }
    static function remove_demandeur($id) {
        global $db;
        $query = "DELETE FROM demandeur WHERE id=" . $id;
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    static function update_demandeur($data, $id) {
        global $db;

        $query = "UPDATE demandeur SET firstname=:firstname, lastname=:lastname, sexe=:sexe, tel=:tel, email=:email, login=:login, password=:password  WHERE id = $id";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":firstname", $data['firstname']);
        $stmt->bindParam(":lastname", $data['lastname']);
        $stmt->bindParam(":sexe", $data['sexe']);
        $stmt->bindParam(":tel", $data['tel']);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":login", $data['login']);
        $stmt->bindParam(":password", $data['password']);
        
        $stmt->execute();
    }

}