<?php
include_once('conn.php');

if(isset($_GET['SUPPRIMERid'])){
	$idAd=$_GET['SUPPRIMERid'];

	$sql="DELETE FROM admin WHERE idAd=$idAd";
	//$result=mysqli_query($con,$sql);
	if($con->query($sql)==TRUE){
		echo "Suppression réussi!";
		header("location:GereAd.php");
	}else{
		die(mysqli_error($con));
	}

}

$con->close();

?>