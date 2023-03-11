<?php 
session_start();
include_once('conn.php');
   if(($_SESSION["autoriser"]!="oui") AND ($ide!=$_SESSION["identifi"])) {
      header("location:ActCompte.php");
      exit();
   }

     @$idf=$_GET['Activeid']; 
     $sqla = "INSERT INTO user ( idf, nom, prenom, contact, mail, pseudo, pays, ville, image, fichiers, mdp)

            SELECT idf, nom, prenom, contact, mail, pseudo, pays, ville, image, fichiers, mdp
               
               FROM free WHERE idf = " . $_GET['Activeid'] ;

             

$result=mysqli_query($con,$sqla);
//<p>INSERT INTO table1 (colonne1, colonne2) SELECT col1, col2 FROM table 2</p>

	if($result){

		echo "ajout reussi!";
		header('location: ActCompte.php');

	}else{

		die(mysqli_error($con));
	}

?>