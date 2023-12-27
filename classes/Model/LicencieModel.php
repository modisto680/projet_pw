<?php

class LicencieModel {
    private $id;
    private $numeroLicence;
    private $nom;
    private $prenom;
    private $contact; // Objet de la classe Contact

    public function __construct($id, $numeroLicence, $nom, $prenom, $contact) {

        $this->id = $id;

        $this->nomLicence = $nomLicence;

        $this->nom = $nom;

        $this->prenom= $prenom;

        $this->contact = $contact;


    }

    public function getId() {

        return $this->id;

    }

    public function getNomLicence() {

        return $this->nomLicence;

    }

    public function getNom() {

        return $this->nom;

    }

    public function getPrenom() {

        return $this->prenom;

    } 

    public function getContactl() {

        return $this->contact;

    }


    public function setId($id) {

        $this->id=$id;

    }

    public function setNom($nom) {

        $this->nom=$nom;

    }

    public function setNomLicence($nomLicence) {

        $this->nom=$nomLicence;

    }

    public function setPrenom($prenom) {

        $this->prenom=$prenom;

    }

    public function setContact($contact) {

        $this->prenom=$contact;

    }

    
}

?>

