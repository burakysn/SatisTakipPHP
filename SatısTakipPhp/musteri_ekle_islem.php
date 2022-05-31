<?
include("baglanti.php");


$tarih=date('y-m-d');

 $sql=" insert into musteri values('','".$_POST['madi']."','".$_POST['mfirma']."','".$_POST['mtel']."','".$_POST['mmail']."','".$_POST['madres']."') ";
 
 mysql_query($sql)or die(mysql_error());
 
 header('location:otomasyon.php?s=musteri');

?>