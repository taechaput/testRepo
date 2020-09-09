<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Figure Store</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="user.php"><img src="photo/4.png" alt="" width="150" height="90"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="user.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="BAND.php">Figure STORES</a></li>                                                  
                           <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            
                          <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <?php
              session_start();
              if($_SESSION['Uuser']=='')
              {
                header("location:error2.php");
              }
              else
              {
                $connect = mysqli_connect("localhost","root","123456789","BAND");
                $sql = 'SELECT Username from account where Username = "'.$_SESSION["Uuser"].'"';
                $result = mysqli_query($connect,$sql);
                echo "Hi ! Welcome ... ". $_SESSION["Uuser"];
              }
               ?>
          </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="myorder.php">My Order</a></li>
                                    <li class="nav-item"><a class="nav-link" href="updateaccount.php">Update Account</a></li>  
                                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>  
                            </ul>
                            </li> 
                          </ul>
                        <div class="right-button">
                        </div> 
                    </div>

                </div>
            </nav>

        </div>
    </header>
    <!--================Header Menu Area =================-->
<body background="img/background/BG4.jpg">
    <!--================Home Banner Area =================-->
      <section class="home_banner_area">
      <img src="/img/banner/2.jpg" alt=""/>
        <div class="social_area">
            <h4>
                <a href="https://www.instagram.com/"><i class="ti-instagram"></i>Instagram</a>
            </h4>
            <div class="round"></div>
            <h4>
                <a class="twitter" href="https://twitter.com/"><i class="ti-twitter"></i>Twitter</a>
            </h4>
            <div class="round"></div>
            <h4>
                <a href="https://www.facebook.com/"><i class="ti-facebook"></i>Facebook</a>
            </h4>
            <div></div></div>
            <section class="contact-section area-padding">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div><img src = "img/project/All.jpg"></div>
              

            </div>
        </section>
        
        <!--================End Home Banner Area =================-->

        


<!-- Optional JavaScript -->
               <!-- jQuery first, then Popper.js, then Bootstrap JS -->
               <script src="js/jquery-3.3.1.min.js"></script>
               <script src="js/popper.js"></script>
               <script src="js/bootstrap.min.js"></script>
               <script src="js/stellar.js"></script>
               <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
               <script src="vendors/isotope/isotope.pkgd.min.js"></script>
               <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
               <script src="js/jquery.ajaxchimp.min.js"></script>
               <script src="js/jquery.counterup.min.js"></script>
               <script src="js/jquery.waypoints.min.js"></script>
               <script src="js/mail-script.js"></script>
               <script src="js/contact.js"></script>
               <script src="js/jquery.form.js"></script>
               <script src="js/jquery.validate.min.js"></script>
               <script src="js/mail-script.js"></script>
               <script src="js/theme.js"></script>
           </body>
           </html>