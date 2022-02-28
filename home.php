
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rosnac investment company main page</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
</head>
<body id="body-pi">

<?php require('herokudb.php');
?>
  <header>
    <br>
    <br>
    <br>

  
    </div>
    <div class="sticky">
      <div class="menu">
        <div class="menu-box">

          <a id="pins-menu" class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"> 
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </a>
         
        </div>
      </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <div class="navbar-logo">

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
          <ul class="menu-bar">

            <li><a href="Activities.php">Activities</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="#" onclick="Notdue()">Withdraw</a></li>
            <li><a  href="plan.php">Renew subscription</a></li>
            <li><a href="policy.html">policy</a></li>
            <li><a href="how it works.php">How it works</a></li>
            <li><a  href="about us.html">about us</a></li>
            <li><a  href="contact.html">Contact us</a></li>
            <li><a  href="logout.php">Logout</a></li>
          </ul>
    
        </div>

  </header>
  <section>

  <div class="keys">
                
        <h1 class="my-5">Hi, <?php echo $_SESSION['first_name'] ?> <b></b>Welcome to our site.</h1>
        <br>
        <h3> post will be dropping here on a regular</h3>
    
        <p>We are ever ready to give value to your money</p>
    
      </div>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/out1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/out2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/out3.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>

  </section>
<?php
require("plan.php");
?>

  </section>
  <main>
    <ul id="footer1">
     <li><a href="#">blog</a></li>
     <li><a href="#">about us</a></li>
     <li><a href="#">policy</a></li>
     <li><a href="#">investment guides</a></li>
    </ul>
  </main>
<footer>copyright</footer>
  

  
<script src="script.js"></script>
<script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>