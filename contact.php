<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
  <div class="container">
    <?php  include "php/header.php"; ?>
  <!-----section:office hours informaion and message form------->
  <section>
    <div class="row">
      <div class='col-sm-12 col-md-6'>
        <div class='card mb-4 bg-light'>
          <div class='card-body'>
            <h4 class='card-title' style="color: red">CONTACT US</h4>
            <br>
            <h5 class='card-subtitle'>Office hours</h5>
          </div>
          <ul >
              <li>Monday:&emsp;9:30am-6:00pm</li>
              <li>Tuesday:&emsp;9:30am-6:00pm</li>
              <li>Wednsay:&emsp;9:30am-6:00pm</li>
              <li>Thursday:&emsp;9:30am-6:00pm</li>
              <li>Friday:&emsp;&emsp;9:30am-6:00pm</li>
              <li>Saturday:&emsp;11:00am-5:00pm</li>
              <li>Sunday:&emsp;11:00am-5:00pm</li>
          </ul>
        </div>
      </div>
       <!--------------message form----->
      <div class='col-sm-12 col-md-6'>
        <div class='card mb-4'>
          <div class='card-body bg-info'>
            <h5 class='card-title'>Send us a message</h5>
            <form id="contactform" name="contactform" action="" metho="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" id="name" name="Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" id="email" name="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone" id="phone" name="Phone">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="Enter message" id="message" name="Message"></textarea>
              </div>
              <input type="submit" name="submit" value="Send" class="btn btn-success btn-md" onclick="return validate(this.form)">
              <span style="color: red">&emsp;* All feild are required.</span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-------------section:location information-------->
  <section>
          <div class="row">
            <div class='col-sm-12 col-md-6'>
              <div class='card mb-4 bg-light'>
                <div class='card-body'>
                  <h6 class='card-title'>Calgary</h6>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        Phone: (403)271-9873
                      </li>
                      <li class="list-group-item">Fax: (403)271-9872</li>
                      <li class="list-group-item">1155 8th Ave SW Calgary, AB T2P 1N3</li>
                    </ul>
                </div>
              </div>
            </div>
            <div class='col-sm-12 col-md-6'>
              <div class='card mb-4 bg-light'>
                  <div class='card-body'>
                    <h6 class='card-title'>Oktoks</h6>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Phone: (403)563-2381</li>
                      <li class="list-group-item">Fax: (403)563-2382</li>
                      <li class="list-group-item">110 Main Street Oktoks, AB T7R 3J5</li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
  </section>
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
  for (var x = 0; x < myform.length; x++)
  {
    if (myform[x].value == "" || null)
    {
      alert ( myform[x].name + " is required.");
      return false;
    }
    else if (myform[x].name == "Email")
    {
      str=myform[x].value;
      patt = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            result=patt.test(str.toLowerCase());
        if (!result)
      {
        alert("please enter a correct email address.");
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
        alert("please enter a valid phone number.");
        return false;
      }
    }
  }
}
</script>

  </div>


</body>
</html>
