<?php 
$username="root";
$password="13545762aR";
$sunucu="localhost:3308";
$database="newsayt";

$baglan=mysqli_connect($sunucu,$username,$password,$database);
if(!$baglan)
{
	echo "Baglanti veziyyeti : ";
	exit();
}
?>