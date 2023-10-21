<?php

class Viseurs
{

    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;

    /**
     * 
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $req = $db->prepare('
            SELECT * FROM viseur
            WHERE id = ?
        ');
        $req->execute([$id]);
        $data = $req->fetch(PDO::FETCH_ASSOC);

        $this->id = $id;
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->email = $data['email'];
        $this->password = $data['password'];
    }
    /**
     * Envoie password les articles
     * @return array
     */
    static function show() {

        global $db;

        $req = $db->prepare('
            SELECT * FROM viseur
        ');
        $req->execute([]);
        return $req->fetchAll(PDO::FETCH_ASSOC);

    }

    static function create($data) {
        global $db;
        $query = "INSERT INTO viseur SET firstname=:firstname, lastname=:lastname, email=:email, password=:password";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":firstname", $data['firstname']);
        $stmt->bindParam(":lastname", $data['lastname']);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":password", $data['password']);
        
        $stmt->execute();
    }
    static function delete($id) {
        global $db;
        $query = "DELETE FROM viseur WHERE id=" . $id;
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    static function update($data, $id) {
        global $db;

        $query = "UPDATE viseur SET firstname=:firstname, lastname=:lastname, email=:email, password=:password WHERE id = $id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":firstname", $data['firstname']);
        $stmt->bindParam(":lastname", $data['lastname']);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":password", $data['password']);
        
        $stmt->execute();
    }

}