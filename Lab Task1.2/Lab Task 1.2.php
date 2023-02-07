<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $fav = $_POST['fav_language'];

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    echo "Hi $fname $lname <br> " ;
    echo " Your email is $email. <br><br>";
    echo "your admission semester is $fav <br><br>";
  }
 $aDoor = $_POST['checkbox'];
  if(empty($aDoor)) 
  {
    echo("You didn't select any language.");
  } 
  else 
  {
    $N = count($aDoor);

    for($i=0; $i < $N; $i++)
    {
      
      echo($aDoor[$i] . " <br>");
      
    }

  }
  $ID = $_POST['id'];
  if ($_SERVER['REQUEST_METHOD']== 'POST'){
  
    echo "<br>Thank you your ID format $ID </br>";
  }
 
?>
