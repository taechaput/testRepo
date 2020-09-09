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
    
    <!--================Hero Banner Area Start =================-->
    <section class="hero-banner">
        <div class="container">
            
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </section>
                   <br>
                   <br>
                   <br>
                   <center>
                    <a href="#" class="btn btn-primary">Change Password & Update Account </a>

                  </center>
                   <br>
                   <br>
                   <form name = "frmUpdate" method = "post" action = "checkupdateaccount.php">
                 <center>

                 <table cellspacing="0" cellpadding="3">
                 </center>
                 <tr>
                 <td>

                     <!-- ดึงข้อมูลใน sql ของ Username มาให้สามารถแก้ไขได้ เมื่อกด update จะไปหน้า checkupdateaccount.php เพื่อเปลี่ยนใน sql -->
                  <?php
                    $A = array("Account","Username","Password","Firstname","Lastname","Email","Tel","Address");
                    $B = array("","Uuser","Ppass","Ffirst","Llast","Eemail","Ttel","Aaddress");
                    $connect = mysqli_connect("localhost","root","123456789","BAND");
                    if(!isset($smtUpdate))
                    {
                      $sql = 'SELECT * FROM account Where Username =  "'.$_SESSION["Uuser"].'"';
                      $result = mysqli_query($connect,$sql);
                      $numrows = mysqli_num_rows($result);
                      $numfields = mysqli_num_fields($result);
                      if(!$result)
                        echo '<b>Error</b>'.mysqli_errno().':'.mysqli_error().'<br>';
                      else if($numrows == 0)
                        echo '<b>Query executed successfully but no row returns!</b>';
                      else
                      {
                        echo '<center>';
                        echo '<table cellpadding = "1">';
                        while($row = mysqli_fetch_array($result))
                        {
                          for ($i = 0; $i < $numfields ; $i++)
                          {
                              echo '<p align="justify">';
                              echo '<tr>';
                              echo  '<td  class="list-group-item">&nbsp;'.$A[$i].' : </td>';
                              if($i==0 | $i==1)
                              {
                                echo '<td><input type = "text" disabled = "true" value = "'.$row[$i].'"&nbsp;</td>'."\n";
                                echo '<input type = "hidden" name = "id" value = "'.$row['Account'].'">';
                              }else
                              {
                                echo '<td><input type = "text" name = "'.$B[$i].'" value = "'.$row[''.$A[$i].''].'"&nbsp;</td>'."\n";
                              }
                            echo '</tr>';
                          }
                        }
                        echo '</table>';
                      }
                    }
                    mysqli_close($connect);
                  ?>
                  <br>
                  <input name = "smtUpdate" type = "submit"  class="btn btn-primary"  value = "Update" onClick = "return confirmUpdate()">
                </td>
              </tr>
              </table>
              	</form>
                <br><br><br>

                </div>
                </div>

    <!-- /.container -->
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
