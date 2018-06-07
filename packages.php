<!--
Author: Sunghyun Lee
Created: 2018-06-01
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vacation Packages</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body onload="display_destination()">
  	<?php 
  	include "php/header.php";
  	//check if a 'Find Package' button was clicked on the index page. If yes, store its value into $searchItem
  	$searchItem='';
  	for ($i=1;$i<7;$i++)
  	{
  		if (isset($_POST["button".$i]))
  			$searchItem=$_POST["button".$i];
  	}
    //check if 'searchButton' was clicked on the index page. If yes, store the value from 'searchInput' into $searchItem
  	if (isset($_POST['searchButton']))
    {
      $searchItem=$_POST['searchField'];
    }
  	?>
  	<div class="container">
    <!-- area for search input -->
		<div class='jumbotron' style='background-color:skyblue'>
			<div class='row'>
        		<div class='col-sm-1'></div>
        		<div class='col-sm-8'>
          			<div class="input-group mb-3">
            			<div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">Search :</span></div>
            			<input type="text" class="form-control" placeholder="package name, continent, price, product etc." id="searchInput" onkeyup="display_destination()" value="<?php echo $searchItem; ?>" >
          			</div>
        		</div>
        	</div>
    	</div>

    	<?php 
    	include 'php/classes.php';
      //connect to the database to get the number of rows of Package table
    	$myDb = new mysqli('localhost', 'root', '','travelexperts');
    	$sql = "SELECT PackageId FROM packages";
    	$result=$myDb->query($sql);
    	$numRows=$result->num_rows;
    	$myDb->close();
      //create Package objects according to the number of rows in the database
    	for ($i=1;$i<$numRows+1;$i++)
    	{
    		${'package'.$i} = new Package($i);
    	}
    	?>
    	<form action="temp.php" method="POST" id="packageForm">
		<table id="packageTable" style="width:100%" class="table table-hover">
  			<tr class="header">
			    <th style="width:auto;">Package Name</th>
			    <th style="width:auto;">Start Date</th>
			    <th style="width:auto;">End Date</th>
			    <th style="width:auto;">Description</th>
			    <th style="width:auto;">Base Price</th>
			    <th style="width:auto;">Agency Commission</th>
			    <th style="width:auto;">Book</th>
		  	</tr>
		  	<?php
        //for each row in the table, print out package information
        //and attach an input button that will store each package's id as its value
		  	for ($i=1;$i<$numRows+1;$i++)
		  	{	$temp=${'package'.$i};
		  		echo "<tr>
		  				<td>$temp->name</td>
		  				<td>$temp->startDate</td>
		  				<td>$temp->endDate</td>
		  				<td>$temp->description</td>
		  				<td>$temp->basePrice</td>
		  				<td>$temp->agencyCommission</td>
		  				<td><button type='submit' name='button".$i."' value=$i class='btn btn-success'>Book</button></td>
		  			</tr>";
		  	}
		  	
		  	?>
		  	
		</table>
		</form>


  </div>
  <?php include "php/footer.php"?>


<script src="js/JSfunctions.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
