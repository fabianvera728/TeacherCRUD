<?php

namespace Teacher;

/**
 * Class Teacher
 * @author yourname
 */
class Teacher
{
    private $id;
    private $fullname;
    private $lastname;
    private $photo;
    private $gender;
    private $birthdate;
    private $contracttype;

  public function __construct($id,$fullname,$lastname,$photo,$gender,$birthdate,$contracttype)
  {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->lastname = $lastname;
        $this->photo = $photo;
        $this->gender =$gender;
        $this->birthdate = $birthdate;
        $this->contracttype = $contracttype;
    }

    public static function holamundo(){
      echo "holamundo";
    }

    public function setId($id){
      $this->id = $id;
    }
    
    public function setFullName($fullname){
      $this->fullname = $fullname;
    }

    public function setLastName($lastname){
      $this->lastname = $lastname;
    }

    public function setPhoto($photo){
      $this->photo = $photo;
    }

    public function setGender($gender){
      $this->gender = $gender;
    }

    public function setBirthdate($birthdate){
      $this->birthdate = $birthdate;
    }

    public function setContractType($contracttype){
      $this->contracttype = $contracttype;
    }

    public function getId(){
      return $this->id;
    }
    
    public function getFullName(){
      return $this->fullname;
    }

    public function getLastName(){
      return $this->lastname;
    }

    public function getPhoto(){
      return $this->photo;
    }

    public function getGender(){
      return $this->gender;
    }
    
    public function getBirthdate(){
      return $this->birthdate;
    }
    
    public function getContractType(){
      return $this->contracttype;
    }

  }
?>
