<table width="800" border="1" cellspacing="0" cellpadding="0">
 <tr>
 <td width="65">Urun No</td>
 <td width="169">Kategori Adi</td>
 <td width="414">Urun Adı</td>
 <td width="142">Fiyati</td>
 <td width="142">&nbsp;</td>
 </tr>
 <?
 $i=0;
 $sql_text=" select * from urun left join kategori on".
 " urun.u_kat_id=kategori.kt_id";
 $sql=mysql_query($sql_text);
 while($satir=mysql_fetch_assoc($sql))
 { $i++;
 ?>
 <tr>
 <td><? echo $i;?></td>
 <td><? echo $satir['kt_adi'];?></td>
 <td><? echo $satir['u_adi'];?></td>
 <td><? echo $satir['u_fiyat'];?></td>
 <td style="text-align: center">
  <a href="otomasyon.php?s=satis_adet&m_id=<? echo $_GET['m_id'];?>&u_id=<? echo $satir['u_id']; ?>">Sec</a>
 </td>
 </tr>
 <? }?>
</table>