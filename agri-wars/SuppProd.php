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

$sql="SELECT idAd FROM Admin";
$result = mysqli_query($con,$sql);
@$idAd=$_GET['idAd'];
//$ide = $_SESSION["identifi"];
      
?>




<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Suppréssion des comptes</title>
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

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Agri-Wars<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="dropdown"><a href="#"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-house-fill" style="font-size: 50px;"></i></div> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="Admin.php"> Page Acceuil </a></li>
            </ul>
          </li>

          <li class="dropdown megamenu"><a href="#"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-people" style="font-size: 50px;"></i></div> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="UserSuperPlan.php">Utilisateurs Super-Plan</a>
                <a href="UserPremium.php">Utilisateurs Prémium</a>
                <a href="Userfree.php">Utilisateurs Free</a>
              </li>
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
          <li><a class="nav-link scrollto" href="Admin.php#contact"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-person-badge-fill"style="font-size: 50px;"></i></div></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
      <a class="btn-getstarted scrollto" href="deconnexion.php"><span> Deconnecter </span></a>
    </div>
  </header><!-- End Header --></p>

  <main id="main">

<p><section><p><div></div></p>
<p><div></div></p>
<p><div class="col-lg-3 col-md-6 footer-links"><h6><?php echo $bienvenue?></h6></div></p>
<p><div></div></p></section></p>

<!-- ======= Section ======= -->
<p><section  class="container-fluid p-0">

<p><div><span><h5 href="#" class="btn btn-secondary"> <samp>Cellule des Produits .</samp> </h5></span></div></p>   

<div class="container-fluid p-0" data-aos="fade-up">
<p><div class="card-group" >
<?php                         
include("conn.php"); 
$sqla = " SELECT * FROM produit WHERE idprod ";
$resulte = mysqli_query($con,$sqla);
$acte = 0; @$idprod=$_GET['idProd'];
foreach ($resulte as $keys =>$values ) {
$acte++; ?>

  <div class="card  <?php if($acte==1){echo 'active';} ?>" >
    <img class="card-img-top" value="<?php echo $keys;?>" src="<?php echo $values["image"]; ?>" alt="Card image cap" style="width: 18rem; border-top-width: 5px;">
    <div class="card-body" style="color: black; font:bold; font-weight: bold; ">
      <h5 class="card-title">Libellé:<?php echo $values["libelle"];?></h5>  <h5 class="card-title">Qté Produit:<?php echo $values["qteprod"];?></h5>
       <h5 class="card-title">PU Produit:<?php echo $values["puprod"];?></h5> 

      <p  style="font-size: 15px; color: black; font:bold; font-weight: bold; " class="card-text">Catégorie: <?php echo $values["categorie"];?>.</p>

       <h5 class="card-title">#<?php echo $values["idProd"];?> <samp></samp> <small class="text-muted"><?php 
       echo '<button class="btn btn-danger"><a href="SuppressionProd.php? Supid='.$values["idProd"].' "class="text-light"><span> Supprimer Elément Définitivement </span></a></button>';  }  ?></small></h5>  

    </div>
  </div>
</div></p>
<br/><br/> 


<script > 
  function download(filename, textInput){ 
var element = document.createElement('a')
element.setAttribute('href', 'data:text/plain; charset=utf-8, ' + encodeURIComponent(textInput));
element.setAttribute('download', filename);
document.body.appendChild(element);
element.click();

  }
   document.getElementById("btn")
   .addEventListener("click", function(){
              var text = document.getElementById("$fichiers").value;
              var filename = "output.txt";
              download(filename, text);


   }, false );

</script>


</section><!-- ======= Section ======= --></p>


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

    <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>


</body>
</html>