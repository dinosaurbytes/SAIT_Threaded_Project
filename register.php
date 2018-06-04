<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script>

		function showMessage(message,el)
		{	var myId= el.name;
			document.getElementById(myId).innerHTML=message;
			document.getElementById(myId).style.visibility="visible";
		}

		function hideMessage(el)
		{
			//console.log(el.name)
			document.getElementById(el.name).style.visibility="hidden";
		}

	</script>
</head>
<body>
	<?php
		$userErr=$passErr=$cPassErr=$fnameErr=$lnameErr=$addErr=$cityErr=$pcErr='';
		if (isset($_POST['submit']))
		{	
			$inputs=array(
				'username'=>'userErr',
				'password'=>'passErr',
				'cPassword'=>'cPassErr',
				'fname'=>'fnameErr',
				'lname' => 'lnameErr',
				'address' => 'addErr',
				'city' =>'cityErr',
				'pc' => 'pcErr'
				);
			$goodToGo = true;
			foreach ($inputs as $name => $err)
			{	
				if (empty($_POST[$name]))
				{	
					$$err = "*empty";
					$goodToGo =false;	
				}
			}
			if (!empty($_POST['pc']))
			{
				$reg = "/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/";
				if(!preg_match($reg,trim($_POST['pc'])))
				{
					$pcErr = 'Postal Code pattern is wrong';
					$goodToGo =false;
				}
			}
			if (!empty($_POST['password'])&&!empty($_POST['cPassword']))
			{
				if ($_POST['password']!=$_POST['cPassword'])
				{
					$cPassErr ='Passwords do not match';
					$goodToGo=false;
				}
			}		
		}	
		?>
  	<div class="container">
    	<?php include "php/header.php"?>
    	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" id="register_form" >		
				<fieldset>
					<legend>User Name and Password</legend>
					<div class='row'>
						<div class='col-sm-6'>
							<div class="input-group">
           						<div class="input-group-prepend">
              						<span class="input-group-text" >Username:</span>
           						</div>
            						<input type="text" class="form-control"  name="username" onfocus="showMessage('Maximum Length:15',this)" maxlength="15" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
          					</div>
						</div>
						<div class='col-sm-6' id='username' style='visibility: hidden'></div>
					</div>
					<span class='text-danger'><?php echo $userErr; ?></span>

					<div class='row'>
						<div class='col-sm-6'>
							<div class="input-group">
           						<div class="input-group-prepend">
              						<span class="input-group-text" >Password:</span>
           						</div>
            						<input type="password" class="form-control"  name="password" onfocus="showMessage('Maximum Length:15',this)" maxlength="15" >
          					</div>
						</div>
						<div class='col-sm-6' id='password' style='visibility: hidden'></div>
					</div>
					<span class='text-danger'><?php echo $passErr; ?></span>

					<div class='row'>
						<div class='col-sm-6'>
							<div class="input-group">
           						<div class="input-group-prepend">
              						<span class="input-group-text" >Confirm Password:</span>
           						</div>
            						<input type="password" class="form-control"  name="cPassword" onfocus="showMessage('This should match the password',this)" maxlength="15">
          					</div>
						</div>
						<div class='col-sm-6' id='cPassword' style='visibility: hidden'></div>
					</div>
					<span class='text-danger'><?php echo $cPassErr; ?></span>
				</fieldset>
				<fieldset>
					<legend> Personal Information </legend>
					<div class='row'>
						<div class='col-sm-6'>
							<div class="input-group">
           						<div class="input-group-prepend">
              						<span class="input-group-text">First name:</span>
           						</div>
            						<input type="text" class="form-control" placeholder="John" name="fname" onfocus="showMessage('Please ignore middle name',this)" maxlength="20" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>">
          					</div>
						</div>
						<div class='col-sm-6' id='fname' style='visibility: hidden'></div>
					</div>
					<span class='text-danger'><?php echo $fnameErr; ?></span>
					<div class='row'>
						<div class='col-sm-6'>
							<div class="input-group">
           						<div class="input-group-prepend">
              						<span class="input-group-text">Last name:</span>
           						</div>
            						<input type="text" class="form-control" placeholder="Doe" name="lname" maxlength="20" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>">
          					</div>
						</div>
						<div class='col-sm-6' id='lname' style='visibility: hidden'></div>
					</div>
					<span class='text-danger'><?php echo $lnameErr; ?></span>
					<div class='row'>
						<div class='col-sm-6'>
							<div class="input-group">
           						<div class="input-group-prepend">
              						<span class="input-group-text">Address:</span>
           						</div>
            						<input type="text" class="form-control" placeholder="3675 32th Avenue SW" name="address" onfocus="showMessage('Street address before city',this)" value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>">
          					</div>
						</div>
						<div class='col-sm-6' id='address' style='visibility: hidden'></div>
					</div>
					<span class='text-danger'><?php echo $addErr; ?></span>
					<div class='row'>
						<div class='col-sm-6'>
							<div class="input-group">
           						<div class="input-group-prepend">
              						<span class="input-group-text">City:</span>
           						</div>
            						<input type="text" class="form-control" placeholder="Calgary" name="city" value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>">
          					</div>
						</div>
						<div class='col-sm-6' id='city' style='visibility: hidden'></div>
					</div>
					<span class='text-danger'><?php echo $cityErr; ?></span>
					<div class='row'>
						<div class='col-sm-6'>
							<div class="input-group">
           						<div class="input-group-prepend">
              						<span class="input-group-text">Province:</span>
           						</div>
            						
            					<select class='form-control' name="province"  onfocus="showMessage('If your province is not on the list, please select Else',this)" >
									<option value="ab">Alberta</option>
									<option value="bc">British Columbia</option>
									<option value="mb">Manitoba</option>
									<option value="on">Ontario</option>
									<option value="sk">Saskatchewan</option>
									<option value="qc">Quebec</option>
									<option value="nb">New Brunswick</option>
									<option value="ns">Nova Scotia</option>
									<option value="nl">Newfoundland</option>
									<option value="else">Else</option>
								</select>	
							</div>
						</div>
						<div class='col-sm-6' id='province' style='visibility: hidden'></div>
					</div>
					<div class='row'>
						<div class='col-sm-6'>
							<div class="input-group">
           						<div class="input-group-prepend">
              						<span class="input-group-text">Postal Code:</span>
           						</div>
            						<input type="text" class="form-control" placeholder="A1A 1A1" name="pc" onfocus="showMessage('Must match the pattern: A1A 1A1',this)" maxlength="7" value="<?php if(isset($_POST['pc'])) echo $_POST['pc']; ?>">
          					</div>
						</div>
						<div class='col-sm-6' id='pc' style='visibility: hidden'></div>
					</div>
					<span class='text-danger'><?php echo $pcErr; ?></span>
				</fieldset>
			
				
				<!-- submit and reset buttons -->
				<div class='row'>
					<div class='col-sm-6' style='text-align:center'>
						<button class='btn btn-success' type="submit" name='submit' value="Submit" > Send </button>
						<button class='btn btn-primary' type="reset" value="Reset" onclick="return confirm('Do you want to reset?')">Reset</button>
					</div>
					<div class='col-sm-6'>
						<?php
						if (isset($_POST['submit']))
						{
							if ($goodToGo) echo "
							<div class='alert alert-success alert-dismissible fade show'>
			  					<button type='button' class='close' data-dismiss='alert'>&times;</button>
			  						<strong>Success:</strong> Your request has been processed.
			  				</div>";
							else echo "
							<div class='alert alert-danger alert-dismissible fade show'>
			  					<button type='button' class='close' data-dismiss='alert'>&times;</button>
			  						<strong>Failed:</strong> Your request cannot be processed.
			  				</div>";
			  			}
			  			?>
					</div>
				</div>
			</form>
	</div>
	<script type="text/javascript">
			var register_array=document.getElementById("register_form").elements;
				for (i=0;i<register_array.length; i++)
				{	var el=register_array[i];
					if (el.tagName=='INPUT' || el.tagName=='SELECT')
						el.setAttribute('onblur', "hideMessage(this)");			
				}
	</script>
	<?php include "php/footer.php"?>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
