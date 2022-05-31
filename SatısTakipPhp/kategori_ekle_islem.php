<?
include("baglanti.php");

$tarih = date('y-m-d');

$sql = "insert into kategori values ('','".$_POST['kategoriyazi']."')";

mysql_query($sql)or die (mysql_error());

header('location:otomasyon.php?s=kategori')

?>