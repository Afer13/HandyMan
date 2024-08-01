<?php 
include 'baglan.php';
ob_start();
session_start();


function girisyoxlama()
{
	$admin_username=$_SESSION['admin_username'];
	$adminSorgu=mysqli_query($baglan,"select*from admin where hesab_username='$admin_username'");
	$adminSay=mysqli_num_rows($adminSorgu);

	if($adminSay==0)
	{
		header("Location:login.php?kkk=no");
	}
}

 ?>