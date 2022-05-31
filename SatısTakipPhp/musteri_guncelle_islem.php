<?
include("baglanti.php");
$sql=" update musteri set m_adi='".$_POST['mad']."' , ".
" m_firma='".$_POST['mfirma']."' , m_tel='".$_POST['mtel']."',".
" m_mail='".$_POST['mmail']."' , m_adres='".$_POST['madres']."' ".
" where m_id='".$_GET['m_id']."' ";
mysql_query($sql);
header('location:otomasyon.php?s=musteri');
?>