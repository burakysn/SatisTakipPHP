<?
include("baglanti.php");

$a=" insert into urun values('','".$_POST['kategori']."','".$_POST['u_adi']."','".$_POST['u_fiyat']."') ";
mysql_query($a);
header('location:otomasyon.php?s=urunler');

?>