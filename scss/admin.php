<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Administrator</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <!--
    <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <div align="right">
                <div class="card-body">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-star"></i>&nbsp; Menu</button>
                  <br>
                  <br>  
                  <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa  fa-user-o"></i> <span class="light">
                      <?php
                      session_start();
                      if($_SESSION['Uuser']=='')
                      {
                        header("location:error2.php");
                      }
                      else
                      {
                        $connect = mysqli_connect("localhost","root","12345678","movie");
                        $sql = 'SELECT Username from account where Username = "'.$_SESSION["Uuser"].'"';
                        $result = mysqli_query($connect,$sql);
                        echo " Welcome ... ". $_SESSION["Uuser"];
                        mysqli_close($connect);
                      }
                       ?>
                    </span>
                    
                    
                  </a></div>
            </div>

                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <div align="right">
                      <ul class="nav navbar-nav">
                          <a href="#page-top"></a>
                          <a class="page-scroll" href="signin.php">LOGOUT</a>
                        </li>
                      </ul>
                    </div>
            </div>
        </div>
    </nav>


<br>
<br>
<br>
    <!-- รีพอร์ตข้อมูลสมาชิก -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                  <legend></legend>
                  <legend></legend>
                <br>
              <center>
              <fieldset style="width:600px;"><legend><b><h2 align="center">Report  Account</h2></b></legend>
                <?php
                          $connect = mysqli_connect("localhost","root","12345678","movie");
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
                      <fieldset style="width:600px;"><legend><b><h2 align="center">Report  Sale for Product</h2></b></legend>
                        <?php
                                  $connect = mysqli_connect("localhost","root","12345678","movie");
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

   <!-- เซิร์ตหาออเดอร์เพื่อลบ-->
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





    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

<body bgcolor="#CCFFFF">
<body bgcolor="rgb(204,255,255)">
</body>

</html>
