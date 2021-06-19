<?php

class Usuario{
  
  /**
   * @param $username,$password
   */
  private $username;
  private $password;
  
  public function __construct($username,$password)
  {
        $this->username = $username;
        $this->password = $password;
  }

  /**
   * undocumented function
   *
   * @return void
   */
  public function getUsername(){
    return $this->username;
  }
  

}
?>
