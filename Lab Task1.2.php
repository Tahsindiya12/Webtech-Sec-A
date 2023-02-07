<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form Lab task="Lab task.php" method="post">
        <label for="fname">First name</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
        <label for="lname">Last Name</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name ="email">
        
        <p>which semester are you Admission please select</p>   
        <input type="radio" id="Spring" name="fav_language" value="Spring">
  <label for="Spring">Spring</label><br>
  <input type="radio" id="Summer" name="fav_language" value="summer">
  <label for="summer">Summer</label><br>
  <input type="radio" id="Fall" name="fav_language" value="Fall">
  <label for="Fall">Fall</label><br>


    <label for="ID">Choose your ID : <br></label>
  <select id="ID" name="id" size="3"> 
    <option value="**-*****-1">**-*****-1</option>
    <option value="**-*****-2">**-*****-2</option>
    <option value="**-*****-3">**-*****-3</option>
  </select><br><br>


 <input type="submit" value="submit">

</form>




    
</body>
</html>