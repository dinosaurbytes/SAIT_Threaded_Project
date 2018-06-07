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
