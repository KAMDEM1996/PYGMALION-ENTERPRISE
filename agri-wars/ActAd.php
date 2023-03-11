<?php
   session_start();
   include 'conn.php';

   if($_SESSION["autoriser"]!="oui"){
      header("location:Acceuil-3.php");
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

$sql1="SELECT idAd FROM admin";
$result1 = mysqli_query($con,$sql1);
@$ids=$_GET['idAd'];
//$ident = $_SESSION["identifiant"];



 @$idAd=$_GET['Actualiserid'];
@$Valider=$_POST['Valider'];

echo $idAd;
  @$NomAd = $_POST["NomAd"];
  @$PrenomAd= $_POST["PrenomAd"];
  @$mdp = $_POST["mdp"];
  @$repass=$_POST["repass"];
  @$Valider = $_POST["Valider"];
  @$success = "";
  @$erreur="";

   if(isset($Valider)){
      if(empty($NomAd)) $erreur="Nom laissé vide!";
      elseif(empty($PrenomAd)) $erreur="Prénom laissé vide!";
      elseif(empty($mdp)) $erreur="Mot de passe laissé vide!";
      elseif($mdp!=$repass) $erreur="Mots de passe non identiques!";

      else{
         include("conn.php");

         $mdp=md5($mdp);

  $sql = "UPDATE admin SET NomAd='$NomAd',PrenomAd='$PrenomAd',mdp='$mdp' WHERE idAd=". $_SESSION["identifiant"];

$result=mysqli_query($con,$sql);

  if($result){
    echo "mise à jour reussi!";
    header("location:Admin.php");

  }else{

    die(mysqli_error($con));
  }
}
        ?>
<script class="script" type="text/javascript"> alert ("veuillez s'il vous plait nous contacte en cas de difficulté technique! Merci."); </script>
  <?php 

         }   
      

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Modifier Profil </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="page_type" content="np-template-header-footer-from-plugin">

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


      <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Site1",
    "logo": "images/logoTec.PNG",
    "sameAs": [
        "https:"https://api.orangecameroun.com/send?phone=%2B#150*11*237697276646&amp*17000#;fbclid=IwAR2LVYXH2lEPMPuIb7xvArj19yMn7AfOM4vFkTH0WdoVxWhnbChoC--7x3U",
        "https://www.facebook.com/thermomecanic",
        "https://www.twiter.com/thermomecanic",
        "mailto:info@thermomecanicsenergy.com?subject=Envoyer%20un%20mail%20.&cc=info%40thermomecanicsenergy.com",
        "mailto:tecsarl@yahoo.fr"
    ]
}</script>

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
              <li><a href="Admin.php">Acceuil </a></li>
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
      <div class="container-fluid p-0" data-aos="fade-up">
        <div class="row g-0">

          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100">
              <p class="fst-italic">
                <?php echo'
              <a href="AjoutAdmin.php?Ajoutid='.$idAd.'"><span>Ajouter un Profil</span></a><br/><br/> '?><br/><br/></p>

            </div>
          </div>

          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100">
              <p class="fst-italic">Veuillez selectionnez un élément.
              </p>
              <ul style=" font-weight: bold;">
                <li><i class="bi bi-check-circle"><a href="ActCompte.php"><span>  Activation Des Comptes </span></a></i></li>
                <li><i class="bi bi-check-circle"><a href="SuppCompte.php"><span>  Suppression Des Comptes </span></a></i></li>
                <li><i class="bi bi-check-circle"><a href="ModCompte.php"><span> Modification Des Comptes  </span></a></i></li>
              </ul><br/>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End On Focus Section --></p>

<!-- ======= inscription Section ======= -->
<section id="contact" class="contact">
<p><form class="box" action="" method="POST" enctype="multipart/form-data">

<div class="erreur"><?php echo $erreur ?></div>

    <div  class="row">
    <div class="col-md-6 form-group">
      <p><label for="nom">Nom</label></p>
      <p><input type="text" class="form-control is-valid" id="NomAd" placeholder="First name" name="NomAd" value="<?php echo $NomAd?>" /></p>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 form-group">
      <p><label for="prenom">Prénom</label></p>
      <p><input type="text" class="form-control is-valid" id="PrenomAd" placeholder="Last name" name="PrenomAd" value="<?php echo $PrenomAd?>" /></p>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 form-group">
      <p><label for="mdp">Mot de pass</label></p>
          <p><input type="password" class="box-input" name="mdp" id="mdp" placeholder="Mot de passe" value="<?php echo $mdp?>" /></p>
       <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 form-group">
      <p><label for="repass">Mot de pass</label></p>
          <p><input type="password" name="repass" placeholder="Confirmer Mot de passe" /><br /></p>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>


    <div class="col-md-6 form-group">
    <div class="form-check mb-3">
         <label class="form-check-label">
         <input type="checkbox" onclick="myFunction()">Show Password
         <script> function myFunction() {
                                var x = document.getElementById("mdp");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
         </script>
         </label>
      </div>
      </div>


<p><div class="col-md-6 form-group"><div class="text-left mt-auto"><P><input type="submit" name="Valider" value="Valider" class="box-button" /></P>
</div>

<div class="success"><?php echo $success ?></div></div></p>

</form></p>
</section><!-- End inscription Section -->



    <p><!-- ======= Contact Section ======= -->
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
    </section><!-- End Contact Section -->
</p>


</main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

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

  </footer><!-- End Footer -->

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