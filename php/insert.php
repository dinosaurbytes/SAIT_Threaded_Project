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
if (isset($_POST['button1']))
{ echo "data received!<br>";
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
  $BookingDate = date('Y-m-d H:i:s');
  // $currentDateTime = new \DateTime();
  // $currentDateTime->setTimezone(new \DateTimeZone('America/Edmonton'));
  // $BookingDate = $currentDateTime->format('Y-m-d H:i:s');
  $TravelerCount = $_POST['$TravelerCount'];
  $TripTypeId = $_POST['$TripTypeId'];



}
else echo"data NOT received";
echo "<br>".gettype($TravelerCount)."<br>";
// $TravelerCount= (double) $TravelerCount;
echo "<br>".gettype($TravelerCount)."<br>";

$sql1 = "INSERT INTO customers (CustFirstName,CustLastName,CustAddress,CustCity,CustProv,CustPostal,CustCountry,CustHomePhone,CustBusPhone,CustEmail) VALUES ('$CustFirstName','$CustLastName','$CustAddress','$CustCity','$CustProv','$CustPostal','$CustCountry','$CustHomePhone','$CustBusPhone','$CustEmail')";

$sql2 = "INSERT INTO bookings (BookingDate,TravelerCount,TripTypeId) VALUES ('$BookingDate',$TravelerCount,'$TripTypeId')";

if(!mysqli_query($dbconn,$sql1))
{
  echo 'Customer Not Inserted';
}
else
{
  echo 'Customer Inserted';
}

if(!mysqli_query($dbconn,$sql2))
{
  echo 'Booking Date Not Inserted';
}
else
{
  echo 'Booking Date Inserted';
}

// header("refresh:2; url=orders.php");
$dbconn->close();
 ?>
