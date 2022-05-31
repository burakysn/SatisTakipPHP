<?

include("baglanti.php");

$sql=" update kullanici set k_adi='".$_POST['kad']."' , ".
" k_sifre='".$_POST['ksif']."' , ".
" k_durum='".$_POST['kdurum']."' ".
" where k_id='".$_GET['k_id']."' ";

mysql_query($sql);

header('location:otomasyon.php?s=kullanici');

?>