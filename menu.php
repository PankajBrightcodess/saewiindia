
<?php
        session_start();
        if(!(isset($_SESSION['email']))){
            header('location:login.php');
        }
        include 'database.php';


?>
<section class="contact-section">
  <div class="container">
    <div class="row ">
      <div class="col-md-4 so">
        <a href="" title="" style="color: white" > <i class="fa fa-phone text" ></i>&nbsp; : 7362803453 / 8294823141</a>
      </div>
      <div class="col-md-4 so" >
        <a href="mailto:info@saewiindia.com" style="color: white" ><i class="fa fa-envelope text"></i> &nbsp;: info@saewiindia.com</a>
      </div>
      <div class="col-md-4">
         <div class="social" style="padding-left: 30px">
          <a href="https://web.whatsapp.com/" target="_blank" title="7070990845"><img  src="images/whatsapp.png" alt="whatsapp" onclick="whatsapp()"></a>
          <a href="https://www.facebook.com/saewiindia/" target="_blank"><img src="images/facebook.png" alt="facebook"></a>
          <a href="https://twitter.com/saewiindia/" target="_blank"><img src="images/twitter.png" alt="twitter"></a>
          <a href="https://www.linkedin.com/in/saewiindia/" target="_blank"><img src="images/linkedin.png" alt="linkedin"></a>
          <a href="https://plus.google.com/" target="_blank"><img src="images/google-plus.png" alt="google-plus"></a>
        </div>
      </div>
    </div>
  </div>
</section>

 <nav class="navbar navbar-expand-lg navbar-light"  style="background:#fff;">
  <div class="container">
  
      <a class="navbar-brand" href="index.php">
      <div class="row">
        <div class="col-md-6 text-center">
        <img class="logo" src="images/logo.jpeg" alt="logo">
        </div>
         <div class="col-md-6 logo_brand">
           <b>SAEWI INDIA</b><p>(SOCIETY AGRICULTURE AND ENVIRONMENT WELFARE INDIA)</p><p> Opposite ST. Patrik chruch, Sisai Road Gumla, Jharkhand</p></a>
         </div>
  </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto menu">
          <li class="nav-item ">
            <li class="nav-item "> <a class="nav-link" href="index.php" style="color: black">Home</a> </li>
            <li class="nav-item "> <a class="nav-link" href="about.php" style="color: black">About</a> </li>
          </li>
          <li class="nav-item"> <a class="nav-link" href="gallery.php" style="color: black">Galery </a> </li>
          <li class="nav-item  dropdown">
            <a class="nav-link dropdown-toggle" href="service.php" id="navbardrop" data-toggle="dropdown" style="color: black">Services</a>
            <div class="dropdown-menu">
              <a class="dropdown-item text" href="service.php" >Livelihood</a>
              <a class="dropdown-item text" href="service.php">Solar Energy</a>
              <a class="dropdown-item text" href="service.php">Agriculture</a>
              <a class="dropdown-item text" href="service.php">Rain Water Harvesting</a>
            </div>
          </li>              
          <li class="nav-item"> <a class="nav-link" href="join.php" style="color: black">Career </a> </li>
          <li class="nav-item"> <a class="nav-link" href="contact.php" style="color: black">Contact </a> </li>
          
          <li class="nav-item"> <a href="donate.php"><button type="button" class="btn btn-sm btn-success">Donate</button></a></li>
          <li class="nav-item"> <a class="nav-link" href="registrationform.php" style="color: black">Registration Form </a> </li>
          <li class="nav-item"> <a class="nav-link" href="certificateform.php" style="color: black">Certificate</a> </li>
        </ul>
      </div>
  </div>
</nav>