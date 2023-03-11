<?php
session_start();
include_once('conn.php');
   if($_SESSION["autoriser"]!="oui") {
      header("location:ConnectAd.php");
      exit();
   }

   if(date("H")<18)
      $bienvenue="Bonjour et bienvenue ".
      $_SESSION["prenomNom"].
      " dans votre espace personnel";
   else
      $bienvenue="Bonsoir et bienvenue ".
      $_SESSION["prenomNom"].
      " dans votre espace personnel";

$sql="SELECT idAd FROM admin";
$result = mysqli_query($con,$sql);
@$idAd=$_GET['idAd'];
$ide = $_SESSION["identifi"]; 


@$cheminEtNomTemporaire = $_FILES['image']['tmp_name'];

@$extension = substr (strrchr ($_FILES['image']['name'], "."), 1);

@$image = $_POST['libelle'].'.'.$extension;

@$cheminEtNomDefinitif = 'produit/'.$image;

@$moveIsOk = move_uploaded_file($cheminEtNomTemporaire, $cheminEtNomDefinitif);

if($moveIsOk) {
  
  $message = "Le fichier a été correctement uploader dans".$cheminEtNomDefinitif;

}else{
  
  $message = "Suite à une erreur, le fichier n'a pas uploader dans ".$cheminEtNomDefinitif;
}



@$Valider=$_POST['Valider'];

if(isset($_POST['Valider'])){

  @$libelle=$_POST['libelle'];
  @$codeprod=$_POST['codeprod'];
  @$qteprod=$_POST['qteprod'];
  @$puprod=$_POST['puprod'];
  @$categorie=$_POST['categorie'];

  $sqlq = "INSERT INTO produit(codeprod, libelle, qteprod, puprod, categorie, image) Values( '$codeprod','$libelle','$qteprod', '$puprod', '$categorie', '$cheminEtNomDefinitif' ) ";

  $resultq=mysqli_query($con,$sqlq);
      
  if($resultq){
    echo "ajout reussi!";
    header('location: AjoutProd.php');
        }else{

    die(mysqli_error($con));
  }
}

      
?>




<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Ajouter Produits</title>
     <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->



</head>
<body>

     <p>
<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0" style=" font-weight: bold;">
    <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 style=" font-weight: bold; color: green;">Agri-Wars<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="dropdown"><a href="#"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-house-fill" style="font-size: 50px;"></i></div> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="Admin.php"> Acceuil </a></li>
            </ul>
          </li>

          <li class="dropdown megamenu"><a href="#"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-bell-fill" style="font-size: 50px;"></i></div> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="notification.php"> Notification Général</a>
                <a href="Encyclopédie.php"> Notification d'Insertion des Encyclopédies </a>
                <a href="Encadreur.php"> Notification d'Insertion des Encadreurs</a>
              </li>
            </ul>
          </li>
          </li> 

          <li><a class="nav-link scrollto" href="contact.php"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-person-badge-fill"style="font-size: 50px;"></i></div></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
      <a class="btn-getstarted scrollto" href="deconnexion.php"><span> Deconnecter </span></a>
    </div>
  </header><!-- End Header --></p>

  <main id="main">

<p><section><p><div></div></p>
<p><div></div></p>
<p><div class="col-lg-3 col-md-6 footer-links"><h6 style=" font-weight: bold;"><?php echo $bienvenue?></h6></div></p>
<p><div></div></p></section></p>

<div></div>

    <p><section id="onfocus" class="onfocus">
 <form method="POST" enctype="multipart/form-data">

<p><div class="form-group">
<p><label >Code produit</label></p>
<input type="text" class="form-control"  id="codeprod" name="codeprod" aria-describedby="nameHelp" placeholder="Nom du Fichier à enrégistrer!">
<small id="nameHelp" class="form-text text-muted"> Code produit.</small>
</div></p>

<p><div class="form-group">
<p><label >Libelle Produit</label></p>
<input type="text" class="form-control"  id="libelle" name="libelle" aria-describedby="nameHelp" placeholder="Libelle à enrégistrer!">
<small id="nameHelp" class="form-text text-muted"> Libelle Produit.</small>
</div></p>

<p><div class="form-group">
<p><label >Quantite Produit</label></p>
<input type="text" class="form-control"  id="qteprod" name="qteprod" aria-describedby="nameHelp" placeholder="Quantité Produits à enrégistrer!">
<small id="nameHelp" class="form-text text-muted"> Qte Produit.</small>
</div></p>

<p><div class="form-group">
<p><label >Prix Unitaire Produit</label></p>
<input type="text" class="form-control"  id="puprod" name="puprod" aria-describedby="nameHelp" placeholder="Prix Unitaire à enrégistrer!">
<small id="nameHelp" class="form-text text-muted"> Pu Produit.</small>
</div></p>

<p><div class="form-group">
<p><label >Catégorie Produit</label></p>
<input type="text" class="form-control"  id="categorie" name="categorie" aria-describedby="nameHelp" placeholder="Catégorie à enrégistrer!">
<small id="nameHelp" class="form-text text-muted"> catégorie Produit.</small>
</div></p>

<p><div class="form-button">
<p><label >Image Produit</label></p>
<p><input type="file" name="image" id="image" value="<?php echo $cheminEtNomDefinitif?>">
<small id="nameHelp" class="form-text text-muted"> image article.</small></p>
</div></p>

<div class="form-button">
<button type="Submit" name="Valider" class="btn btn-primary">Valider</button>
</div></p>

</form> 
    </section><!-- End On Focus Section --></p>


<p><section> <div class="container-fluid p-0" data-aos="fade-up">
<p><div id="u-table-responsive" class="u-table-responsive">
 <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"> 
 <div class="u-expanded-width u-table u-table-responsive u-table-1" style=" position:  right; border:#000000 1px  ">
<div class="container" style="overflow-x: scroll; overflow-y:  hidden; border:#000000 1px  " >

  <caption><h3>Tableau Produit</h3></br></caption> 
<table class="table" style="background-color:white" border="0">

   <colgroup>
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
              
            </colgroup>

  <thead>

    <tr style="height: 21px; font-weight: bold;">
      <th  scope="col">#</th>
      <th  scope="col">code</th>
      <th  scope="col">libelle</th>
      <th  scope="col">quantité</th>
      <th  scope="col">prix unitaires</th>
      <th  scope="col">categorie</th>
      <th  scope="col">image</th>      
      
    </tr>
  </thead>
  <tbody class="u-table-body">



    <?php

$sql="SELECT idProd, codeprod, libelle, qteprod, puprod, categorie, image FROM produit";
$result = mysqli_query($con,$sql);

if($result){
  while($row=mysqli_fetch_assoc($result)){

$idProd=$row['idProd'];
$codeprod=$row['codeprod'];
$libelle=$row['libelle'];
$qteprod=$row['qteprod'];
$puprod=$row['puprod'];
$categorie=$row['categorie'];
$image=$row['image'];

echo ' <tr style="height: 85px; font-weight: bold;">
      <th style="background-color:white" scope="row">'.$idProd.'</th>
      <th style="background-color:white" scope="row">'.$codeprod.'</th>
      <th style="background-color:white" scope="row">'.$libelle.'</th>
      <th style="background-color:white" scope="row">'.$qteprod.'</th>
      <th style="background-color:white" scope="row">'.$puprod.'</th>
      <th style="background-color:white" scope="row">'.$categorie.'</th>
      <th style="background-color:white" scope="row">'.$image.'</th>
      </tr>';

  }
  
}

    ?>

  </tbody>

</table>
</div></div></div></div></section></p>


   <!-- ======= About Section ======= -->
   <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Contactez-nous!</p>
        </div>

      </div>

      <div class="map">
        <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=cameroun/douala-bonamoussadi&amp;t=k&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>
      </div><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Infos</h3>
              <p>Nos INFORMATIONS.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Douala-Bonaberi, Cameroun</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>AgriWars@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+237 620-790-781</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
   </section><!-- End About Section -->

  <!-- ======= Footer ======= -->
  <p><footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Agri-Wars</h3>
              <p>
                Douala-Bonaberi <br>
                BP 255, CMR<br><br>
                <strong>Phone:</strong> +237 620-790-781<br>
                <strong>Email:</strong> AgriWars@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Pages</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Menu</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">A Propos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Actualité Agricole</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Forum Agricole</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Suivi </a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Formation</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Vente d'encyclopédie</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Sensibilisation pour une planète verte</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4> Newsletter</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Agri-Wars</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">PYGMALION-ENTERPRISE</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>




      </div>
    </div>

</main><!-- End #main -->

  </footer><!-- End Footer --></p>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

      </div>
    </div>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>
</html>