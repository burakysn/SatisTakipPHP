<table width="75%" border="0" align="center">
  <tbody>
    <tr>
      <td colspan="5">&nbsp;</td>
      
    </tr>
    <tr>
      <td colspan="5"><a href="otomasyon.php?s=kullanici_ekle">Kullanici Ekle</a></td>
      
    </tr>
    <tr>
	  <td style="text-align: center">&nbsp;</td>
      <td style="text-align: center">Kullanici Adi</td>
      <td style="text-align: center">Kullanici Sifre</td>
      <td style="text-align: center">Durum</td>
      <td style="text-align: center">Islemler</td>
    </tr>
	  
	  <?
	  
	  $i=0;
	  $sql=mysql_query("select * from kullanici order by k_id asc");
	  while($satir=mysql_fetch_assoc($sql))
	  {
		  $i++;
		  if($i%2==1)
		  {
			  $renk='#bdc3c7';
		  }
		  else
		  {
			  $renk='#ecf0f1';
		  }
	  
	  ?>
    <tr bgcolor="<? echo $renk;?>">
	  <td><? echo $i;?></td>
      <td><? echo $satir['k_adi']; ?></td>
      <td><? echo $satir['k_sifre']; ?></td>
      <td><? echo $satir['k_durum']; ?></td>
	  <td><a href="otomasyon.php?s=kullanici_guncelle&kid=<? echo $satir['k_id']; ?>">Duzenle</a>&nbsp;<a href="kullanici_sil.php?kid=<? echo $satir['k_id']; ?>">Sil</a></td>
      
    </tr>
	  <?
	  }
	  ?>
  </tbody>
</table>
