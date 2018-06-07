<!--
Login Page for SAIT Threaded Proejct
Page created by Brian Liang
 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/brianCss.css">

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
  <?php include "php/header.php"?>

  <?php
    $userErr=$passErr=$cPassErr=$CustFirstNameErr=$CustLastNameErr=$addErr=$CustCityErr=$CustPostalErr='';
    if (isset($_POST['submit']))
    {
      $inputs=array(
        'username'=>'userErr',
        'password'=>'passErr',
        'cPassword'=>'cPassErr',
        'CustFirstName'=>'CustFirstNameErr',
        'CustLastName' => 'CustLastNameErr',
        'CustAddress' => 'addErr',
        'CustCity' =>'CustCityErr',
        'CustPostal' => 'CustPostalErr'
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
      if (!empty($_POST['CustPostal']))
      {
        $reg = "/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/";
        if(!preg_match($reg,trim($_POST['CustPostal'])))
        {
          $CustPostalErr = 'Postal Code pattern is wrong';
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
    <section>
      <div class="card" style="background-color: skyblue; height: 30rem;">
        <div class="row" style="height: 2rem;"></div>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-9">
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" id="register_form" >
              <fieldset>
                <legend class='text-white'>Login</legend>
                <div class='row row-buffer'>
                  <div class='col-sm-6'>
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text span-width" >Username:</span>
                            </div>
                              <input type="text" class="form-control"   onfocus="showMessage('Maximum Length:15',this)" maxlength="15" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
                          </div>
                  </div>
                  <div class='col-sm-6' id='username' style='visibility: hidden'></div>
                </div>
                <span class='text-danger'><?php echo $userErr; ?></span>

                <div class='row row-buffer'>
                  <div class='col-sm-6'>
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class=" label input-group-text span-width" >Password:</span>
                            </div>
                              <input type="password" class="form-control"   onfocus="showMessage('Maximum Length:15',this)" maxlength="15" >
                          </div>
                  </div>
                  </div>
              <span class='text-danger'><?php echo $passErr; ?></span>

              <div class='row'>
      					<div class='col-sm-6' style=''>
      						<button class='btn btn-success' type="submit" name='Login' value="Login" > Login </button>
                  <a href="register.php">Create an Account</a>
                </div>
              </div>
            </fieldset>
          </form>

          </div>
          <div class="col-sm-2"></div>
        </div>


</div>
</section>
<?php include "php/footer.php"?>