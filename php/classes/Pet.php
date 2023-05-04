<?php
class Pet {
    private String $name;
    private int $age;
    private String $ageGroup;
    private String $sex;
    private String $breed;
    private bool $vaccination;
    private bool $deworming;
    private bool $castration;
    
    function __construct($name, $age, $ageGroup, $sex, $breed, $vaccination, $deworming, $castration) {
        $this->name = $name;
        $this->age = $age;
        $this->ageGroup = $ageGroup;
        $this->sex = $sex;
        $this->breed = $breed;
        $this->vaccination = $vaccination;
        $this->deworming = $deworming;
        $this->castration = $castration;
    }

    public function getName() {
        return $this->name;
    } 
    public function getAge() {
        return $this->age;
    }
    public function getAgeGroup() {
        return $this->ageGroup;
    }
    public function getSex() {
        return $this->sex;
    }
    public function getBreed() {
        return $this->breed;
    }
    public function getVaccination() {
        return $this->vaccination;
    }
    public function getDeworming() {
        return $this->deworming;
    }
    public function getCastration() {
        return $this->castration;
    }

    public function setName($name) {
        $this->name = $name;
    } 
    public function setAge($age) {
        $this->age = $age;
    }
    public function setAgeGroup($ageGroup) {
        $this->ageGroup = $ageGroup;
    }
    public function setSex($sex) {
        $this->sex = $sex;
    }
    public function setBreed($breed) {
        $this->breed = $breed;
    }
    public function setVaccination($vaccination) {
        $this->vaccination = $vaccination;
    }
    public function setDeworming($deworming) {
        $this->deworming = $deworming;
    }
    public function setCastration($castration) {
        $this->castration = $castration;
    }

}
