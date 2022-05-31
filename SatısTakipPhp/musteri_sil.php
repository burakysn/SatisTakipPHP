<?
include("baglanti.php");


$sql=mysql_query(" delete from musteri where m_id='".$_GET['mid']."'");
header('location:otomasyon.php?s=musteri');
?>