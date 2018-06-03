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
  <title>Contact</title>
</head>

<body id="home" class="scrollspy">
  <?php include("php/header.php"); ?>

  <!-- Section: Contact -->
  <section id="contact" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <ul class="collection with-header">
            <li class="collection-header">
              <h5>Location Calgary (Head Office)</h5>
            </li>
            <li class="collection-item">Travel Experts</li>
            <li class="collection-item">1301 16 Ave NW</li>
            <li class="collection-item">Calgary Alberta, T2M 0L4</li>
            <li class="collection-item">Phone: 403-828-8282</li>
          </ul>
          <ul class="collection with-header">
            <li class="collection-header">
              <h5>Location Okotoks</h5>
            </li>
            <li class="collection-item">Travel Experts</li>
            <li class="collection-item">111 Main Street</li>
            <li class="collection-item">Okotoks Alberta, T2J 0L0</li>
            <li class="collection-item">Phone: 403-828-3838</li>
          </ul>
        </div>
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
            <h5>Contact Us</h5>
            <div class="input-field">
              <input type="text" placeholder="Name" id="name">
              <label for="name">Name</label>
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
            <input type="submit" value="Submit" class="btn purple accent-42">
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
