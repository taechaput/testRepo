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
<body >

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="#"><img src="photo/4.png" alt="" width="150" height="90"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                                                                                  
                          <li class="nav-item submenu dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <?php
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
        
             
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!--================Header Menu Area =================-->
<!-- รีพอร์ตข้อมูลสมาชิก -->

<body background="img/background/BG2.jpg">
<section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                  <legend></legend>
                  <legend></legend>
                <br>
                <br>
                <br>
                <br>
    <br>
    <br>
    <br>
    <br>
    <br>
              <center>
              <fieldset style="width:800px;"><legend><b><h2 align="center">Report  Account</h2></b></legend>
                <?php
                          $connect = mysqli_connect("localhost","root","123456789","BAND");
                          $sql = 'SELECT * from account';
                          $result = mysqli_query($connect,$sql);
                          if(!$result){
                              echo ('Can not access database');
                          }else{
                            echo '<table border="1" cellpading="5" cellspacing="5">';
                            echo '<tr>';
                            echo '<td>';
                            echo '&nbsp;&nbsp;&nbsp;Account&nbsp;&nbsp;&nbsp;';
                            echo '</td>';
                            echo '<td>';
                            echo '&nbsp;&nbsp;&nbsp;Username&nbsp;&nbsp;&nbsp;';
                            echo '</td>';
                            echo '<td>';
                            echo '&nbsp;&nbsp;&nbsp;Password&nbsp;&nbsp;&nbsp;';
                            echo '</td>';
                            echo '<td>';
                            echo '&nbsp;&nbsp;&nbsp;Firstname&nbsp;&nbsp;&nbsp;';
                            echo '</td>';
                            echo '<td>';
                            echo '&nbsp;&nbsp;&nbsp;Lastname&nbsp;&nbsp;&nbsp;';
                            echo '</td>';
                            echo '<td>';
                            echo '&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;';
                            echo '</td>';
                            echo '<td>';
                            echo '&nbsp;&nbsp;&nbsp;Tel&nbsp;&nbsp;&nbsp;';
                            echo '</td>';
							echo '<td>';
							echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                            echo '</td>';
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<tr>';
                                      while(list($key,$value) =each($row)){
                                                                        if($value==''){
                                                                          echo '<td>'.'&nbsp;'.'</td>';
                                                                                      }else{
                                                                            echo '<td>&nbsp;&nbsp;&nbsp;'.$value.'&nbsp;&nbsp;&nbsp;</td>';
                                                                                            }
                                                                          }echo '</tr>';
                                                                        }echo '</table>';
                            }
                            mysqli_close($connect);

                     ?>
                     </fieldset>
                   </center>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

 <!-- รีพอตข้อมูลการขาย -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <form name="frmSearch" method="get" action="">
                      <legend></legend>
                      <legend></legend>
                      <br>
                      <center>
                      <fieldset style="width:800px;"><legend><b><h2 align="center">Report  Sale for Product</h2></b></legend>
                        <?php
                                  $connect = mysqli_connect("localhost","root","123456789","BAND");
                                  $sql = 'SELECT * from selllist';
                                  $result = mysqli_query($connect,$sql);
                                  if(!$result){
                                      echo ('Can not access database');
                                  }else{
                                    echo '<table border="1" cellpading="5" cellspacing="5" align="center">';
                                    echo '<tr>';
                                    echo '<td>';
                                    echo '&nbsp;&nbsp;&nbsp;OrderID&nbsp;&nbsp;&nbsp;';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '&nbsp;&nbsp;&nbsp;ProductID&nbsp;&nbsp;&nbsp;';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '&nbsp;&nbsp;&nbsp;Username&nbsp;&nbsp;&nbsp;';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '&nbsp;&nbsp;&nbsp;Account&nbsp;&nbsp;&nbsp;';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '&nbsp;&nbsp;&nbsp;Price&nbsp;&nbsp;&nbsp;';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;';
                                    echo '</td>';
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '<tr>';
                                              while(list($key,$value) =each($row)){
                                                                                if($value==''){
                                                                                  echo '<td>'.'&nbsp;'.'</td>';
                                                                                              }else{
                                                                                    echo '<td>&nbsp;&nbsp;&nbsp;'.$value.'&nbsp;&nbsp;&nbsp;</td>';
                                                                                                    }
                                                                                  }echo '</tr>';
                                                                                }echo '</table>';
                                    }
                                    mysqli_close($connect);
                             ?>
                             </fieldset>
                           </center>
                         </table>
                       </form>
            </div>
        </div>
  </section>
  <br>
  <br>
  <br>

  <!-- เซิร์ตหาสมาชิกเพื่อลบ-->
     <section id="contact" class="container content-section text-center">
         <div class="row">
             <div class="col-lg-8 col-lg-offset-2">

                       <legend></legend>
                       <center>
                         <table>
                         <fieldset style="width:500px;"><legend><b><h2 align="center">Delete of Account</h2></b></legend>
                         <form name="frmSearch" method="post" action="search.php">
                         Key of Username :
                         <input type="text" name="search">
                         <input type='submit' value='Search' class="btn btn-success">
                         </fieldset>
                         </form>
                       </table>


             </div>
         </div>
   </section>

   <br>
   <br>
   <section id="contact" class="container content-section text-center">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2">

                        
                        <center>
                          <table>
                          <fieldset style="width:500px;"><legend><b><h2 align="center">Edit of Order</h2></b></legend>
                          <form name="frmSearch" method="post" action="search2.php">
                          Key of OrderID :
                          <input type="text" name="search">
                          <input type='submit' value='Search' class="btn btn-success">
                          </fieldset>
                          </form>
                        </table>

                        <br>
                        <br>
              </div>
          </div>
    </section>




        







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