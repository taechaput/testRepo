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
<body background="img/background/BG4.jpg">

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="user.php"><img src="photo/4.png" alt=""width="150" height="90"></a>
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
       <!--================Hero Banner Area Start =================-->
    <section class="hero-banner">
        <div class="container">
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                </ol>
            </nav>
        </div>
    </section>
                   <br>
                   <br>
                   <br>

                        <!-- ข้อมูลเนื้อหา -->
                        <!-- ตรวจสอบชื่อ USername เสร็จไปค้นหาในsql แล้วดึงมาโชว์ -->
                   <center>
                  <h2>  <a href="#" class="btn btn-primary">My Order & Payment</a></h2>
                  <br>
                    <?php
                    $Uuser = $_SESSION["Uuser"];
                    $connect = mysqli_connect("localhost","root","123456789","BAND");

                    $sql = 'SELECT * from selllist where Username = "'.$_SESSION["Uuser"].'"';
                    $result = mysqli_query($connect,$sql);

                    if(!$result){
                      echo 'MySQL Error: ' . mysqli_error();
                          exit();
                  }
                      echo '<table border = "1" >';
                        echo '<tr>';
                            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;OrderID&nbsp;&nbsp;&nbsp;</b></td>';
                            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;ProductID&nbsp;&nbsp;&nbsp;</b></td>';
                            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Username&nbsp;&nbsp;&nbsp;</b></td>';
                            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Account&nbsp;&nbsp;&nbsp;</b></td>';
                            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Price&nbsp;&nbsp;&nbsp;</b></td>';
                            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;</b></td>';
                        echo '</tr>';
                                  while($row = mysqli_fetch_assoc($result)){
                                      echo '<tr>';
                                                  while(list($key,$value) = each($row)){
                                                 if($value == ''){
                                                      echo '<td align=center>'.'&nbsp;'.'</td>';
                                                               }else{
                              echo '<td align=center>'.$value.'</td>';
                                                                      }
                                                                                }
                                                                                if ($row['Status'] == 'success') {

                                                                                  /*หากเป็น success ไม่ต้องทำอะไร*/
                                                                                }else{
                                                                                        /* หากกดจ่ายตัง ไป paymentofmyorder.php*/

                                                                                        echo '<table border = "1" >';
                                                                                          echo '<tr>';

                                                                                echo '<form action="paymentofmyorder.php" method="post">';
                                                                                  echo ' <input type="hidden" name = "Username" value = "'.$Uuser.'">';
                                                                                  echo '   <input type="submit" value="Payment" class="btn btn-success" onClick = "return confirmConfirm();">';
                                                                                echo '  </form>';



                                                                                       /* หากกดยกเลิกสินค้า ไป cancleofmyorder.php*/

                                                                                echo '  <form action="cancleofmyorder.php" method="post">';
                                                                                  echo ' <input type="hidden" name = "Username" value = "'.$Uuser.'">';
                                                                                    echo '<input type="submit" value="Cancel" class="btn btn-danger" onClick = "return confirmCancel();">';
                                                                                  echo '  </form>';

                                                                                      echo '</tr>';
                                                                                  echo '<table border = "1" >';




                          echo '</tr>';
                      echo '<tr>';
                      /*
                      $total += $row['OPrice'];
                      */
                    }

                  }
                    echo '</table>';


                    /*
                    echo '<h4><b>Total </b>'.$total.' <b>Bath</b></h4>';
                    */
                    mysqli_close($connect);

                     ?>

                     <br><br><br>
</div>
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

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/BAND.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script language = "JavaScript">
    function confirmCancel()
    {
      return confirm('Are you sure you want to " CANCEL " this')
    }
    function confirmConfirm()
    {
      return confirm('Are you sure you want to " CONFIRM " this')
    }
  </script>
</body>

</html>
