<?php
session_start();
include_once('conn.php');
   if($_SESSION["autoriser"]!="oui") {
      header("location:SuppCompte.php");
      exit();
   }

@$idU=$_GET['Supid'];
if(isset($_GET['Supid'])){

          //TRUNCATE [TABLE] Utilisateurs.
	$sql = "DELETE FROM user WHERE idU = " . $_GET['Supid'] ;
	if ($con->query($sql)==TRUE) {
		echo "Suppression réussi!";
		header("location:SuppCompte.php");
	}else{
		die(mysqli_error($con));
	}

}


?>

