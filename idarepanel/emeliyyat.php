<?php 
include 'baglan.php';
session_start();
//---------------------------------------Admin panel---------------------------------\\
if(isset($_POST['admin_giris']))
{
$admin_username=$_POST['admin_username'];
$admin_parol=$_POST['admin_parol'];
if($admin_username && $admin_parol)
{
$mysqlSorgu=mysqli_query($baglan,"select*from admin where hesab_username='$admin_username' and hesab_parol='$admin_parol'");
$mysqlYoxla=mysqli_num_rows($mysqlSorgu);
if($mysqlYoxla>0)
{
	$_SESSION['admin_username']=$admin_username;
	header('Location:index.php');
}
else
{
	header('Location:login.php?login=no');
}
}
else
{
	header('Location:login.php');
}
}

//----------------------------------------Menu elmeliyyat------------------------------------\\

if(isset($_POST['menu_elaveet']))
{
	$menu_ad=$_POST['menu_ad'];
	$menu_link=$_POST['menu_link'];
	$menu_sira=$_POST['menu_sira'];

	$mysqlElave=mysqli_query($baglan,"insert into menular(menu_ad,menu_link,menu_sira) values('$menu_ad','$menu_link','menu_sira')");
	if($mysqlElave)
	{
		header("Location:menular.php?durumEl=ok");
	}
	else
	{
		header("Location:menular.php?durumEl=no");
	}
}

if(isset($_POST['menu_duzaliset']))
{
	$menu_id5=$_POST['menu_id5'];
	$menu_ad5=$_POST['menu_ad5'];
	$menu_link5=$_POST['menu_link5'];
	$menu_sira5=$_POST['menu_sira5'];

	
	$mysqlDuzalis=mysqli_query($baglan,"update menular set menu_ad='$menu_ad5',menu_link='$menu_link5',menu_sira='$menu_sira5' where menu_id='$menu_id5'");

	if($mysqlDuzalis)
	{
		header("Location:menular.php?durumDuz=ok");
	}
	else
	{
		header("Location:menuelaveet.php?durumDuz=no");
	}	
}
if($_GET['menuid14'])
{
	$id=$_GET['menuid14'];
	$mysqlSil=mysqli_query($baglan,"delete from menular where menu_id='$id'");
	if($mysqlSil)
	{
		header("Location:menular.php?durumsil=ok");
	}
	else
	{
		header("Location:menular.php?durumsil=no");
	}
}



//------------------------------------Slayd emeliyyat-------------------------------------------\\


if(isset($_POST['slayd_elaveet']))
{
	$slayd_ad=$_POST['slayd_ad'];
	$slayd_url=$_POST['slayd_url'];
	$slayd_sira=$_POST['slayd_sira'];


	$sekilyukyer='../images/slaydimage';
	@$name=$_FILES['sekilsec']["name"];
	@$tmp_name=$_FILES['sekilsec']["tmp_name"];

	$ferqliad1=rand(2000,3000);
	$ferqliad2=rand(3000,4000);
	$ferqliad3=rand(2000,3000);
	$ferqliad4=rand(4000,5000);

	$ferqliad=$ferqliad1.$ferqliad2.$ferqliad3.$ferqliad4;

	$slayd_yol=substr($sekilyukyer, 0)."/".$ferqliad.$name;

	@move_uploaded_file($tmp_name, "$sekilyukyer/$ferqliad$name");

	$slaydElave=mysqli_query($baglan,"insert into slaydlar(slayd_ad,slayd_yol,slayd_url,slayd_sira) values('$slayd_ad','$slayd_yol','$slayd_url','$slayd_sira')");
	if($slaydElave)
	{
		header("Location:slaydlar.php?sdurumEl=ok");
	}
	else
	{
		header("Location:slaydlar.php?sdurumEl=no");
	}
}

if(isset($_POST['slayd_duzaliset']))
{
	$slayd_id5=$_POST['slayd_id5'];
	$slayd_ad5=$_POST['slayd_ad5'];
	$slayd_yol5=$_POST['slayd_yol5'];
	$slayd_url5=$_POST['slayd_url5'];
	$slayd_sira5=$_POST['slayd_sira5'];


	$sekilyukyer='../images/slaydimage';
	@$name=$_FILES['sekilsec']["name"];
	@$tmp_name=$_FILES['sekilsec']["tmp_name"];

	$ferqliad1=rand(2000,3000);
	$ferqliad2=rand(3000,4000);
	$ferqliad3=rand(2000,3000);
	$ferqliad4=rand(4000,5000);

	$ferqliad=$ferqliad1.$ferqliad2.$ferqliad3.$ferqliad4;

	$slayd_yol=substr($sekilyukyer, 0)."/".$ferqliad.$name;

	@move_uploaded_file($tmp_name, "$sekilyukyer/$ferqliad$name");

	
	$slaydDuzalis=mysqli_query($baglan,"update slaydlar set slayd_ad='$slayd_ad5',slayd_yol='$slayd_yol',slayd_url='$slayd_url5',slayd_sira='$slayd_sira5' where slayd_id='$slayd_id5'");

	if($slaydDuzalis)
	{
		header("Location:slaydlar.php?sdurumDuz=ok");
	}
	else
	{
		header("Location:slaydlar.php?sdurumDuz=no");
	}	
}
if($_GET['slaydid14'])
{

	$sid=$_GET['slaydid14'];

	$slaydSil=mysqli_query($baglan,"delete from slaydlar where slayd_id='$sid'");
	$say=mysqli_affected_rows($slaydSil);

	$yol=$slaydSekilAd['slayd_yol'];

	

	if($say==0)
	{
		$yol=$_GET['sekilyol'];
		unlink("$yol");
		header("Location:slaydlar.php?sdurumsil=ok");
	}
	else
	{
		header("Location:slaydlar.php?sdurumsil=no");
	}
}



//----------------------------------------Menu elmeliyyat------------------------------------\\

if(isset($_POST['xidmet_elaveet']))
{	
	$xidmet_qisaad=$_POST['xidmet_qisaad'];
	$xidmet_ad=$_POST['xidmet_ad'];
	$xidmet_qmelumat=$_POST['xidmet_qmelumat'];
	$xidmet_qiymet=$_POST['xidmet_qiymet'];
	$xidmet_sira=$_POST['xidmet_sira'];
	$xidmet_anamenu=$_POST['xidmet_anamenu'];

	$xsekilyukyer='../images/xidmetimage';
	@$name=$_FILES['xsekilsec']["name"];
	@$tmp_name=$_FILES['xsekilsec']["tmp_name"];

	$xferqliad1=rand(2000,3000);
	$xferqliad2=rand(3000,4000);
	$xferqliad3=rand(2000,3000);
	$xferqliad4=rand(4000,5000);

	$xferqliad=$xferqliad1.$xferqliad2.$xferqliad3.$xferqliad4;

	$xsekil_yol=substr($xsekilyukyer, 0)."/".$xferqliad.$name;

	@move_uploaded_file($tmp_name, "$xsekilyukyer/$xferqliad$name");

	$xidmetElave=mysqli_query($baglan,"insert into xidmetler(xidmet_qisaad,xidmet_ad,xidmet_qmelumat,xidmet_qiymet,xidmet_sira,xidmet_anamenu,xidmet_sekilyol) values('$xidmet_qisaad','$xidmet_ad','$xidmet_qmelumat','$xidmet_qiymet','$xidmet_sira','$xidmet_anamenu','$xsekil_yol')");
	if($xidmetElave)
	{
		header("Location:xidmetler.php?xdurumEl=ok");
	}
	else
	{
		header("Location:xidmetler.php?xdurumEl=no");
	}
	
}

if(isset($_POST['xidmet_duzaliset']))
{
	$xidmet_id5=$_POST['xidmet_id5'];
	$xidmet_qisaad5=$_POST['xidmet_qisaad5'];
	$xidmet_ad5=$_POST['xidmet_ad5'];
	$xidmet_qmelumat5=$_POST['xidmet_qmelumat5'];
	$xidmet_qiymet5=$_POST['xidmet_qiymet5'];
	$xidmet_sira5=$_POST['xidmet_sira5'];
	$xidmet_anamenu5=$_POST['xidmet_anamenu5'];

	$xsekilyukyer='../images/xidmetimage';
	@$name=$_FILES['xsekilsec']["name"];
	@$tmp_name=$_FILES['xsekilsec']["tmp_name"];

	$xferqliad1=rand(2000,3000);
	$xferqliad2=rand(3000,4000);
	$xferqliad3=rand(2000,3000);
	$xferqliad4=rand(4000,5000);

	$xferqliad=$xferqliad1.$xferqliad2.$xferqliad3.$xferqliad4;

	$xsekil_yol=substr($xsekilyukyer, 0)."/".$xferqliad.$name;

	@move_uploaded_file($tmp_name, "$xsekilyukyer/$xferqliad$name");

	$xidmetDuzalis=mysqli_query($baglan,"update xidmetler set  xidmet_qisaad='$xidmet_qisaad5',xidmet_ad='$xidmet_ad5',xidmet_qmelumat='$xidmet_qmelumat5',xidmet_qiymet='$xidmet_qiymet5', xidmet_sira='$xidmet_sira5',xidmet_anamenu='$xidmet_anamenu5',xidmet_sekilyol='$xsekil_yol' where xidmet_id='$xidmet_id5'");

	if($xidmetDuzalis)
	{
		header("Location:xidmetler.php?xdurumDuz=ok");
	}
	else
	{
		header("Location:xidmetelaveet.php?xdurumDuz=no");
	}	
}
if($_GET['xidmetid14'])
{
	$id=$_GET['xidmetid14'];
	$xidmetSil=mysqli_query($baglan,"delete from xidmetler where xidmet_id='$id'");
	if($xidmetSil)
	{
		header("Location:xidmetler.php?xdurumsil=ok");
	}
	else
	{
		header("Location:xidmetler.php?xdurumsil=no");
	}
}



//----------------------------------------Menu elmeliyyat------------------------------------\\
if(isset($_POST['hesab_duzaliset']))
{
	$hesab_id=$_POST['hesab_id'];
	$hesab_ad=$_POST['hesab_ad'];
	$hesab_username=$_POST['hesab_username'];

	

	$hesabDuz=mysqli_query($baglan,"update admin set hesab_ad='$hesab_ad',hesab_username='$hesab_username' where hesab_id=$hesab_id");

	

	if($hesabDuz)
	{
		header("Location:hesab.php?durum=ok");
	}
	else
	{
		header("Location:hesab.php?durum=no");
	}
}

if(isset($_POST['hesab_duzaliset_parol']))
{

	$hesab_id=$_POST['hesab_id'];
	$hesab_kohnaparol=$_POST['hesab_kohnaparol'];
	$hesab_username=$_POST['hesab_yeniparol'];

	$hesabYoxla=mysqli_query($baglan,"select*from admin where hesab_id='$hesab_id'");
	$hesabYoxCek=mysqli_fetch_assoc($hesabYoxla);
	if($hesab_kohnaparol==$hesabYoxCek['hesab_parol'])
	{
		$hesabParol=mysqli_query($baglan,"update admin set hesab_parol='$hesab_yeniparol' where hesab_id=$hesab_id");
		if($hesabParol)
		{
			header("Location:hesab.php?durum=ok");
		}
		else
		{
			header("Location:hesab.php?durum=no");
		}
	}
	else
		{
			header("Location:hesab.php?durum=no");
		}	
}


if(isset($_POST['hesab_duzaliset_sekil']))
	{
	$hesab_id=$_POST['hesab_id'];

	$hsekilyukyer='images/profil';
	@$name=$_FILES['sekilsec']["name"];
	@$tmp_name=$_FILES['sekilsec']["tmp_name"];

	$hferqliad=rand(2000,3000);

	$hsekil_yol=$hsekilyukyer."/".$hferqliad.$name;

	@move_uploaded_file($tmp_name, "$hsekilyukyer/$hferqliad$name");

	$hesabSekil=mysqli_query($baglan,"update admin set hesab_sekilyol='$hsekil_yol' where hesab_id=$hesab_id");
	if($hesabSekil)
	{
		header("Location:hesab.php?durum=ok");
	}
	else
	{
		header("Location:hesab.php?durum=no");
	}

	}



	//----------------------------------------Filial elmeliyyat------------------------------------\\

if(isset($_POST['filial_elaveet']))
{
	$filial_yer=$_POST['filial_yer'];
	$filial_unvan=$_POST['filial_unvan'];
	$filial_telefon=$_POST['filial_telefon'];
	$filial_fax=$_POST['filial_fax'];
	$filial_email=$_POST['filial_email'];

	$filialElave=mysqli_query($baglan,"insert into filiallar(filial_yer,filial_unvan,filial_telefon,filial_fax,filial_email) values('$filial_yer','$filial_unvan','$filial_telefon','$filial_fax','$filial_email')");
	if($filialElave)
	{
		header("Location:filiallar.php?durumEl=ok");
	}
	else
	{
		header("Location:filiallar.php?durumEl=no");
	}
}

if(isset($_POST['filial_duzaliset']))
{
	$filial_id5=$_POST['filial_id5'];
	$filial_yer5=$_POST['filial_yer5'];
	$filial_unvan5=$_POST['filial_unvan5'];
	$filial_telefon5=$_POST['filial_telefon5'];
	$filial_fax5=$_POST['filial_fax5'];
	$filial_email5=$_POST['filial_email5'];


	
	$filialDuzalis=mysqli_query($baglan,"update filiallar set filial_yer='$filial_yer5',filial_unvan='$filial_unvan5',filial_telefon='$filial_telefon5',filial_fax='$filial_fax5',filial_email='$filial_email5' where filial_id='$filial_id5'");

	if($filialDuzalis)
	{
		header("Location:filiallar.php?durumDuz=ok");
	}
	else
	{
		header("Location:filiallar.php?durumDuz=no");
	}	
}
if($_GET['filialid14'])
{
	$id=$_GET['filialid14'];
	$filialSil=mysqli_query($baglan,"delete from filiallar where filial_id='$id'");
	if($filialSil)
	{
		header("Location:filiallar.php?durumsil=ok");
	}
	else
	{
		header("Location:filiallar.php?durumsil=no");
	}
}


//----------------------------------------Haqqinda elmeliyyat------------------------------------\\

if(isset($_POST['haqqindaduzalis']))
{

	$haqqinda_m=$_POST['haqqindam'];
	$haqqSorgu1=mysqli_query($baglan,"update haqqinda set haqqinda='$haqqinda_m' where haqqinda_id=1");
	if($haqqSorgu1)
	{
		header("Location:haqqinda.php?durum=ok");
	}
	else
	{
		header("Location:haqqinda.php?durum=no");
	}
}

?>