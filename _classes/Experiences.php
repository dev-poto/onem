<?php

class Experiences
{

    public $id;
    public $nom;
    public $demandeur_id;

    /**
     * 
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $req = $db->prepare('
            SELECT * FROM experience
            WHERE id = ?
        ');
        $req->execute([$id]);
        $data = $req->fetch();

        $this->id = $id;
        $this->nom = $data['nom'];
        $this->demandeur_id = $data['demandeur_id'];
    }
    static function demandeur($id) {

        global $db;

        $id = str_secur($id);

        $req = $db->prepare('
            SELECT * FROM experience 
            WHERE demandeur_id = ?
        ');
        $req->execute([$id]);
        return $req->fetchAll();
    }

    /**
     * Envoie password les articles
     * @return array
     */
    static function show() {

        global $db;

        $req = $db->prepare('
            SELECT * FROM experience
        ');
        $req->execute([]);
        return $req->fetchAll();

    }

    static function create($data) {
        global $db;
        $query = "INSERT INTO experience SET nom=:nom, demandeur_id=:demandeur_id";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":nom", $data['nom']);
        $stmt->bindParam(":demandeur_id", $data['demandeur_id']);
        
        $stmt->execute();
    }
    static function delete($id) {
        global $db;
        $query = "DELETE FROM experience WHERE id=" . $id;
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    static function update($data, $id) {
        global $db;

        $query = "UPDATE experience SET nom=:nom, demandeur_id=:demandeur_id WHERE id = $id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":nom", $data['nom']);
        $stmt->bindParam(":demandeur_id", $data['demandeur_id']);
        
        $stmt->execute();
    }

}