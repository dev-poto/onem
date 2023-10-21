<?php

class Postulers
{

    public $id;
    public $date;
    public $document;
    public $offre_id;
    public $demandeur_id;

    /**
     * 
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $req = $db->prepare('
            SELECT * FROM postuler
            WHERE id = ?
        ');
        $req->execute([$id]);
        $data = $req->fetch();

        $this->id = $id;
        $this->date = $data['date'];
        $this->document = $data['document'];
        $this->offre_id = $data['offre_id'];
        $this->demandeur_id = $data['demandeur_id'];
    }
    static function demandeur($id) {

        global $db;

        $id = str_secur($id);

        $req = $db->prepare('
            SELECT * FROM postuler
            WHERE demandeur_id = ?
        ');
        $req->execute([$id]);
        return $req->fetchAll();
    }
    static function count() {

        global $db;

        $entreprise = $db->prepare('
            SELECT COUNT(*) FROM postuler
        ');
        $entreprise->execute([]);
        return $entreprise->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
    }

    /**
     * Envoie password les articles
     * @return array
     */
    static function upload_file($file) {
        $uploadDir = __DIR__ . 'assets/uploads/';
        $uploadFilename = $uploadDir . basename($file['file']['name']);
        
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilename);
        return basename($file['file']['name']);
    }
    static function show() {

        global $db;

        $req = $db->prepare('
            SELECT * FROM postuler ORDER BY id DESC
        ');
        $req->execute([]);
        return $req->fetchAll();

    }

    static function create($data, $file) {
        global $db;
        $query = "INSERT INTO `postuler` (`document`, `offre_id`, `demandeur_id`) VALUES (:document, :offre_id, :demandeur_id);";
        // $query = "INSERT INTO postuler SET document=:document, offre_id=:offre_id, demandeur_id=:demandeur_id";
        
        $uploadDir = dirname(__DIR__ , 1) . '/assets/uploads/';
        $uploadFilename = $uploadDir . basename($file['file']['name']);
        
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilename);
        $filename = basename($file['file']['name']);

        $stmt = $db->prepare($query);
        $stmt->bindParam(":document", $filename);
        $stmt->bindParam(":offre_id", $data['offre_id']);
        $stmt->bindParam(":demandeur_id", $data['demandeur_id']);
        
        $stmt->execute();
    }
    static function delete($id) {
        global $db;
        $query = "DELETE FROM postuler WHERE id=" . $id;
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    static function update($data, $id) {
        global $db;

        $query = "UPDATE postuler SET date=:date, document=:document, offre_id=:offre_id, demandeur_id=:demandeur_id WHERE id = $id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":date", $data['date']);
        $stmt->bindParam(":document", $data['document']);
        $stmt->bindParam(":offre_id", $data['offre_id']);
        $stmt->bindParam(":demandeur_id", $data['demandeur_id']);
        
        $stmt->execute();
    }

}