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


  <!-- Section: Vacation Packages -->
  <section id="popular" class="section section-popular scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="teal-text">Vacation</span> Packages</h4>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/resort1.jpg" alt="">
              <span class="card-title">Cancun, Mexico</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/resort2.jpg" alt="">
              <span class="card-title">The Bahamas</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/resort3.jpg" alt="">
              <span class="card-title">Nova Scotia</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/resort1.jpg" alt="">
                <span class="card-title">Cancun, Mexico</span>
              </div>
              <div class="card-content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                  delectus?
                </p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/resort2.jpg" alt="">
                <span class="card-title">The Bahamas</span>
              </div>
              <div class="card-content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                  delectus?
                </p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/resort3.jpg" alt="">
                <span class="card-title">Nova Scotia</span>
              </div>
              <div class="card-content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                  delectus?
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="img/resort1.jpg" alt="">
                  <span class="card-title">Cancun, Mexico</span>
                </div>
                <div class="card-content">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                    delectus?
                  </p>
                </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="img/resort2.jpg" alt="">
                  <span class="card-title">The Bahamas</span>
                </div>
                <div class="card-content">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                    delectus?
                  </p>
                </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="img/resort3.jpg" alt="">
                  <span class="card-title">Nova Scotia</span>
                </div>
                <div class="card-content">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                    delectus?
                  </p>
                </div>
              </div>
            </div>

      <div class="row">
        <div class="col s12 center">
          <a href="contact.php" class="btn btn-large grey darken-3">
            <i class="material-icons left">send</i> Contact For Booking
          </a>
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

      // Autocomplete
      $('.autocomplete').autocomplete({
        data: {
          "Aruba": null,
          "Cancun Mexico": null,
          "Hawaii": null,
          "Florida": null,
          "California": null,
          "Jamaica": null,
          "Europe": null,
          "The Bahamas": null,
        }
      });

      // Init Scrollspy
      $('.scrollspy').scrollSpy();

    });
  </script>
</body>

</html>
