<!--
Register Page for SAIT Threaded Proejct
Page created by Jason McIntyre
 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pack your Bags!</title>
<!-- Website responsive sizing for various display screen size -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/brianCss.css">
</head>
<body>

		<?php include "php/header.php"?>

<!-- Username and Passwor Form -->
<section>
	<div class="card" style="background-color: skyblue;">
		<div class="row" style="height: 2rem;"></div>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-9">
  				<fieldset>
					<legend class="text-white"> Success! Package Order submitted and received! </legend>
					<div class='row row-buffer'>
						<div class='col-sm-6'>
							<div class="input-group">
           			<div class="input-group-prepend">
									<img src="image/Team4.jpg" alt="Team4">
								</div>
							</div>
				</fieldset>
</section>
		<?php include "php/footer.php"?>
	<script type="text/javascript">
			var register_array=document.getElementById("register_form").elements;
				for (i=0;i<register_array.length; i++)
				{	var el=register_array[i];
					if (el.tagName=='INPUT' || el.tagName=='SELECT')
						el.setAttribute('onblur', "hideMessage(this)");
				}
	</script>


	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
