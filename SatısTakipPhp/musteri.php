<style type="text/css">
.islemler {
	font-weight: bold;
	font-size: 25;
}
	.yazi{
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		font-size: 22px;
	}
	.veriyazi{
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		font-size: 17px;
	}
	.yazi1{
		text-align: left;
		font-size: 22px;
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
	}
</style>
<table width="946" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="674" class="yazi1"><a href="otomasyon.php?s=musteri_ekle">Musteri Ekle</a></td>
    <td width="219">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><table width="1053" border="0">
      <tr>
        <td width="29">&nbsp;</td>
        <td width="129" class="yazi" >Firma Adi</td>
        <td width="152" class="yazi">Yetkili</td>
        <td width="131" class="yazi">Tel</td>
        <td width="164" class="yazi">E-Posta</td>
        <td width="209" class="yazi">Adres</td>
        <td width="209" class="islemler">ISLEMLER</td>
      </tr>
      
      <?
      $i=0;
	  $sql= mysql_query("select * from musteri order by m_id asc");
	  while($satir=mysql_fetch_assoc($sql))
	  {
		  $i=$i+1;
		  if($i%2==1)
		  {
			 $renk ='#bdc3c7';
		}
		else
		{
			$renk='#ecf0f1';
		}
	  ?>
      <tr bgcolor="<? echo $renk; ?>">
        <td align="center"><? echo $i;?> </td>
        <td class="veriyazi"><? echo $satir['m_firma'];?></td>
        <td class="veriyazi"><? echo $satir['m_adi'];?></td>
        <td class="veriyazi"><? echo $satir['m_mail'];?></td>
        <td class="veriyazi"><? echo $satir['m_tel'];?></td>
        <td class="veriyazi"><? echo $satir['m_adres'];?></td>
        <td class="veriyazi"><a href="otomasyon.php?s=musteri_guncelle&mid=<? echo $satir['m_id'];?>">Duzenle</a> <a href="musteri_sil.php?mid=<? echo $satir['m_id'];?>"> Sil</a></td>
      </tr>
      <?
	  }
	  ?>
    </table>
  </table>

