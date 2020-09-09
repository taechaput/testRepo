<?php



  $connect = mysqli_connect("localhost","root","123456789","BAND");
  /* หาชื่อของลูกค้าจากลูกค้าที่กดซื้อสินค้า */
  $sql = 'SELECT * from  account WHERE Username = "'.$_POST['Username'].'"';
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_assoc($result) ;

  /* เลือกแถวของ Account  กำหนดค่าเป็นตัวแปร $Account */
$Account = $row['Account'];

$Username = $_POST['Username'];
$ProductID = $_POST['product'];
$Price = $_POST['Pricee'];


  /* นำไปใส่ใน sql เสดเด้งไปหน้า myorder.php*/
  $sql = 'INSERT INTO selllist VALUES("0","'.$ProductID.'","'.$Username.'","'.$Account.'","'.$Price.'","Wait");';
  $result = mysqli_query($connect,$sql);
  header("location:myorder.php");

?>
