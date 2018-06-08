<?php
//when the submit button is set, this function will be executed.
function sendemail()
{
  //get the information from customer's input
  $name=trim($_POST["Name"]);
  $phone=trim($_POST["Phone"]);
  $from=trim($_POST["Email"]);
  $message = '
    <html>
    <head>
      <title>Customer Message</title>
    </head>
    <body>
      <p>Here are the customer message!</p>
      <p>Customer Name:'.$name.'</p>
      <p>Contact phone number:'.$phone.'</p>
      <p>Contact email:'.$from.'</p>
      <p>Message: '.trim($_POST["Message"]).'</p>
    </body>
    </html>
    ';
  //set accourding to the server of the company
  require_once('PHPMailer/PHPMailerAutoload.php');

  $mail=new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='ssl';
  $mail->Host='smtp.travelexperts.com';
  $mail->Port='465';
  $mail->isHtml();
  $mail->Username='noreply@travelexperts.com';
  $mail->Password='123456';
  $mail->SetFrom($from);
  $mail->Subject='Customer Message';
  $mail->Body=$message;
  $mail->AddAddress('grpagent@travelexperts.com');
  //send email
  $mail->Send();
}


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
                <h4 class='card-title' style='color:DarkBlue;'>Travel Experts-".$city."</h4>
                <p class='card-text' style='color:grey;'>";
      $str.=$adr."<br>".$city.", ".$postal."</p>";
      $str.="<p class='card-text' style='color:DarkBlue;font-size:110%'><i class='fas fa-phone'></i>&nbsp;";
      $str.=$phone."</p></div></div></div></section>";

      echo $str;
      echo showAgent($id);
    }
  }
}

//display agent information from database.
function showAgent($i)
{  //html: the big card
  echo $str1="<div class='section'>
          <div class='card' style='background-color: skyblue;'>
             <div class='card-body'>
              <h4 class='card-title text-center text-white mb-2'>Our Team of Professionals</h4>
              <h6 class='card-subtitle text-center mb-3' style='color:DarkBlue;'>Select an agent from this location</h6>
                <div class='row'>";

  // connect and check connection with a database
  $con = @mysqli_connect("localhost","root","","travelexperts") or die ("Database Connection failed!<br>");
  // select all the agent data of the same agency.
  $sql = "SELECT * FROM agents WHERE AgencyId=".$i;
  $result = mysqli_query($con,$sql);
    // loop to get information of each agent
      while($row = mysqli_fetch_assoc($result))
      {
        //get the nessesary information of one agent
          $fname=$row['AgtFirstName'];
          $lname=$row['AgtLastName'];
          $phone=$row['AgtBusPhone'];
          $email=$row['AgtEmail'];
          //display the information of each agent in inner card
          $str2= "<div class='col-xs-5 col-sm-4 col-md-3 col-lg-2 mx-auto' style='padding:0;'>
                  <div class='card' style='background-color: skyblue; border:0;'>
                  <div class='text-center'>
                    <img class='card-img-top rounded-circle' src='image/agent.png' alt='Agent Photo' style='width:50%;'>
                    <div class='card-body text-white p-0 my-2'>
                      <span class='card-text' style='font-size:120%'>";
          $str2.=$fname."</span>&nbsp;<span class='card-text' style='font-size:120%'>".$lname."</span><p class='card-text mb-1'  style='color:DarkBlue;'>";
          $str2.=$phone."</p><a href='mailto:".$email."?subject=Customer Message' class='card-link'><i class='fas fa-envelope' style='font-size:150%'></i></a></div></div></div></div>";
          echo $str2;
      }

    echo $str3="</div></div></div></div></section>";
 }
?>
