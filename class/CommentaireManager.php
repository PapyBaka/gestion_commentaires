<?php

namespace App;

use PDO;

class CommentaireManager
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db) {
        $this->db = $db;
    }

    public function getById($id) {
        $query = $this->db->query("SELECT id, contenu, valide, ko_1 as koFirst, ko_2 as koSecond FROM commentaires WHERE id = '$id'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get(int $numComment) {
        $query = $this->db->query("SELECT id, contenu, valide, ko_1 as koFirst, ko_2 as koSecond FROM commentaires LIMIT 1 OFFSET $numComment");
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getLabels($id) {
        $query = $this->db->query("SELECT label FROM labels WHERE id_comment = '$id'");
        $results = $query->fetchAll();
        foreach($results as $result){
            $labels[] = $result['label'];
        }
        return $labels;
    }

    public function update(Commentaire $commentaire) {
        $query = $this->db->prepare("UPDATE commentaires SET valide = :valide, ko_1 = :koFirst, ko_2 = :koSecond WHERE id = :id");
        $result = $query->execute([
            "valide" => $commentaire->getValide(),
            "id" => $commentaire->getId(),
            "koFirst" => $commentaire->getKoFirst(),
            "koSecond" => $commentaire->getKoSecond()
        ]);
        return $result;
    }

    public function countComments() {
        $query = $this->db->query("SELECT COUNT(*) FROM commentaires");
        $result = $query->fetch(PDO::FETCH_NUM);
        return (int)$result[0];
    }
}