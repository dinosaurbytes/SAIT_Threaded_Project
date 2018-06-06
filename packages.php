<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vacation Packages</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  	<?php include "php/header.php"?>
  	<div class="container">
	
		<div class='jumbotron' style='background-color:skyblue'>
			<div class='row'>
        		<div class='col-sm-1'></div>
        		<div class='col-sm-8'>
          			<div class="input-group mb-3">
            			<div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">Destination:</span></div>
            			<input type="text" class="form-control" placeholder="Search for destination" id="searchInput" onkeyup="display_destination()" value="<?php if (isset($_POST['Asia'])||isset($_POST['Euro'])) echo 'Asia'?>">
          			</div>
        		</div>
        		<div class='col-sm-3'>
        			<button onclick="display_destination()" class="btn btn-success">Search</button>
        		</div>

        	</div>
    	</div>

    	<?php 
    	include 'php/classes.php';
    	$myDb = new mysqli('localhost', 'root', '','travelexperts');
    	$sql = "SELECT PackageId FROM packages";
    	$result=$myDb->query($sql);
    	$numRows=$result->num_rows;
    	$myDb->close();

    	for ($i=1;$i<$numRows+1;$i++)
    	{
    		${'package'.$i} = new Package($i);
    	}
    	?>
		<table id="packageTable" style="width:100%" class="table table-hover">
  			<tr class="header">
			    <th style="width:auto;">Package Name</th>
			    <th style="width:auto;">Start Date</th>
			    <th style="width:auto;">End Date</th>
			    <th style="width:auto;">Description</th>
			    <th style="width:auto;">Base Price</th>
			    <th style="width:auto;">Agency Commission</th>
		  	</tr>
		  	<?php
		  	for ($i=1;$i<$numRows+1;$i++)
		  	{	$temp=${'package'.$i};
		  		echo "<tr>
		  				<td>$temp->name</td>
		  				<td>$temp->startDate</td>
		  				<td>$temp->endDate</td>
		  				<td>$temp->description</td>
		  				<td>$temp->basePrice</td>
		  				<td>$temp->agencyCommission</td>
		  			</tr>";
		  	}
		  	
		  	?>
		  	
		</table>



  </div>
  <?php include "php/footer.php"?>


<script src="js/JSfunctions.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
