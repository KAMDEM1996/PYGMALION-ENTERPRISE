<?php 
session_start();
include_once('conn.php');
   if(($_SESSION["autoriser"]!="oui") AND ($ide!=$_SESSION["identifi"])) {
      header("location:ActCompte.php");
      exit();
   }

     @$idt=$_GET['Activeid']; 
     $sqlb = "INSERT INTO formateurs ( idt, nom, prenom, contact, mail, pseudo, pays, ville, image, fichiers, formation, mdp)

            SELECT idt, nom, prenom, contact, mail, pseudo, pays, ville, image, fichiers, formation, mdp
               
               FROM teacher WHERE idt = " . $_GET['Activeid'] ;

             

$result=mysqli_query($con,$sqlb);
//<p>INSERT INTO table1 (colonne1, colonne2) SELECT col1, col2 FROM table 2</p>

	if($result){

		echo "ajout reussi!";
		header('location: ActCompte.php');

	}else{

		die(mysqli_error($con));
	}

?>