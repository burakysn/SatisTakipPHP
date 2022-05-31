<?
include("baglanti.php");


$sql=mysql_query(" delete from urun where u_id='".$_GET['uid']."'");
header('location:otomasyon.php?s=urunler');
?>