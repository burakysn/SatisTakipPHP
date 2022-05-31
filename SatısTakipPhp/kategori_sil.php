<?
include("baglanti.php");


$sql=mysql_query(" delete from kategori where kt_id='".$_GET['ktid']."'");
header('location:otomasyon.php?s=kategori');
?>