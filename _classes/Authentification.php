<?php

class Authentification
{

    public $id;
    public $email;
    public $password;

    function __construct($id, $table) {

        global $db;

        $id = str_secur($id);
        $query = "SELECT * FROM $table WHERE id = $id";
        $req = $db->prepare($query);
        $req->execute([$id]);
        $data = $req->fetch(PDO::FETCH_ASSOC);

        $this->id = $id;
        $this->email = $data['email'];
        $this->password = $data['password'];
    }

    static function login($data, $table) {
        global $db;
        $email = str_secur($data['email']);
        $query = "SELECT * FROM $table WHERE email=\"$email\" LIMIT 2;";
        $stmt = $db->prepare($query);
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!empty($user) && ($user['password'] == $data['password'])) {
            return $user;
        } else {
            return null;
        }
    }

}