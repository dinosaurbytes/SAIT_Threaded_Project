<?php
include "functions.php";
include "OO Class Objects.php";
// Since AgentId is auto-incremented, no need to add to the array
//$myArray = array("AgentId"=>"12","AgtFirstName"=>"AgentFirstName","AgtMiddleInitial"=>"AgtMiddleInitial","AgtLastName"=>"AgtLastName","AgtBusPhone"=>"AgtBusPhone","AgtEmail"=>"AgtEmail","AgtPosition"=>"AgtPosition","AgencyId"=>"AgencyId");
// make sure AgencyId equals 1 or 2 because it is forgien key
$myAgent = new Agent($_POST);
$agentArray = array(
  "AgentId"=>"",
  "AgtFirstName"=>$_POST["AgtFirstName"],
  "AgtMiddleInitial"=>$_POST["AgtMiddleInitial"],
  "AgtLastName"=>$_POST["AgtLastName"],
  "AgtBusPhone"=>$_POST["AgtBusPhone"],
  "AgtEmail"=>$_POST["AgtEmail"],
  "AgtPosition"=>$_POST["AgtPosition"],
  "AgencyId"=>$_POST["AgencyId"]);

// print_r($agentArray);
// functionName($agentArray);
// New function below that calls to Object Orientated file
functionName2($myAgent);
?>
<?php
    header("location: Form.php");
?>
