<?php
  $Username =$_POST['Username'];
  $connect = mysqli_connect("localhost","root","123456789","BAND");
  $sql = 'DELETE from account where  Username = "'.$Username.'"';
  $result = mysqli_query($connect,$sql);
  header("location:admin.php");
  mysqli_close($connect);
?>
