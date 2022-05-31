<style type="text/css">
.yazi {
	font-size: 22px;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
	text-align: left;
	text-align: center;
}
	.yazi1{
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		font-size: 22px;
		text-align: left;
	}
	.yazi2{
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		font-size: 22px;
		text-align: left;
	}
	
</style>
<table width="1026" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5" class="yazi2"><a href="otomasyon.php?s=urun_ekle">Urun Ekle</a></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" class="yazi1">Urun Listesi</td>
  </tr>
  <tr>
    <td  class="yazi1">Urun No</td>
    <td  class="yazi1">Kategori Adi</td>
    <td  class="yazi1">Urun Adi</td>
    <td  class="yazi1">Fiyat</td>
	<td  class="yazi1"><strong>ISLEMLER</strong></td>
	
  </tr>
 
  <?
  $i=0;
  $sql_text=" select * from urun left join kategori on "."urun.u_kat_id=kt_id";
  $sql=mysql_query($sql_text);
  while($satir=mysql_fetch_assoc($sql))
  {
	  $i++;
	  if($i%2==1)
		  {
			 $renk ='#CC99FF ';
		}
		else
		{
			$renk='#CCFFFF';
		}
  	
  ?>
   <tr bgcolor="<? echo $renk; ?>">
    	<td height="21"><? echo $i; ?></td>
    	<td class="yazi1"><? echo $satir['kt_adi'];?></td>
    	<td class="yazi1"><? echo $satir['u_adi'];?></td>
    	<td class="yazi1"><? echo $satir['u_fiyat'];?></td>
		<td class="yazi1"><a href="otomasyon.php?s=urun_guncelle&uid=<? echo $satir['u_id'];?>">Duzenle</a><a href="urun_sil.php?uid=<? echo $satir['u_id'];?>">Sil</a></td>
   </tr>
  <?
  }
  ?>
</table>
