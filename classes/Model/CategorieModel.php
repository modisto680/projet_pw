<?php
class CategorieModel {
    private $id;
    private $nom;
    private $codeRaccourci;


    public function __construct($id, $nom, $codeRaccourci) {

        $this->id = $id;

        $this->nom = $nom;

        $this->codeRaccourci= $codeRaccourci;

    }

    public function getId() {

        return $this->id;

    }

    public function getNom() {

        return $this->nom;

    }

    public function getCodeRaccourci() {

        return $this->codeRaccourci;

    }

    public function setId($id) {

        $this->id=$id;

    }

    public function setNom($nom) {

        $this->nom=$nom;

    }

    public function setCodeRaccourci($codeRaccourci) {

        $this->prenom=$codeRaccourci;

    }



    
}

?>

