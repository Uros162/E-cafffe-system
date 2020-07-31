<?php
$host='localhost';
$user ='root';
$password ='';
$dbname = 'e-caffe';

$conn = new mysqli($host,$user,$password,$dbname);
if($conn->connect_error){
  die("konekcija nije uspjel". $conn->connect_error);
}

 ?>
