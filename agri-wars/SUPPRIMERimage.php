<?php
session_start();
include_once('conn.php');
   if($_SESSION["autoriser"]!="oui") {
      header("location:publicite.php");
      exit();
   }

@$idIM=$_GET['SUPPRIMEid'];
if(isset($_GET['SUPPRIMEid'])){

          //TRUNCATE [TABLE] Utilisateurs.
	$sql = "DELETE FROM publicite WHERE idIM = " . $_GET['SUPPRIMEid'] ;
	if ($con->query($sql)==TRUE) {
		echo "Suppression réussi!";
		header("location:publicite.php");
	}else{
		die(mysqli_error($con));
	}

}


?>