<?php

function passwordValidate(){
  // Client side array (Login Screen Username/Password Input)
  $loginArray = array();
  foreach($_POST as $key=>$value){
    if($key != "submit"){
      $loginArray[$key] = $value;
    }
    else{}
  }

  $loginUsernameInput = $loginArray["Username"];
  $loginPasswordInput = $loginArray["Password"];
  print_r($loginUsernameInput);
  print_r($loginPasswordInput);
  //Server Side Username/Password Array
  //Connect To database
  $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());

  //Create an array for usernames and passwords
  $sql = "select Username, Password from customers";
  $result = mysqli_query($link, $sql);
  $datas = array();
  if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      $datas[] = $row;
    }
  }

  // print_r($datas);

  mysqli_close($link);
  print_r($datas[0]['Username']);



  // Validate, if user name and password
$isMatch;

$isMatch;
if(isset($_POST['Login']))
{
  for ($i = 0; $i<(sizeof($datas)); $i++){
    if($datas[$i]["Username"] == $loginUsernameInput and $datas[$i]["Password"] == $loginPasswordInput){
        $isMatch = true;
        session_start();
        $_SESSION["Username"] = $loginUsernameInput;
        echo '<script type="text/javascript"> window.open("index.php"); </script>';
      }
      else $isMatch = false;
    }
  if ($isMatch == false) {
    echo "<script type='text/javascript'>alert('Invalid Username or Password');</script>";
  }
}

}


?>
