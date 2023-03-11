<?php
include_once('conn.php');

if(isset($_GET['Supid'])){
	$idProd=$_GET['Supid'];

	$sql="DELETE FROM produits WHERE idProd=$idprod";
	//$result=mysqli_query($con,$sql);
	if($con->query($sql)==TRUE){
		echo "Suppression réussi!";
		header("location:SuppProd.php");
	}else{
		die(mysqli_error($con));
	}

}

$con->close();

?>