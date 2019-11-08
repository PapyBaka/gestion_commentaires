<?php

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
        $query = $this->db->query("SELECT id, contenu, valide, ko_1 as koFirst, ko_2 as koSecond FROM commentaires WHERE id = ".$id);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
/* 
    public function changeValidateStatus(Commentaire $commentaire): bool {
        $valide = $commentaire->getValide() == true ? 0 : 1;
        $query = $this->db->prepare("UPDATE commentaires SET valide = :valide WHERE id = :id");
        $result = $query->execute([
            "valide" => $valide,
            "id" => $commentaire->getId()
        ]);
        return $result;
    } */

    public function update(Commentaire $commentaire) {
        $query = $this->db->prepare("UPDATE commentaires SET valide = :valide WHERE id = :id");
        $result = $query->execute([
            "valide" => $commentaire->getValide(),
            "id" => $commentaire->getId()
        ]);
        return $result;
    }

    public function countComments() {
        $query = $this->db->query("SELECT COUNT(*) FROM commentaires");
        $result = $query->fetch(PDO::FETCH_NUM);
        return (int)$result[0];
    }
}