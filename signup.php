<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signup to website</title>
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
    <br><br><br><br><br><br><br>
    <center>
      <div class="transbox">
        <br><br><br><br>
    <table>
        <tr>
            <td>
                <h1 class="brand-heading"><font color="gray">SIGN UP FORM</font></h1>
                              <legend></legend>
                              <!-- Legend คือ ขีดเส้นใต้ยาวๆ -->
                   </br> <form name="frminsert" action="checksignup.php" method="post">
                      <font color="gray">Username :</font>
                    <input type="text"  class="form-control"  name="Uuser" placeholder="Example : Waroot01234" >
                      </br>  <font color="gray">Password :</font>
                   <input type="password"  class="form-control"  name="Ppass" placeholder="Example : 0123456789" >
                     </br> <font color="gray">Firstname :</font>
                   <input type="text"  class="form-control"  name="Ffirst" placeholder="Example : Waroot" >
                     </br> <font color="gray">Lastname :</font>
                   <input type="text"  class="form-control"  name="Llast" placeholder="Example : Suwanopard" >
                     </br> <font color="gray">Email Address :</font>
                  <input type="text"  class="form-control"  name="Eemail" placeholder="Example : waroot@hotmail.com">
                      </br> <font color="gray">Tel :</font>
                   <input type="text"  class="form-control"  name="Ttel" placeholder="Example : 08123456789" maxlength="10">
                  	  </br> <font color="gray">Address :</font>
                   <input type="text"  class="form-control"  name="Aaddress" placeholder="Example : up to you" maxlength="200">
                   
                                        <br>
                                        <center>
                      <input type="submit"  value="SignUp"  class="btn btn-primary" >
                      <input type="reset" value="Cancle" class="btn btn-primary">
                      <a href="index.php" class="btn btn-primary"> <font color="gray">Back </font></a>
                                        </center>
                    </form>
              </td>
        </tr>
    </table>
    <br><br>
    <br><br>
  </div>
    </center>
</body>
</html>