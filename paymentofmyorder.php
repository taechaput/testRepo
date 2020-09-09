<?php
$Username =$_POST['Username'];
$connect = mysqli_connect("localhost","root","123456789","BAND");
$sql = 'UPDATE selllist SET Status = "success" where  Username = "'.$Username.'"';
$result = mysqli_query($connect,$sql);
header("location:myorder.php");
mysqli_close($connect);
 ?>
