<?php

class Entreprises
{

    public $id;
    public $name;
    public $email;  
    public $adresse;
    public $telephone;
    public $BP;
    public $numero_inss;
    public $numero_rccm;
    public $numero_onem;
    public $activite;
    public $created;
    public $password;
    public $viseur_id;


    /**
     * 
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $entreprise = $db->prepare('
            SELECT * FROM entreprise
            WHERE id = ?
        ');
        $entreprise->execute([$id]);
        $data = $entreprise->fetch(PDO::FETCH_ASSOC);

        $this->id = $id;
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->adresse = $data['adresse'];
        $this->telephone = $data['telephone'];
        $this->BP = $data['BP'];
        $this->numero_inss = $data['numero_inss'];
        $this->numero_rccm = $data['numero_rccm'];
        $this->numero_onem = $data['numero_onem'];
        $this->activite = $data['activite'];
        $this->created = $data['created'];
        $this->created = $data['password'];
        $this->viseur_id = $data['viseur_id'];
    }

    static function show() {

        global $db;

        $entreprise = $db->prepare('
            SELECT * FROM entreprise ORDER BY id DESC
        ');
        $entreprise->execute([]);
        return $entreprise->fetchAll(PDO::FETCH_ASSOC);
    }
    static function count() {

        global $db;

        $entreprise = $db->prepare('
            SELECT COUNT(*) FROM entreprise
        ');
        $entreprise->execute([]);
        return $entreprise->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
    }


    static function create($data) {
        
        global $db;
        $query = "INSERT INTO entreprise SET name=:name, email=:email, adresse=:adresse, telephone=:telephone, BP=:BP, numero_inss=:numero_inss, numero_rccm=:numero_rccm, numero_onem=:numero_onem, activite=:activite, created=:created, password=:password, viseur_id=:viseur_id";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":adresse", $data['adresse']);
        $stmt->bindParam(":telephone", $data['telephone']);
        $stmt->bindParam(":BP", $data['BP']);
        $stmt->bindParam(":numero_inss", $data['numero_inss']);
        $stmt->bindParam(":numero_rccm", $data['numero_rccm']);
        $stmt->bindParam(":numero_onem", $data['numero_onem']);
        $stmt->bindParam(":activite", $data['activite']);
        $stmt->bindParam(":created", $data['created']);
        $stmt->bindParam(":password", $data['password']);
        $stmt->bindParam(":viseur_id", $data['viseur_id']);
        
        $stmt->execute();
        
    }
    static function delete($id) {
        global $db;
        $query = "DELETE FROM entreprise WHERE id=" . $id;
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    static function update($data, $id) {
        global $db;

        $query = "UPDATE entreprise SET name=:name, email=:email, adresse=:adresse, telephone=:telephone, BP=:BP, numero_inss=:numero_inss, numero_rccm=:numero_rccm, numero_onem=:numero_onem, activite=:activite, created=:created, password=:password WHERE id = $id";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":adresse", $data['adresse']);
        $stmt->bindParam(":telephone", $data['telephone']);
        $stmt->bindParam(":BP", $data['BP']);
        $stmt->bindParam(":numero_inss", $data['numero_inss']);
        $stmt->bindParam(":numero_rccm", $data['numero_rccm']);
        $stmt->bindParam(":numero_onem", $data['numero_onem']);
        $stmt->bindParam(":activite", $data['activite']);
        $stmt->bindParam(":created", $data['created']);
        $stmt->bindParam(":password", $data['password']);
        
        $stmt->execute();
    }

}