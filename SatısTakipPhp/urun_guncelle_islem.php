<?
include("baglanti.php");

$sql=" update urun set u_kat_id='".$_POST['kategori']."' , ".
" u_adi='".$_POST['uadi']."' , ".
" u_fiyat='".$_POST['ufiyat']."' ".
" where u_id='".$_GET['u_id']."'  ";

mysql_query($sql);

header('location:otomasyon.php?s=urunler');


?>