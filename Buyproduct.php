<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ส่วนของ javascript เมื่อกดจะขึ้นยืนยันว่า แน่ใจหรือไม่ -->
  <script language = "JavaScript">
    function confirmBuy()
    {
      return confirm('Are you sure you want to Buy this')
    }
  </script>
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
                    <a class="navbar-brand logo_h" href="user.php"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="user.php">Home</a></li> 
                            <li class="nav-item active"><a class="nav-link" href="BAND.php">Figute-STORES</a></li>                                                 
                           <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            
                          <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <?php
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

<!-- แถบเมนู -->
<body background="img/background/BG4.jpg">
 <section class="hero-banner">
        <div class="container">
    
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
           
            </nav>
        </div>
    </section>
                   <br>
                   <br>
                   <br>    

            
<!-- ส่วนเนื้อหา -->
                   <br>
                   <br>
                   <br>
                   <center>
                    <a href="#" class="btn btn-primary">คุณต้องการซื้อสินค้าชิ้นนี่ใช่หรือไม่ ?</a>
                    <table cellspacing="0" cellpadding="3">
                      <br>
                      <br>

<!-- ใช้ php เพื่อดึงค่าใน sql มาโชว์ -->
<!-- เช่น หากเราเลือกเพลงที่ 1 มันจะรับค่า product id คือ 1 และ รับชื่อ Username เรามา-->
<!--นำค่านั่นไปดูใน sql เพื่อดึงข้อมูลสินค้าตัวนั่นออกมา และทำไปโชว์ในตาราง-->
<!--เสร็จท่ากด BUY ก็จะไปหน้า checkBuyproduct.php เพื่อเพิ่มใน sql ไปไว้ในเมนู Order-->
                    <?php
                      $ProductID = $_POST['ProductID'];
                      $id = $_POST["id"];
                      $connect = mysqli_connect("localhost","root","123456789","BAND");
                      $sql = 'SELECT * FROM productlist where ProductID = '.$ProductID.'';
                      $result = mysqli_query($connect,$sql);
                      $row = mysqli_fetch_assoc($result) ;

                      echo '<div class = "col-lg-offset-4 col-xs-offset-1 col-md-offset-5 col-sm-offset-5">';
                      echo '<form action= "checkBuyproduct.php" method = "post">';
                      echo '<table border = "1">';
                        echo '<tr>';
                          echo '<td>&nbsp;&nbsp;&nbsp; ProductID &nbsp;&nbsp;&nbsp;</td>';
                          echo '<td><input type="text" name="Product" value="'.$row['ProductID'].'" disabled = "false">';
                          echo '<input type="hidden" name = "product" value="'.$row['ProductID'].'">';

                        echo '</tr>';
                        echo '<tr>';
                          echo '<td>&nbsp;&nbsp;&nbsp; Name  &nbsp;&nbsp;&nbsp;</td>';
                          echo '<td><input type="text" name="Name" value="'.$row['Name'].'"  disabled = "false"></td>';
                        echo '</tr>';
                        echo '<tr>';
                          echo '<td>&nbsp;&nbsp;&nbsp;  Info  &nbsp;&nbsp;&nbsp;</td>';
                          echo '<td><input type="text" name="Info" value="'.$row['Info'].'" disabled = "false"></td>';
                        echo '</tr>';
                        echo '<tr>';
                          echo '<td>&nbsp;&nbsp;&nbsp;  Price  &nbsp;&nbsp;&nbsp;</td>';
                          echo '<td><input type="text" name="Price" value="'.$row['Price'].'" disabled = "false"></td>';
                          echo '<input type="hidden" name = "Pricee" value="'.$row['Price'].'">';
                        echo '</tr>';
                      echo '</table>';
                      echo '<br>';
                      echo '<input type="hidden" name = "Username" value = "'.$id.'">';
                      echo '<input name = "buypeoduct";" type = "submit"value="BUY" class="btn btn-success"   onClick = "return confirmBuy()">';
                      echo '<a href="user.php" class="btn btn-success"> Cancle </a> ';
                      echo '</form>';
                      echo '<br>';
                      echo '<br>';
                      echo '<br>';
                      echo '<br>';
                      echo '</div>';
                      mysqli_close($connect);
                    ?>
    <!-- /.container -->

    <!-- jQuery -->
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
