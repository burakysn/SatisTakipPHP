<table width="800" border="0" cellspacing="0" cellpadding="0">
 <tr>
 <td width="37">&nbsp;</td>
 <td width="171"><strong>Firma Adi</strong></td>
 <td width="183"><strong>Yetkili</strong></td>
 <td width="130"><strong>Tel</strong></td>
 <td width="138"><strong>Mail</strong></td>
 <td width="127"><strong>Adres</strong></td>
 <td width="127"><strong>ISLEMLER</strong></td>
 </tr>
 <?
 $i=0;
 $sql=mysql_query(" select * from musteri ");
 while($satir=mysql_fetch_assoc($sql))
 {
 $i=$i+1;
 if($i%2==1)
 {
$renk='#ccc';
 }
	 else
 {
 $renk='#fff';
 }
 ?>
 <tr bgcolor="<? echo $renk;?>">
 <td align="center"><? echo $i;?></td>
 <td><? echo $satir['m_firma'];?></td>
 <td><? echo $satir['m_adi'];?></td>
 <td><? echo $satir['m_tel'];?></td>
 <td><? echo $satir['m_mail'];?></td>
 <td><? echo $satir['m_adres'];?></td>
 <td>
 <a href="otomasyon.php?s=satis_urun&m_id=<? echo $satir['m_id'];?>"> Sec</a>
 </td>
 </tr>
 <?
 }
 ?>
 </table>
