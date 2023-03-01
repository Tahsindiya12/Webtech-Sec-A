<!DOCTYPE html>
<html>
<?php include 'templates/head.html';?>
<body>

<?php
include 'templates/Nav2.php';
session_start();
include 'templates/Nav2.php';
// define variables and set to empty values
$userErr = $passErr = "";
$username = $password = "";
$errCount = 0;
 echo "<h1> Welcome </h1>";
 ?>
<br>
<br>
</body>
<?php include 'templates/footer.php';?>
</html>