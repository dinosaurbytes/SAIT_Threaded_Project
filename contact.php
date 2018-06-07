<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/contact.css">

</head>
<body>
	<?php  include "php/header.php"; ?>
  <div class="container">
  <!-----section:office hours informaion and message form------->

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" id="Name" name="Name">
							</div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" id="Emai" name="Email">
								<span style="color: red"></span>
							</div>
							<div class="form-group">
                <input type="text" class="form-control" placeholder="Phone" id="Phone" name="Phone">
								<span style="color: red"></span>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Enter message" id="message" name="Message"></textarea>
								<span style="color: red"></span>
              </div>
              <input type="submit" name="submit" value="Send" class="btn btn-success btn-md" onclick="return validate(this.form)">
              <span style="color: red">&emsp;* All feild are required.</span>

    </div>
  </section>
<!-------------section:agency information-------->
  <section>

<!-----------------section:agents information---------------->
  <section>
    <div class="card" style="background-color: skyblue;">
      <div class="card-body">
        <h4 class="card-title text-center text-white">Our Team of Professionals</h4>
      <div class="row">
        <div class='col-xs-6 col-sm-4 col-md-3 col-lg-2'>
          <div class='card border-0 mb-4' style="background-color: skyblue;">
            <img class="card-img-top rounded-circle" src="" alt="Agent Photo">
            <div class='card-body text-center text-white'>
              <h6 class='card-title'>name</h6>
              <p class="card-text">phone</p>
              <a href="#" class='card-link'>email</a>
            </div>
          </div>
        </div>
        <div class='col-xs-6 col-sm-4 col-md-3 col-lg-2'>
          <div class='card border-0 mb-4' style="background-color: skyblue;">
            <img class="card-img-top rounded-circle" src="" alt="Agent Photo">
            <div class='card-body text-center text-white'>
              <h6 class='card-title'>name</h6>
              <p class="card-text">phone</p>
              <a href="#" class='card-link'>email</a>
            </div>
          </div>
        </div>
        <div class='col-xs-6 col-sm-4 col-md-3 col-lg-2'>
          <div class='card border-0 mb-4' style="background-color: skyblue;">
            <img class="card-img-top rounded-circle" src="" alt="Agent Photo">
            <div class='card-body text-center text-white'>
              <h6 class='card-title'>name</h6>
              <p class="card-text">phone</p>
              <a href="#" class='card-link'>email</a>
            </div>
          </div>
        </div>
        <div class='col-xs-6 col-sm-4 col-md-3 col-lg-2'>
          <div class='card border-0 mb-4' style="background-color: skyblue;">
            <img class="card-img-top rounded-circle" src="" alt="Agent Photo">
            <div class='card-body text-center text-white'>
              <h6 class='card-title'>name</h6>
              <p class="card-text">phone</p>
              <a href="#" class='card-link'>email</a>
            </div>
          </div>
        </div>
        <div class='col-xs-6 col-sm-4 col-md-3 col-lg-2'>
          <div class='card border-0 mb-4' style="background-color: skyblue;">
            <img class="card-img-top rounded-circle" src="" alt="Agent Photo">
            <div class='card-body text-center text-white'>
              <h6 class='card-title'>name</h6>
              <p class="card-text">phone</p>
              <a href="#" class='card-link'>email</a>
            </div>
          </div>
        </div>
        <div class='col-xs-6 col-sm-4 col-md-3 col-lg-2'>
          <div class='card border-0 mb-4' style="background-color: skyblue;">
            <img class="card-img-top rounded-circle" src="" alt="Agent Photo">
            <div class='card-body text-center text-white'>
              <h6 class='card-title'>name</h6>
              <p class="card-text">phone</p>
              <a href="#" class='card-link'>email</a>
            </div>
          </div>
        </div>
       <!------can add more agents informtion here----->
      </div>
      </div>
    </div>
  </section>

  <?php include "php/footer.php"; ?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
//------This function is to validate the message form.
function validate(myform)
{   var str;
  	var patt;
    var result;
		var error;
  for (var x = 0; x < myform.length; x++)
  {
    if (myform[x].value == "" || null)
    {
      error= 'Note: '+ myform[x].name + ' is required.';
			document.getElementById('message').innerHTML=error;
      return false;
    }
    else if (myform[x].name == "Email")
    {
      str=myform[x].value;
      patt = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            result=patt.test(str.toLowerCase());
        if (!result)
      {

        return false;
      }
    }
    else if (myform[x].name == "Phone")
    {
      str=(myform[x].value).replace(/\D/g, "");
      patt =/^[2-9]\d{2}[2-9]\d{2}\d{4}$/;
            result=patt.test(str.toLowerCase());
        if (!result)
      {

        return false;
      }
    }
  }
}
</script>

</div>


</body>
</html>
