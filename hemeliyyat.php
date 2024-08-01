<?php 
include 'baglan1.php';
//-----------------------------------------MesajGondar-----------------------------------------\\
if(isset($_POST['gondar']))
{
	$tamad=$_POST['tamad'];
	$email=$_POST['email'];
	$telefon=$_POST['telefon'];
	$mesaj=$_POST['mesaj'];
  $zaman=date('Y-m-d H:i');

	$mesajSorgu=mysqli_query($baglan,"insert into mesajlar(tamad,email,telefon,mesaj,mesaj_zaman) values('$tamad','$email','$telefon','$mesaj','$zaman')");
  if($mesajSorgu)
  {
    header("Location:elaqe.php?durum=ok");
  }
  else
  {
    header("Location:elaqe.php?durum=no");
  }
}

if(isset($_POST['temizle']))
{
  header("Location:elaqe.php");
}
?>