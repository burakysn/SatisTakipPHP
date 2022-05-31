<style type="text/css">
	.yazi{
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		font-size: 22px;
		text-align: center;
	}
	
</style>
<?
session_start();

include("baglanti.php");

if( $_SESSION['giris']=="basarili")
{
	if(isset($_GET['s']))
	{
		 $sayfa=$_GET['s'];
	}
	else
	{
		$sayfa="ana";
	}
	
?>
<html>
<head>
<meta charset="utf-8">
<title> MUSTERI TAKIP OTOMASYONU</title>
</head>

<body>
	
<table width="100%" border="0">
  <tbody>
    <tr>
      <td class="yazi"><a href="otomasyon.php">Anasayfa</a></td>
      <td class="yazi"><a href="otomasyon.php?s=musteri">Musteri</a></td>
      <td class="yazi"><a href="otomasyon.php?s=kategori">Kategori</a></td>
      <td class="yazi"><a href="otomasyon.php?s=urunler">Urun</a></td>
      <td class="yazi"><a href="otomasyon.php?s=satis">Satis</a></td>
      <td class="yazi"><a href="otomasyon.php?s=kullanici">Kullanici</a></td>
      <td class="yazi"><a href="otomasyon.php?s=cikis">Cikis</a></td>
    </tr>
    <tr>
      <td colspan="7"><? include( $sayfa.".php");?></td>
     
    </tr>
  </tbody>
</table>
	
</body>
</html>
<?php
}
else
{
header('location:index.php?h=2');
}
?>