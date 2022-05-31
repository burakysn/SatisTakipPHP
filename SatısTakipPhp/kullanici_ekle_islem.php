<?

include("baglanti.php");

$tarih = date('y-m-d');

$sql="insert into kullanici values('', '".$_POST['kad']."' ,'".$_POST['ksif']."', '".$_POST['kdurum']."') ";

mysql_query($sql)or die(mysql_error());

header('location:otomasyon.php?s=kullanici')
?>