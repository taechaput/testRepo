<?php
	$connect = mysqli_connect("localhost","root","123456789","BAND");
	$sql = 'UPDATE selllist SET OrderID = "'.$_POST['OrderID'].'" WHERE OrderID = "'.$_POST['id'].'"';
	$result = mysqli_query($connect,$sql);
	$sql = 'UPDATE selllist SET ProductID = "'.$_POST['ProductID'].'" WHERE OrderID = "'.$_POST['id'].'"';
	$result = mysqli_query($connect,$sql);
	$sql = 'UPDATE selllist SET Username = "'.$_POST['Username'].'" WHERE OrderID = "'.$_POST['id'].'"';
	$result = mysqli_query($connect,$sql);
	$sql = 'UPDATE selllist SET Account = "'.$_POST['Account'].'" WHERE OrderID = "'.$_POST['id'].'"';
  $result = mysqli_query($connect,$sql);
	$sql = 'UPDATE selllist SET Price = "'.$_POST['Price'].'" WHERE OrderID = "'.$_POST['id'].'"';
	$result = mysqli_query($connect,$sql);
  $sql = 'UPDATE selllist SET Status = "'.$_POST['Status'].'" WHERE OrderID = "'.$_POST['id'].'"';
	$result = mysqli_query($connect,$sql);
	if(!$result)
	{

	}
	else
    header("location:admin.php");
	mysqli_close($connect);
?>
