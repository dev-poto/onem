<?php

class Offres {
    public $id;
    public $nomPoste;
    public $nomDomaine;
    public $EtudeRealise;
    public $approps;
    public $objectifs;
    public $competences;
    public $typeContrat;
    public $lieuDepot;
    public $dateFinDepot;
    /**
     * 
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $reqOffre = $db->prepare('
            SELECT * FROM offre
            WHERE id = ?
        ');
        $reqOffre->execute([$id]);
        $data = $reqOffre->fetch();

        $this->id = $id;
        $this->nomPoste = $data['nomPoste'];
        $this->nomDomaine = $data['nomDomaine'];
        $this->EtudeRealise = $data['EtudeRealise'];
        $this->approps = $data['approps'];
        $this->objectifs = $data['objectifs'];
        $this->competences = $data['competences'];
        $this->typeContrat = $data['typeContrat'];
        $this->lieuDepot = $data['lieuDepot'];
        $this->dateFinDepot = $data['dateFinDepot'];
    }

    /**
     * @return array
     */
    static function getAllOffres() {

        global $db;

        $reqOffre = $db->prepare('
            SELECT * FROM offre
        ');
        $reqOffre->execute([]);
        return $reqOffre->fetchAll();

    }

    static function newOffre($data) {
        global $db;
        $query = "INSERT INTO offre SET nomPoste=:nomPoste, nomDomaine=:nomDomaine, EtudeRealise=:EtudeRealise, approps=:approps, objectifs=:objectifs, competences=:competences, typeContrat=:typeContrat, lieuDepot=:lieuDepot, dateFinDepot=:dateFinDepot";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":nomPoste", $data['nomPoste']);
        $stmt->bindParam(":nomDomaine", $data['nomDomaine']);
        $stmt->bindParam(":EtudeRealise", $data['EtudeRealise']);
        $stmt->bindParam(":approps", $data['approps']);
        $stmt->bindParam(":objectifs", $data['objectifs']);
        $stmt->bindParam(":competences", $data['competences']);
        $stmt->bindParam(":typeContrat", $data['typeContrat']);
        $stmt->bindParam(":lieuDepot", $data['lieuDepot']);
        $stmt->bindParam(":dateFinDepot", $data['dateFinDepot']);
        
        $stmt->execute();
    }
    static function remove_offre($id) {
        global $db;
        $query = "DELETE FROM offre WHERE id=" . $id;
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    static function update_offre($data, $id) {
        global $db;

        $query = "UPDATE offre SET nomPoste=:nomPoste, nomDomaine=:nomDomaine, EtudeRealise=:EtudeRealise, approps=:approps, objectifs=:objectifs, competences=:competences, typeContrat=:typeContrat, lieuDepot=:lieuDepot, dateFinDepot=:dateFinDepot";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":nomPoste", $data['nomPoste']);
        $stmt->bindParam(":nomDomaine", $data['nomDomaine']);
        $stmt->bindParam(":EtudeRealise", $data['EtudeRealise']);
        $stmt->bindParam(":approps", $data['approps']);
        $stmt->bindParam(":objectifs", $data['objectifs']);
        $stmt->bindParam(":competences", $data['competences']);
        $stmt->bindParam(":typeContrat", $data['typeContrat']);
        $stmt->bindParam(":lieuDepot", $data['lieuDepot']);
        $stmt->bindParam(":dateFinDepot", $data['dateFinDepot']);
        
        $stmt->execute();
    }

}