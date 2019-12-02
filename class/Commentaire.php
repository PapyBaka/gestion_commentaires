<?php

namespace App;

class Commentaire
{
    private $id;
    private $contenu;
    private $labels;
    private $valide;
    private $koFirst;
    private $koSecond;

    public function __construct($data)
    {
        foreach($data as $key => $value) {
            $method = "set".ucfirst($key);
            if (method_exists($this,$method)) {
                $this->$method($value);
            }
        }
    }

    public function formatedComment(): string {
        $contenu = $this->getContenu();
        foreach($this->labels as $label) {
            $contenu = str_replace($label,"<mark><u>{$label}</u></mark>",$contenu);
        }
        return $contenu;
    }

    /* GETTER */
    public function getId() {
        return $this->id;
    }

    public function getContenu() {
        return $this->contenu;
    }

    public function getLabels() {
        return $this->labels;
    }

    public function getValide() {
        return $this->valide;
    }

    public function getKoFirst() {
        return $this->koFirst;
    }

    public function getKoSecond() {
        return $this->koSecond;
    }

    public function getKoDetailLabels() {
        return $this->ko_detail_labels;
    }

    /* SETTER */
    public function setId($id) {
        $this->id = $id;
    }

    public function setContenu(string $contenu) {
        if (strlen($contenu) > 0) {
            $this->contenu = $contenu;
        }
    }

    public function setLabels(?array $labels = []) {
        foreach ($labels as $label){
            if (strlen($label) > 0) {
                $this->labels[] = $label;
            }
        }
    }

    public function setValide($valide) {
        $this->valide = (int)$valide;
    }

    public function setKoFirst($koFirst) {
        $this->koFirst = (int)$koFirst;
    }

    public function setKoSecond($koSecond) {
        $this->koSecond = (int)$koSecond;
    }
    
}