/*
I'm still not too sure about the file heading format. If you guys have any ideas, please feel free to 
modify this heading. Also go ahead and put your js functions on this file!



Author: Fantastic 4 (Jason, Brian, Lindsay, Sunghyun)
Description: this is where we define Custom javascript functions
Created: 2018-06-05


*/




function display_destination() 
{
  /**
    This function will only display row of the searched destination.
    Author: Sunghyun Lee
  */

  // Declare variables
  var myInput = document.getElementById("searchInput");
  var upperInputValue= myInput.value.toUpperCase();
  var myTable = document.getElementById("packageTable");
  var rows = myTable.getElementsByTagName("tr");

  // Loop through rows and loop through td's. If there is any match, display the row. Otherwise, hide.
  
  for (var i = 1; i < rows.length; i++) 
  { var match = false;
    var datas = rows[i].getElementsByTagName("td");
    for (var j=0; j<datas.length;j++)
    { 
      if (datas[j].innerHTML.toUpperCase().indexOf(upperInputValue) > -1) 
        match=true;      
    }
    if (match)
      rows[i].style.display = "";
    else
      rows[i].style.display = "none";

  }
  // end of for loop
}


//Purpose: OOSD Threaded Project Phase 1
//Author: Lindsay
//Date:Jun 05,2018
//This function is to validate the message form of the contact page.
function valContact(myform)
{   
  var str; 
  var patt; 
  var result; 
  var error;
  for (var x = 0; x < myform.length; x++)
  {
    //check whether the input fields are all filled out; if dosen't, show the error message.
    if (myform[x].value == "" || null)
    {
      error= 'Note: '+ myform[x].name + ' is required.';
      document.getElementById('error').innerHTML=error;
      return false;
    }
    //format the value of the field; if it is not a valid email address, show an error message.
    else if (myform[x].name == "Email")
    {
      str=myform[x].value;
      patt = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            result=patt.test(str.toLowerCase());
        if (!result)
      {
        error="Note: Please enter a valid email address.";
        document.getElementById('error').innerHTML=error;
        return false;
      }
    }
    //format the value of the field; if it is not a valid phone number, show an error message.
    else if (myform[x].name == "Phone")
    {
      str=(myform[x].value).replace(/\D/g, "");
      patt =/^[2-9]\d{2}[2-9]\d{2}\d{4}$/;
            result=patt.test(str.toLowerCase());
        if (!result)
      {
        error="Note: Please enter a valid phone number.";
        document.getElementById('error').innerHTML=error;
        return false;
      }
    }
  }
}
