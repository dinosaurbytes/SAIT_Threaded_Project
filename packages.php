<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vacation Packages</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  	<div class="container">
	<?php include "php/header.php"?>
		<div class='jumbotron' style='background-color:skyblue'>
			<div class='row'>
        		<div class='col-sm-1'></div>
        		<div class='col-sm-8'>
          			<div class="input-group mb-3">
            			<div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">Destination:</span></div>
            			<input type="text" class="form-control" placeholder="Search for destination" id="myInput" onkeyup="myFunction()">
          			</div>
        		</div>
        	</div>
    	</div>
	

		<table id="myTable" style="width:100%" class="table table-hover">
  			<tr class="header">
			    <th style="width:auto;">Destinations</th>
			    <th style="width:auto;">Country</th>
			    <th style="width:auto;">Price</th>
			    <th style="width:auto;">Date</th>
			    <th style="width:auto;">Air Line</th>
		  	</tr>
		  	<tr>
		  		<td class='text-danger'>Europe</td>
		  	</tr>
		  	<tr>
			    <td>Berlin</td>
			    <td>Germany</td>
			    <td>$754</td>
			    <td>2018-08-12</td>
			    <td>Air Germany</td>
				<td><button class='btn btn-info'>Book</button>
			</tr>
		  
		  	
		  	
		  	<tr>
		    	<td>Venice</td>
			    <td>Germany</td>
			    <td>$754</td>
			    <td>2018-08-12</td>
			    <td>Air Germany</td>
			    <td><button class='btn btn-info'>Book</button>
		  	</tr>
		  	<tr>
		    	<td>Zurich</td>
			    <td>Germany</td>
			    <td>$754</td>
			    <td>2018-08-12</td>
			    <td>Air Germany</td>
			    <td><button class='btn btn-info'>Book</button>
		  	</tr>
		  	<tr>
		  		<td class='text-primary'>America</td>
		  	</tr>
		  	<tr>
		    	<td>New York</td>
			    <td>Germany</td>
			    <td>$754</td>
			    <td>2018-08-12</td>
			    <td>Air Germany</td>
			    <td><button class='btn btn-info'>Book</button>
		  	</tr>
		  	<tr>
		    	<td>Rio De Janeiro</td>
			    <td>Germany</td>
			    <td>$754</td>
			    <td>2018-08-12</td>
			    <td>Air Germany</td>
			    <td><button class='btn btn-info'>Book</button>
		  	</tr>
		  	<tr>
		  		<td class='text-warning'>Asia/Pacific</td>
		  	</tr>
		  	<tr>
		    	<td>Hong Kong</td>
			    <td>Germany</td>
			    <td>$754</td>
			    <td>2018-08-12</td>
			    <td>Air Germany</td>
			    <td><button class='btn btn-info'>Book</button>
		  	</tr>
		  	<tr>
		    	<td>Tokyo</td>
			    <td>Germany</td>
			    <td>$754</td>
			    <td>2018-08-12</td>
			    <td>Air Germany</td>
			    <td><button class='btn btn-info'>Book</button>
		  	</tr>
		  	<tr>
		    	<td>Maldive</td>
			    <td>Germany</td>
			    <td>$754</td>
			    <td>2018-08-12</td>
			    <td>Air Germany</td>
			    <td><button class='btn btn-info'>Book</button>
		  	</tr>
		</table> 



  </div>
  <?php include "php/footer.php"?>

<script>
	
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
