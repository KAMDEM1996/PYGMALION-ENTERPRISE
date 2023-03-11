<?php
include_once('conn.php');

if(isset($_GET['SUPPRIMERid'])){
	$comment_id=$_GET['SUPPRIMERid'];

	$sql="DELETE FROM comments WHERE comment_id=$comment_id";
	//$result=mysqli_query($con,$sql);
	if($con->query($sql)==TRUE){
		echo "Suppression réussi!";
		header("location:notification.php");
	}else{
		die(mysqli_error($con));
	}

}

$con->close();

?>

