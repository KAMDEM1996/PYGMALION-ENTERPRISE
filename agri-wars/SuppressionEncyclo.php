<?php
session_start();
include_once('conn.php');
   if($_SESSION["autoriser"]!="oui") {
      header("location:Encyclopédie.php");
      exit();
   }

@$id=$_GET['Supid'];
if(isset($_GET['Supid'])){

          //TRUNCATE [TABLE] enseignant.
	$sqlb = "DELETE FROM encyclopedie WHERE id = " . $_GET['Supid'] ;
	if ($con->query($sqlb)==TRUE) {
		echo "Suppression réussi!";
		header("location:Encyclopédie.php");
	}else{
		die(mysqli_error($con));
	}

}


?>