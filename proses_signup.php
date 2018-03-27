<?php
require_once 'config.php';
$nama_pengguna=$_POST['nama_pengguna'];
$katalaluan=$_POST['katalaluan'];

echo"<br>";

$query="insert into pengguna values
('$nama_pengguna','$katalaluan')";
if(mysql_query($query)){
header("Location:signin.php");}
else
echo"Opps, something went wrong";
?>


