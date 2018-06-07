<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Form - Shipping order form</title>


  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <form id="myform">
  <header>Package Order Form</header>
  <div class="area">
    <div class="row">
      <div class="col2">
        <input type="text" name="firstname">
        <label for="fistname">First Name</label>
      </div>
      <div class="col2">
        <input type="text" name="lastname">
        <label for="lastname">Last Name</label>
      </div>
    </div>
    <div class="row">
      <input type="text" name="phone" id="phone">
      <label for="phone">Phone</label>
    </div>
    <div class="row">
      <input type="text" name="address" id="address">
      <label for="address">Address</label>
    </div>

  </div>
  <div class="area">
    <div class="ckeckarea">
      <input type="checkbox" name="checkbox1" id="checkbox1" onclick="autofilling(this.form)">
      <label for="checkbox1">Check this box if order info and sending info are the same.</label>
    </div>
    <div class="row">
      <div class="col2">
        <input type="text" name="newfirstname">
        <label for="newfistname">First Name</label>
      </div>
      <div class="col2">
        <input type="text" name="newlastname">
        <label for="newlastname">Last Name</label>
      </div>
    </div>
    <div class="row">
      <input type="text" name="newaddress" id="newaddress">
      <label for="newaddress">Sending Address</label>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" class="btn">
    <input type="submit" value="cancel" class="btn">
  </div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/index.js"></script>




</body>

</html>
