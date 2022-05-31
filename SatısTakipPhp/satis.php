<style type="text/css">
.yazi {
	font-size: 22px;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
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

<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
 <tr>
 	<td class="yazi2"><a href="otomasyon.php?s=satis_musteri">Satis Yap</a></td>
 </tr>
 <tr>
 	<td><table width="800" border="0" cellspacing="0" cellpadding="0">
 <tr>
 	<td class="yazi1"><strong>S.No</strong></td>
 	<td class="yazi1"><strong>Musteri</strong></td>
 	<td class="yazi1"><strong>Kategori</strong></td>
 	<td class="yazi1"><strong>Urun</strong></td>
 	<td class="yazi1"><strong>Adet</strong></td>
 	<td  class="yazi1"><strong>Tutar</strong></td>
 </tr>
 <?
	 $i=0;
 $sql_txt="SELECT ".
" * ".
" FROM `satis` left join musteri on satis.s_m_id=musteri.m_id ".
" left join urun on satis.s_u_id=urun.u_id ".
" left join kategori on kategori.kt_id=urun.u_kat_id ";
 $sql=mysql_query($sql_txt);
 while($veri=mysql_fetch_assoc($sql))
 {
	 $i++;
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
 	<td class="yazi1"><? echo $veri['s_id'];?></td>
 	<td class="yazi1"><? echo $veri['m_firma'];?></td>
 	<td class="yazi1"><? echo $veri['kt_adi'];?></td>
 	<td class="yazi1"><? echo $veri['u_adi'];?></td>
 	<td class="yazi1"><? echo $veri['s_adet'];?></td>
 	<td class="yazi1"><? echo $veri['s_adet']*$veri['u_fiyat'];?> TL</td>
	<td><a href="satis_sil.php?sid=<? echo $veri['s_id'];?>">Sil</a></td>
 </tr>
 <? }?>

 </table></td>
 </tr>
</table>