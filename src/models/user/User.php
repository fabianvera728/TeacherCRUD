<?php

namespace Teacher;

/**
 * Class Teacher
 * @author yourname
 */
class Teacher
{
  private $id;
  private $email;
    private $fullname;
    private $lastname;
    private $photo;
    private $gender;
    private $birthdate;
    private $is_staff;
    private $password;
    /**
   * @param $id,$fullname,$lastnam
   */
  public function __construct($id,$email,$fullname,$lastname,$photo,$gender,$birthdate,$is_staff,$password)
  {
    $this->id = $id;
    $this->email = $email;
        $this->fullname = $fullname;
        $this->lastnam = $lastname;
        $this->photo = $photo;
        $this->gender = $gender;
        $this->birthdate = $birthdate;
        $this->is_staff = $is_staff;
        $this->password = $password;
    }
  
    public function setId($id){
      $this->id = $id;
    }
    
    public function setEmail($email){
      $this->email = $email;
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

    public function setIsStaff($is_staff){
      $this->is_staff = $is_staff;
    }

    public function setPassword($password){
      $this->password = $password;
    }

    public function getId(){
      return $this->id;
    }
    
    public function getEmail(){
      return $this->email;
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
    
    public function getIsStaff(){
      return $this->is_staff;
    }

    public function getPassword()
    {
      return $this->password;
    }
    
  }
?>
