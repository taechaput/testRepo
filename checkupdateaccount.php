<?php
	$connect = mysqli_connect("localhost","root","123456789","BAND");
	$sql = 'UPDATE account SET Password = "'.$_POST['Ppass'].'" WHERE Account = "'.$_POST["id"].'"';
	$result = mysqli_query($connect,$sql);
	$sql = 'UPDATE account SET Firstname = "'.$_POST['Ffirst'].'" WHERE Account = "'.$_POST["id"].'"';
	$result = mysqli_query($connect,$sql);
	$sql = 'UPDATE account SET Lastname = "'.$_POST['Llast'].'" WHERE Account = "'.$_POST["id"].'"';
	$result = mysqli_query($connect,$sql);
	$sql = 'UPDATE account SET Email = "'.$_POST['Eemail'].'" WHERE Account = "'.$_POST["id"].'"';
  $result = mysqli_query($connect,$sql);
	$sql = 'UPDATE account SET Tel = "'.$_POST['Ttel'].'" WHERE Account = "'.$_POST["id"].'"';
	$result = mysqli_query($connect,$sql);
	if(!$result)
	{
		header("location:error3.php");
	}
	else
    header("location:updatecomplete.php");
	mysqli_close($connect);
?>
