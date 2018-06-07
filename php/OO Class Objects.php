<?php
  class Agent {
// Properties
private $AgtFirstName;
private $AgtMiddleInitial;
private $AgtLastName;
private $AgtBusPhone;
private $AgtEmail;
private $AgtPosition;
private $AgencyId;
private $username;
private $password;

// Constructors
public function __construct($agentArray){
    $this->AgtFirstName = $agentArray["AgtFirstName"];
    $this->AgtMiddleInitial = $agentArray["AgtMiddleInitial"];
    $this->AgtLastName = $agentArray["AgtLastName"];
    $this->AgtBusPhone = $agentArray["AgtBusPhone"];
    $this->AgtEmail = $agentArray["AgtEmail"];
    $this->AgtPosition = $agentArray["AgtPosition"];
    $this->AgencyId = $agentArray["AgencyId"];
    $this->username = $agentArray["username"];
    $this->password = $agentArray["password"];
  }

// Getters
public function getAgtFirstName() {
  return $this->AgtFirstName;
}
public function getAgtMiddleInitial() {
  return $this->AgtMiddleInitial;
  }
public function getAgtLastName() {
  return $this->AgtLastName;
  }
public function getAgtBusPhone() {
  return $this->AgtBusPhone;
  }
public function getAgtEmail() {
  return $this->AgtEmail;
  }
public function getAgtPosition() {
  return $this->AgtPosition;
  }
public function getAgencyId() {
  return $this->AgencyId;
  }
public function getusername() {
  return $this->username;
  }
public function getpassword() {
  return $this->password;
  }

// Setters
public function setAgtFirstName($AgtFirstName) {
  $this->AgtFirstName = $AgtFirstName;
  }
public function setAgtMiddleInitial($AgtMiddleInitial) {
  $this->AgtMiddleInitial = $AgtMiddleInitial;
  }
public function setAgtLastName($AgtLastName) {
  $this->AgtLastName = $AgtLastName;
  }
public function setAgtBusPhone($getAgtBusPhone) {
  $this->getAgtBusPhone = $getAgtBusPhone;
  }
public function setAgtEmail($getEmail) {
  $this->getAgtEmail = $getAgtEmail;
  }
public function setAgtPosition($AgtPosition) {
  $this->AgtPosition = $AgtPosition;
  }
public function setAgencyId($getAgencyId) {
  $this->getAgencyId = $getAgencyId;
  }
public function setusername($getusername) {
  $this->getusername = $getusername;
  }
public function setpassword($getpassword) {
  $this->getpassword = $getpassword;
  }
}

?>
