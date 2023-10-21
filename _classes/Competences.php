<?php

class Competences
{

    public $id;
    public $nom;
    public $niveau;
    public $demandeur_id;

    /**
     * 
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $req = $db->prepare('
            SELECT * FROM competence
            WHERE id = ?
        ');
        $req->execute([$id]);
        $data = $req->fetch(PDO::FETCH_ASSOC);

        $this->id = $id;
        $this->nom = $data['nom'];
        $this->niveau = $data['niveau'];
        $this->demandeur_id = $data['demandeur_id'];
    }
    static function demandeur($id) {

        global $db;

        $id = str_secur($id);

        $req = $db->prepare('
            SELECT * FROM competence
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
            SELECT * FROM competence  ORDER BY id DESC
        ');
        $req->execute([]);
        return $req->fetchAll(PDO::FETCH_ASSOC);

    }

    static function create($data) {
        global $db;
        $query = "INSERT INTO competence SET nom=:nom, niveau=:niveau, demandeur_id=:demandeur_id";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":nom", $data['nom']);
        $stmt->bindParam(":niveau", $data['niveau']);
        $stmt->bindParam(":demandeur_id", $data['demandeur_id']);
        
        $stmt->execute();
    }
    static function delete($id) {
        global $db;
        $query = "DELETE FROM competence WHERE id=" . $id;
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    static function update($data, $id) {
        global $db;

        $query = "UPDATE competence SET nom=:nom, niveau=:niveau, demandeur_id=:demandeur_id WHERE id = $id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":nom", $data['nom']);
        $stmt->bindParam(":niveau", $data['niveau']);
        $stmt->bindParam(":demandeur_id", $data['demandeur_id']);
        
        $stmt->execute();
    }

}