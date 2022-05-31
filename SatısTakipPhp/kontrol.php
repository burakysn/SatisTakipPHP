<?
session_start();

include("baglanti.php");

$sql=mysql_query(" select * from kullanici where "."k_adi='".$_POST['kad']."' and k_sifre='".$_POST['ksifre']."' and k_durum=1 ");

if( mysql_num_rows($sql)>0 )
{
	
$_SESSION['giris']="basarili";
header('location:otomasyon.php');

}
else
{
header('location:index.php?h=1');
}
?>