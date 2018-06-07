<?php
function functionName($agentArray){

	// setup DB connection
 	$dbconn = new mysqli('127.0.0.1', 'root', '','travelexperts');   // change DB name and try
 	//echo $dbconn->connect_errno . "<br>";
 	//echo $dbconn->connect_error . "<br>";   // will print null if no errors
 	if ($dbconn->connect_errno){
 	//echo "Connection Problem: Cannot connect to database";
 		die("Connection Problem: Cannot connect to database");
 	}
 	else {
 		print("<br>connected successfully");}

$fields="";
$values = "";

// 	// Bulid the associative array here. The $arrayName = array('' => , );

 	foreach($agentArray as $key=>$value)

 		{
			echo "<br>Key = ". $key. "  Value = " . $value;
			if(!$fields){
				$fields = $key;
				$values = "'".$value."'";
			}
			else {
				$fields .= ", " . $key;  //Concatenating keys together and separate using,
				$values .= ", " . "'".$value."'";
			}
		}

		echo "<br>".$fields;
		echo "<br>".$values;
		    //SQL statement
    $sql = "INSERT INTO agents ($fields) VALUES ($values)";
	 		// Execute the Query
			$result = mysqli_query($dbconn, $sql);

                              if($result){
                                      print($result);
      echo "<p>New Agent created!</p>";  // This is to display a message in the page
                                   echo "<br>New record created successfully";
              echo file_put_contents("test.txt","New record created successfully");

                              }
                              else {
                                      echo "<br>". mysqli_error($dbconn);
                                      echo "<br>Error: Cannot insert the record";
              echo file_put_contents("cannotInsert.txt","Cannot insert the record");
                              }

			$dbconn->close();
		}

function functionName2($agt)
{
  // This is the functions file that connects and uses my OO Class Object.php file
  	// setup DB connection
   	$dbconn = new mysqli('127.0.0.1', 'root', '','travelexperts');   // change DB name and try
   	//echo $dbconn->connect_errno . "<br>";
   	//echo $dbconn->connect_error . "<br>";   // will print null if no errors
   	if ($dbconn->connect_errno){
   	//echo "Connection Problem: Cannot connect to database";
   		die("Connection Problem: Cannot connect to database");
   	}
   	else {
   		print("<br>connected successfully");}

  $fields="AgtFirstName,AgtMiddleInitial,AgtLastName,AgtBusPhone,AgtEmail,AgtPosition,AgencyId";
  $values = "'".$agt->getAgtFirstName()."', '".$agt->getAgtMiddleInitial()."', '".$agt->getAgtLastName()."', '".$agt->getAgtBusPhone()."', '".$agt->getAgtEmail()."', '".$agt->getAgtPosition()."', '".$agt->getAgencyId()."'";
echo $values;

 print("<p>".$agt->getAgtFirstName()."</p><p>".$agt->getAgtMiddleInitial()."</p><p>".$agt->getAgtLastName()."</p><p>".$agt->getAgtBusPhone()."</p><p>".$agt->getAgtEmail()."</p><p>".$agt->getAgtPosition()."</p><p>".$agt->getAgencyId()."</p><p>".$agt->getusername()."</p><p>".$agt->getpassword()."</p>");
  //SQL statement
$sql = "INSERT INTO agents ($fields) VALUES ($values)";
// Execute the Query
$result = mysqli_query($dbconn, $sql);

                        if($result){
                                print($result);
echo "<p>New Agent created!</p>";  // This is to display a message in the page
                             echo "<br>New record created successfully";
        echo file_put_contents("test.txt","New record created successfully");

                        }
                        else {
                                echo "<br>". mysqli_error($dbconn);
                                echo "<br>Error: Cannot insert the record";
        echo file_put_contents("cannotInsert.txt","Cannot insert the record");
                        }

$dbconn->close();
}
?>
