<?php
//display agency information from database.
function showAgency()
{
  // connect and check connection with a database
  $con = @mysqli_connect("localhost","root","","travelexperts") or die ("Database Connection failed!<br>");
  // select all the rows of agency table.
  $sql = "SELECT * FROM agencies";
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result) > 0)
  {
  // loop to get and display information of each agency and agents
    while($row = mysqli_fetch_assoc($result))
    {
      //get the nessesary information of one agency
        $id=$row['AgencyId'];
        $adr=$row['AgncyAddress'];
        $city=$row["AgncyCity"];
        $postal=$row["AgncyPostal"];
        $phone=$row["AgncyPhone"];
    //output data of each agency
        $str="<section>
        <div class='row'>
          <div class='col-sm-12 col-md-6'>
            <div class='card bg-white' style='border:0;'>
              <div class='card-body'>
                <h4 class='card-title text-info'>Travel Experts</h4>
                <p class='card-text' style='color:grey;'>";
      $str.=$adr."<br>".$city.", ".$postal."</p>";
      $str.="<p class='card-text' style='color:DarkBlue;'>Phone: ".$phone."</p></div></div></div>";

      echo $str;
      echo showAgent($id);
    }
  }
}
//display agent information from database.
function showAgent(i)
{
  //initialize
  $str1="<div class='card' style='background-color: skyblue;'>
             <div class='card-body'>
              <h4 class='card-title text-center text-white'>Our Team of Professionals</h4>
              <div class='container'>
                <div class='row'>";
  // connect and check connection with a database
  $con = @mysqli_connect("localhost","root","","travelexperts") or die ("Database Connection failed!<br>");
  // select all the agent data of the same agency.
  $sql = "SELECT * FROM agents WHERE AgencyId=$i";
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result) > 0)
  {
    // loop to get information of each agent
      while($row = mysqli_fetch_assoc($result))
      {
        //get the nessesary information of one agent
          $fname=$row['AgtFirstName'];
          $lname=$row['AgtLastName'];
          $phone=$row['AgtBusPhone'];
          $email=$row['AgtEmail'];
          //output data of each agency
          $str2= <div class='col-xs-6 col-sm-4 col-md-3 col-lg-2'>
                  <div class='card border-0 mb-4' style='background-color: skyblue;'>
                    <img class='card-img-top rounded-circle' src='' alt='Agent Photo'>
                    <div class='card-body text-center text-white'>
                      <pan class='card-text'>";
          $str2.=$fame."</span>&emsp;<pan class='card-text'>".$lame."</span><p class='card-text'>";
          $str2.=$phone."</p><a href="#" class='card-link'>".$email."</a></div></div></div>";
      }

  }
}
 ?>
