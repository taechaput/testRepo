<?php
/* รับค่ามาจาก form ของ singup.php  */
$Uuser = $_POST['Uuser'];
$Uuser = $_POST['Uuser'];
$Ppass = $_POST['Ppass'];
$Ffirst = $_POST['Ffirst'];
$Llast = $_POST['Llast'];
$Eemail = $_POST['Eemail'];
$Ttel = $_POST['Ttel'];
$Aaddress = $_POST['Aaddress'];
if (!filter_var($Eemail,FILTER_VALIDATE_EMAIL)){
  $check = 0;
}


/* insert เพื่อไปเก็บใน account (ที่เก็บข้อมูลลูกค้า)  */
  $connect = mysqli_connect("localhost","root","123456789","BAND");
  $sql = 'INSERT INTO account VALUES("0","'.$Uuser.'","'.$Ppass.'","'.$Ffirst.'","'.$Llast.'","'.$Eemail.'","'.$Ttel.'","'.$Aaddress.'");';
  $result = mysqli_query($connect,$sql);

/* หากข้อมูลผิดพลาด เด้งไปหน้า error  แต่ท่าไม่ผิดพลาดเด้งไปหน้า สมัครสมาชิกสำเร็จ  */
  if(!$result){
        header("location:error.php");
  }else{
        header("location:signupcomplete.php");
  }
mysqli_close($connect);
 ?>
