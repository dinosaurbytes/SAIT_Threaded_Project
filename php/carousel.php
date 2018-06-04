
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="../css/main.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Custom Materialize Theme</title>
</head>

<body id="home" class="scrollspy">

  <!-- Section: Slider -->
  <section class="slider">
    <ul class="slides">
      <li>
        <img src="../image/1.jpg" alt="">
        <div class="caption center-align">
          <h2>Take Your Dream Vacation</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Text1</h5>
          <a href="#" class="btn btn-large">Learn More</a>
        </div>
      </li>
      <li>
        <img src="../image/2.jpg" alt="">
        <div class="caption left-align">
          <h2>We Work With All Budgets</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Text2</h5>
          <a href="#" class="btn btn-large">Learn More</a>
        </div>
      </li>
      <li>
        <img src="../image/3.jpg" alt="">
        <div class="caption right-align">
          <h2>Group & Individual Getaways</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Text3</h5>
          <a href="#" class="btn btn-large">Learn More</a>
        </div>
      </li>
    </ul>
  </section>









  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
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
