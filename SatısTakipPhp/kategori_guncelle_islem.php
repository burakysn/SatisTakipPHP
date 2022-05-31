<?
include("baglanti.php");
$sql=" update kategori set kt_adi='".$_POST['ktad']."' "." where kt_id='".$_GET['kt_id']."'  ";
mysql_query($sql);
header('location:otomasyon.php?s=kategori');
?>