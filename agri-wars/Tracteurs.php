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
@$ide = $_SESSION["identifi"]; 




      
?>




<!DOCTYPE html>
<html style="font-size: 16px;" class="no-js" lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Liste de Proprietaire de Tracteur</title>
  
<link rel="stylesheet" href="css/foundation.css" />
<script src="js/modernizr.js"></script>

<script type="text/javascript">
//When document is ready: this gets fired before body onload <img src='http://blogs.digitss.com/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley' />
$(document).ready(function(){
//Write on keyup event of keyword input element
$("search").keyup(function(){
//When value of the input is not blank
if( $(this).val() != "")
{
//Show only matching TR, hide rest of them
$("#table tbody tr").hide();
$("#table td:contains-ci('" + $(this).val() + "')").parent("tr").show();
}
else
{
//When there is no input or clean again, show everything back
$("#table tbody tr").show();
}
});
});
//jQuery expression for case-insensitive filter
$.extend($.expr[":"],
{
"contains-ci": function(elem, i, match, array)
{
return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
}
});
</script>

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
              <li><a href="Admin.php"> Page Acceuil </a></li>
            </ul>
          </li>

          <li class="dropdown megamenu"><a href="#"><div style=" font-weight: bold; color: Black;" class="icon"><i class="bi bi-people" style="font-size: 50px;"></i></div> <i class="bi bi-chevron-down dropdown-indicator"></i></a>

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

<div>
  <p><label >Ajouter Propriétaires</label></p>
  <button class="btn btn-primary"><a href="AjouterPropriétairesAD.php" class="text-light">Ajouter Propriétaires de Tracteur</a></button>
</div>


<!-- ======= Section ======= -->
<section  class="container-fluid p-0">

 <p><div><span><h5 href="#" class="btn btn-secondary"> <samp>Cellule des Utilisateurs Formateurs.</samp> </h5></span></div></p>   

<div class="container-fluid p-0" data-aos="fade-up">
<p><div class="card-group" >
<?php                         
include("conn.php"); 
$sqlb = " SELECT * FROM engins  ";
$resulte = mysqli_query($con,$sqlb);
$acte = 0; @$id=$_GET['id'];
foreach ($resulte as $keys =>$values ) {
$acte++; ?>

  <div class="card  <?php if($acte==1){echo 'active';} ?>" >
    <img class="card-img-top" values="<?php echo $keys;?>" src="<?php echo $values["image"]; ?>" alt="Card image cap" style="width: 18rem; border-top-width: 5px;">
    <div class="card-body" style="color: black; font:bold; font-weight: bold; ">
      <h5 class="card-title"><?php echo $values["nom"];?></h5>  
      <h5 class="card-title"><?php echo $values["prenom"];?></h5>
      <h5 class="card-title"><?php echo $values["contact"];?></h5> 
       <h5 class="card-title"><?php echo $values["ville"];?></h5>  
       <h5 class="card-title"><?php echo $values["engins"];?></h5>
       <h5 class="card-title"><?php echo $values["prixlocation"];?></h5>    
      <?php } ?>
    </div>
  </div>
</div></p>
<br/><br/><br/><br/> 

</Section><!-- End On Focus div --></p>


<p><section> <div class="container-fluid p-0" data-aos="fade-up">
<div class="container" style="overflow-x: scroll; overflow-y:  hidden; border:#000000 1px  " >
<table class="table" style="background-color:lightcyan;" border="0">
   <colgroup>
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
              
            </colgroup>

  <thead>

    <tr style="height: 21px; font-weight: bold;">
      <th  scope="col">#</th>
      <th  scope="col">nom</th>
      <th  scope="col">prenom</th>
      <th  scope="col">contact</th>
      <th  scope="col">ville</th>
      <th  scope="col">engins</th>
      <th  scope="col">prix location</th>
      <th  scope="col">Image</th>     
      
    </tr>
  </thead>
  <tbody class="u-table-body">



<?php

//$rech=$_POST['t_rechercher'];

$sql="SELECT * FROM engins";
$result = mysqli_query($con,$sql);

if($result){
  while($row=mysqli_fetch_assoc($result)){

$id=$row['id'];
$nom=$row['nom'];
$prenom=$row['prenom'];
$contact=$row['contact'];
$ville=$row['ville'];
$engins=$row['engins'];
$prixlocation=$row['prixlocation'];
$image=$row['image'];

echo ' <tr style="height: 85px; font-weight: bold;">
      <th style="background-color:white" scope="row">'.$id.'</th>
      <th style="background-color:white" scope="row">'.$nom.'</th>
      <th style="background-color:white" scope="row">'.$prenom.'</th>
      <th style="background-color:white" scope="row">'.$contact.'</th>
      <th style="background-color:white" scope="row">'.$ville.'</th>
      <th style="background-color:white" scope="row">'.$engins.'</th>
      <th style="background-color:white" scope="row">'.$prixlocation.'</th>
      <th style="background-color:white" scope="row">'.$image.'</th>
<td> <button class="btn btn-danger"><a href="supprimeTract.php? SUPPRIMERid='.$id.' " class="text-light">Supprimer</a></button> </td>
      </tr>';

  }
  
}

    ?>

  </tbody>

</table>
</div></section></p>



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
  <script src="js/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
$(document).foundation();
</script>

</body>
</html>