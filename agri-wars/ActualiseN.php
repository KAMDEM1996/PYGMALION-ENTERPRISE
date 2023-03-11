<?php
   session_start();
   include 'conn.php';

   if($_SESSION["autoriser"]!="oui"){
      header("location:Acceuil.php");
      exit();
   }

$sql1="SELECT idU FROM user";
$result1 = mysqli_query($con,$sql1);
@$idU=$_GET['idU'];
@$ident = $_SESSION["identifiant"];

  @$idU=$_GET['Actualiserid'];
  @$nom = $_POST["nom"];
  @$prenom = $_POST["prenom"];
  @$contact = $_POST["contact"];
  @$mail = $_POST["mail"];
  @$pseudo = $_POST["pseudo"];
  @$pays = $_POST["pays"];
  @$ville = $_POST["ville"];
  @$Valider = $_POST["Valider"];
  @$success = "";
  @$erreur="";
  echo $idU;


   if(isset($Valider)){
      if(empty($nom)) $erreur="Nom laissé vide!";
      elseif(empty($prenom)) $erreur="Prénom laissé vide!";
      elseif(empty($contact)) $erreur="contact laissé vide!";
      elseif(empty($pseudo)) $erreur="Pseudo laissé vide!";
      elseif(empty($pays)) $erreur="Pays laissé vide!";
      elseif(empty($ville)) $erreur="Ville laissé vide!";

      else{
         include("conn.php");

         $mdp=md5($mdp);

  $sql = "UPDATE user SET nom='$nom',prenom='$prenom',contact='$contact',pseudo='$pseudo', 
  pays='$pays',ville='$ville' WHERE idU=". $_SESSION["identifiant"];

$result=mysqli_query($con,$sql);

  if($result){
    echo "mise à jour reussi!";
    header("location:Acceuil-3.php");

  }else{

    die(mysqli_error($con));
  }
}
        ?>

  <?php 

         }   
      

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agri-Wars</title>
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

          <li class="dropdown"><a href="#"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-house-fill" style="font-size: 50px;"></i></div><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="index.html" class="active"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-person-circle" style="font-size: 50px;"></i></div>Profil</a></li>
            </ul>
          </li>

          <li class="dropdown megamenu"><a href="#"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-headset" style="font-size: 50px;"></i></div> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">E-Learning Agricole</a>
                <a href="#">Marché</a>
                <a href="Encyclopedie.php">Encyclopédie</a>
                <a href="#">Forum</a>
              </li>
            </ul>
          </li>

          <li class="dropdown megamenu"><a href="#"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-patch-plus-fill" style="font-size: 50px;"></i></div> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Listes de quelques Ingénieurs-Agricoles</a>
                <a href="encycloAj.php">Inséré une Encyclopédie Agricole</a>
                <a href="#">Informations Agricoles</a>
              </li>
            </ul>
          </li>

          </li>         
          <li><a class="nav-link scrollto" href="Acceuil-3.php#contact"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-person-badge-fill"style="font-size: 50px;"></i></div></a></li>

          <li><a class="nav-link scrollto" href="#"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-bell-fill"style="font-size: 50px;"></i></div></a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
      <a class="btn-getstarted scrollto" href="#"><div style=" font-weight: bold; position: relative;" class="icon"><i class="bi bi-person-fill"style="font-size: 15px;"></i></div>Admin</a>
    </div>
  </header><!-- End Header --></p>


  <main id="main">
<!-- ======= inscription Section ======= -->
<section id="contact" class="contact">
<p><form class="box" action="" method="POST" enctype="multipart/form-data">

<div class="erreur"><?php echo $erreur ?></div>

    <div  class="row">
    <div class="col-md-6 form-group">
      <p><label for="nom">Nom</label></p>
      <p><input type="text" class="form-control is-valid" id="nom" placeholder="First name" name="nom" value="<?php echo $nom?>" /></p>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 form-group">
      <p><label for="prenom">Prénom</label></p>
      <p><input type="text" class="form-control is-valid" id="prenom" placeholder="Last name" name="prenom" value="<?php echo $prenom?>" /></p>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

     <div class="col-md-6 form-group">
      <p><label for="contact">Contact</label></p>
      <p><input type="phone" class="form-control is-valid" id="contact" placeholder="Contact" name="contact" value="<?php echo $contact?>" /></p>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

      <div class="col-md-6 form-group">
      <p><label for="pseudo">Pseudo</label></p>
      <p><input type="text" class="form-control is-valid" id="pseudo" placeholder="Pseudo" name="pseudo" value="<?php echo $pseudo?>" /></p>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 form-group">
      <p><label for="pays">Pays</label></p>
      <p><input type="text" class="form-control is-valid" id="pays" placeholder="Pays" name="pays" value="<?php echo $pays?>" /></p>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 form-group">
      <p><label for="ville">Ville</label></p>
      <p><input type="text" class="form-control is-valid" id="ville" placeholder="Ville" name="ville" value="<?php echo $ville?>" /></p>
      <div class="valid-feedback">
        Looks good!
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
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