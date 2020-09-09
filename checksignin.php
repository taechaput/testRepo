<?php

session_start();
  $connect = mysqli_connect("localhost","root","123456789","BAND");
  /*  เลือก Username และ Password ใน ที่เก็บข้อมูลใน account มาเทียบกับ ที่รับมาว่าตรงกันมั้ย (รับมาในชื่อ Uuser และ Ppass)   */
  $sql = 'SELECT Username,Password From account where Username = "'.$_POST['Uuser'].'" AND Password = "'.$_POST['Ppass'].'"';
  $result = mysqli_query($connect,$sql);
  $numrows= mysqli_num_rows($result);
  $Uuser = $_POST['Uuser'];
  /*   เทียบคอลัมใน sql หากเป็น 0 = ไม่ได้กรอกหรือว่าง ให้เด้งไปหน้า error 2    */
  if($numrows == 0){
        header("location:error2.php");
  }else{
      /*   แต่หากไม่ใช่ ให้มาตรวจสอบ   */
            while($row= mysqli_fetch_array($result,MYSQLI_NUM)){
              /*   หากUsername ที่รับมามาเทียบใน sql มันตรงกับคำว่า admin = เด้งไปหน้าแอดมิน แต่ท่าไม่ใช่ แสดงว่าเป็นผู้ใช้ปกติ เด้งไปหน้าผู้ใช้ปกติ  */
                      if($Uuser == "Admin"|| $Uuser =="admin"){
                                  $_SESSION["Uuser"] = $row[0];
                                  session_write_close();
                                  header("location:admin.php");
                      }else{
                                       $_SESSION["Uuser"] = $row[0];
                                       session_write_close();
                                       header("location:user.php");
                                                              }
      }
mysqli_close($connect);
}
 ?>
