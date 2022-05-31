<?
include("baglanti.php");
$tarih=date("y-m-d");
mysql_query(" insert into satis
values('','".$_GET['m_id']."','".$_GET['u_id']."','".$_POST['adet']."','".$tarih."') ");
header('location:otomasyon.php?s=satis');
?>