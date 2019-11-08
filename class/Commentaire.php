<?php

class Commentaire
{
    private $id;
    private $contenu;
    private $label;
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
        return str_replace($this->getLabel(),"<mark><u>{$this->getLabel()}</u></mark>",$this->getContenu());
    }

    /* GETTER */
    public function getId() {
        return (int)$this->id;
    }

    public function getContenu() {
        return $this->contenu;
    }

    public function getLabel() {
        return $this->label;
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
        $this->id = (int)$id;
    }

    public function setContenu(string $contenu) {
        if (strlen($contenu) > 0) {
            $this->contenu = $contenu;
        }
    }

    public function setLabel(string $label) {
        if (strlen($label) > 0) {
            $this->label = $label;
        }
    }

    public function setValide($valide) {
        $this->valide = (int)$valide;
    }

    
}