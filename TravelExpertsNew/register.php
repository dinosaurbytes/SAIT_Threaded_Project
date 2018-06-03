<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travel Experts</title>
</head>

<body id="home" class="scrollspy">
  <?php include("php/header.php"); ?>


  <!-- Section: Register -->
  <section id="register" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
            <h5>Login</h5>
            <div class="input-field">
              <input type="text" placeholder="Username" id="username">
              <label for="username">Username</label>
            </div>
            <div class="input-field">
              <input type="password" placeholder="Password" id="password">
              <label for="password">Password</label>
            </div>
            <input type="submit" value="Login" class="btn">
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
            <h5>Register</h5>
            <div class="input-field">
              <input type="email" placeholder="Email" id="email">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" placeholder="Username" id="username">
              <label for="username">Username</label>
            </div>
            <div class="input-field">
              <input type="password" placeholder="Password" id="password">
              <label for="password">Password</label>
            </div>
            <h6>Optional Fields:</h6>
            <div class="input-field">
              <input type="text" placeholder="FirstName" id="firstName">
              <label for="firstName"> First Name</label>
            </div>
            <div class="input-field">
              <input type="text" placeholder="LastName" id="lastName">
              <label for="lastName"> Last Name</label>
            </div>
            <div class="input-field">
              <input type="text" placeholder="Address" id="address">
              <label for="address"> Address</label>
            </div>
            <div class="input-field">
              <input type="text" placeholder="City" id="city">
              <label for="city"> City</label>
            </div>
            <div class="input-field">
              <input type="email" placeholder="Email" id="email">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" placeholder="Phone" id="phone">
              <label for="phone">Phone</label>
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" placeholder="Enter Message" id="message"></textarea>
              <label for="message">Message</label>
            </div>
            <input type="submit" value="Login" class="btn">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include("php/footer.php"); ?>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      // Init Side nav
      $('.button-collapse').sideNav();

      // Init Slider
      $('.slider').slider({
        indicators: false,
        height: 500,
        transition: 500,
        interval: 6000
      });

      // Init Scrollspy
      $('.scrollspy').scrollSpy();

    });
  </script>
</body>

</html>
