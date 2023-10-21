<?php

class Diplomes
{

    public $id;
    public $date_obtention;
    public $demain;
    public $reference;
    public $demandeur_id;

    /**
     * 
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $req = $db->prepare('
            SELECT * FROM diplome
            WHERE id = ?
        ');
        $req->execute([$id]);
        $data = $req->fetch();

        $this->id = $id;
        $this->date_obtention = $data['date_obtention'];
        $this->demain = $data['demain'];
        $this->reference = $data['reference'];
        $this->demandeur_id = $data['demandeur_id'];
    }
    static function demandeur($id) {

        global $db;

        $id = str_secur($id);

        $req = $db->prepare('
            SELECT * FROM diplome
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
            SELECT * FROM diplome
        ');
        $req->execute([]);
        return $req->fetchAll();

    }

    static function create($data) {
        global $db;
        $query = "INSERT INTO diplome SET date_obtention=:date_obtention, demain=:demain, reference=:reference, demandeur_id=:demandeur_id";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":date_obtention", $data['date_obtention']);
        $stmt->bindParam(":demain", $data['demain']);
        $stmt->bindParam(":reference", $data['reference']);
        $stmt->bindParam(":demandeur_id", $data['demandeur_id']);
        
        $stmt->execute();
    }
    static function delete($id) {
        global $db;
        $query = "DELETE FROM diplome WHERE id=" . $id;
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    static function update($data, $id) {
        global $db;

        $query = "UPDATE diplome SET date_obtention=:date_obtention, demain=:demain, reference=:reference, demandeur_id=:demandeur_id WHERE id = $id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":date_obtention", $data['date_obtention']);
        $stmt->bindParam(":demain", $data['demain']);
        $stmt->bindParam(":reference", $data['reference']);
        $stmt->bindParam(":demandeur_id", $data['demandeur_id']);
        
        $stmt->execute();
    }

}