<?
include("baglanti.php");


$sql=mysql_query(" delete from kullanici where k_id='".$_GET['kid']."'");
header('location:otomasyon.php?s=kullanici');
?>