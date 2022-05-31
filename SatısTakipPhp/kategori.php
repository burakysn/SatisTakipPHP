<style type="text/css">
.kategoriekle {
	text-align: left;
	font-size: 22px;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
}
	.yazi{
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		font-size: 22px;
		text-align: center;
	}
</style>
<form id="form1" name="form1" method="post" action="">
  <table width="430" border="0" align="center">
    <tr>
      <td colspan="3" class="kategoriekle" scope="col"><a href="otomasyon.php?s=kategori_ekle" >Kategori Ekle</a></td>
    </tr>
    <tr>
      <td class="yazi">Kategori No</td>
      <td class="yazi">Kategori Adi</td>
	  <td class="yazi">Islemler</td>
    </tr>
    <?
	$i=0;
	  $sql= mysql_query("select * from kategori order by kt_id asc");
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
    <tr bgcolor="<? echo $renk;?>">
      <td width="101" class="yazi"><? echo $i;?></td>
      <td width="144" class="yazi"><? echo $satir['kt_adi'];?></td>
	  <td class="yazi"><a href="otomasyon.php?s=kategori_guncelle&ktid=<? echo $satir['kt_id'];?>">Duzenle</a><a href="kategori_sil.php?ktid=<? echo $satir['kt_id'];?>">Sil</a></td>
    </tr>
    <?
	  }
	?>
  </table>
</form>
