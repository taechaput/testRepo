<?php
  $Username =$_POST['Username'];
  $connect = mysqli_connect("localhost","root","123456789","BAND");
  $sql = 'DELETE from selllist where  Username = "'.$Username.'" AND Status = "Wait"';
  $result = mysqli_query($connect,$sql);
  header("location:myorder.php");
  mysqli_close($connect);
?>
