<?php
var_dump($_POST);
extract($_POST);
$link = mysqli_connect('localhost', 'root', '');
mysqli_select_db($link,'php_demo');
$sql = "INSERT INTO student ( name , age ,phone , gender , address ,dob  ) VALUES ( '$studet_name' , $age , '$phone' , $gender , '$address' , '$date'  )";
echo $sql;
mysqli_query($link,$sql);
header("location:lesson30.php");
?>