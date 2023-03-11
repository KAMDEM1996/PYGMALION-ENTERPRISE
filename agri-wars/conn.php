<?php
$con=new mysqli('localhost', 'root', '', 'agri-wars');

if(!$con){
  die("Connection failed" .mysqli_error($con));
}

//echo "connection successfully";

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $bd = new PDO("mysql:host=$servername;dbname=agri-wars", $username, $password);
  //set the PDO error mode to exception
  $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  }

?>


<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $ba = new PDO("mysql:host=$servername;dbname=agri-wars;charset=utf8", $username, $password);
  //set the PDO error mode to exception
} catch(PDOException $e) {
 die('Erreur:'.$e->getMessage());
  }

?>