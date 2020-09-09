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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
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
                        $connect = mysqli_connect("localhost","root","12345678","BAND");
                        $sql = 'SELECT Username from account where Username = "'.$_SESSION["Uuser"].'"';
                        $result = mysqli_query($connect,$sql);
                        echo " Welcome ... ". $_SESSION["Uuser"];
                        mysqli_close($connect);
                      }
                       ?>
                    </span>


                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="admin.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="signin.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<br>
<br>
<br>
    <!--ลบข้อมูลสมาชิก-->


  <section id="about" class="container content-section text-center">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
                <legend></legend>
              <h2>Delete Account</h2>
                <legend></legend>
              <br>
<center>


    <?php
      $search = $_POST['search'];
    $connect = mysqli_connect("localhost","root","12345678","BAND");

    $sql = 'SELECT * from account where Username = "'.$search.'"';
    $result = mysqli_query($connect,$sql);

    if(!$result){
      echo 'MySQL Error: ' . mysqli_error();
          exit();
  }
      echo '<table border = "1" >';
        echo '<tr>';
            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Account&nbsp;&nbsp;&nbsp;</b></td>';
            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Username&nbsp;&nbsp;&nbsp;</b></td>';
            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Password&nbsp;&nbsp;&nbsp;</b></td>';
            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Firstname&nbsp;&nbsp;&nbsp;</b></td>';
            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Lastname&nbsp;&nbsp;&nbsp;</b></td>';
            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;</b></td>';
            echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Tel&nbsp;&nbsp;&nbsp;</b></td>';
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


                                        echo '<td>';
                                        echo '  <form action="deleteaccount.php" method="post">';
                                        echo ' <input type="hidden" name = "Username" value = "'.$search.'">';
                                        echo '<input type="submit" value="Delete" class="btn btn-danger" onClick = "return confirmCancel();">';
                                        echo '  </form>';
                                        echo '</td>';


          echo '</tr>';
      echo '<tr>';
    }

    echo '</table>';
    mysqli_close($connect);

     ?>
</center>
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

</body>

</html>
