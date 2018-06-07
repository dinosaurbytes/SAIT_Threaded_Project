<?php

$dbconn = mysqli_connect('127.0.0.1', 'root','','travelexperts');

if(!$dbconn)
{
  echo 'Not Connected To Server';
}
if(!mysqli_select_db($dbconn,'travelexperts'))
{
  echo 'Database Not Selected';
}

$CustFirstName = $_POST['CustFirstName'];
$CustLastName = $_POST['CustLastName'];
$CustAddress = $_POST['CustAddress'];
$CustCity = $_POST['CustCity'];
$CustProv = $_POST['CustProv'];
$CustPostal = $_POST['CustPostal'];
$CustCountry = $_POST['CustCountry'];
$CustHomePhone = $_POST['CustHomePhone'];
$CustBusPhone = $_POST['CustBusPhone'];
$CustEmail = $_POST['CustEmail'];


$sql = "INSERT INTO customers (CustFirstName,CustLastName,CustAddress,CustCity,CustProv,CustPostal,CustCountry,CustHomePhone,CustBusPhone,CustEmail) VALUES ('$CustFirstName','$CustLastName','$CustAddress','$CustCity','$CustProv','$CustPostal','$CustCountry','$CustHomePhone','$CustBusPhone','$CustEmail')";

if(!mysqli_query($dbconn,$sql))
{
  echo 'Not Inserted';
}
else
{
  echo 'Inserted';
}

// header("refresh:2; url=orders.php");
$dbconn->close();
 ?>
