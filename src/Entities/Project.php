<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Project
 *
 * @author Josué
 */
class Project {

    //put your code here
    private $id;
    private $title;
    private $description;
    private $dateCreation;
    private $lastModification;
    private $idClient;

    public function setTitle(String $title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setDateCreation(String $dateCreation) {
        $this->dateCreation = $dateCreation;
    }

    public function getDateCreation() {
        return $this->dateCreation;
    }

    public function setLastModification(String $lastModification) {
        $this->lastModification = $lastModification;
    }

    public function getLasModification() {
        return $this->lastModification;
    }

    public function setIdClient(Integer $id) {
        $this->idClient = $id;
    }

    public function getIdClient() {
        return $this->idClient;
    }

    public function setDescription(String $description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

}
