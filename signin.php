<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>signin to website</title>
</head>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
   
<body background="img/background/BG.jpg">
<br><br><br><br><br><br><br><br>
  <center>
    <div class="transbox">
      <br><br><br><br><br><br><br><br>
      <table>
          <tr>
              <td height="126">
                    <h1 class="brand-heading"><font color="gray">SIGNIN TO WEBSITE </font></h1>
                              <legend></legend>
                             <!--   ข้อมุลล็อคอินรหัสผ่านต่างๆ จะถูกส่งไป checksignin.php เพื่อเช็คว่าตรงกับ sql ไหม     -->
                        <form name="frminsert" action="checksignin.php" method="post">
                            <font color="gray">Username :</font>
                            <input type="text"  class="form-control"  name="Uuser">
                            <font color="gray">Password :</font>
                            <input type="password"  class="form-control"  name="Ppass">
                                    <br>
                                    <legend></legend>
                                    <center>
                            <input type="submit"  value="SignIn"  class="btn btn-primary" >
                            <input type="reset" value="Cancle" class="btn btn-primary">
                            <a href="index.php" class="btn btn-primary"><font color="gray"> Back </font> </a>
                                    </center>
                     </form>
              </td>
        </tr>
     </table>
     <br><br><br><br><br><br><br><br>
   </div>
</center>
</body>
</html>