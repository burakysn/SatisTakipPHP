<?
include("baglanti.php");

$sql=mysql_query(" delete from satis where s_id='".$_GET['sid']."'");
header('location:otomasyon.php?s=satis');
?>