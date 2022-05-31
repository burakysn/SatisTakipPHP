<?

$sql=mysql_query(" select * from urun where u_id='".$_GET['uid']."' ");
while($veri=mysql_fetch_assoc($sql))
{
?>

<form name="form1" method="post" action="urun_guncelle_islem.php?u_id=<? echo $_GET['uid'];?>">
 
	<table width="800" border="0" align="center" cellpadding="1" cellspacing="1">
 <tr>
 	<td width="147" style="text-align: right">&nbsp;</td>
 	<td width="647">&nbsp;</td>
 </tr>
 
<tr>
      <td style="text-align: right">Kategori</td>
      <td><label for="kategori">:</label>
      <select name="kategori" id="kategori">
        <? 
		$sql=mysql_query(" select * from kategori order by kt_adi asc ");
		while($satir=mysql_fetch_assoc($sql))
		{
		?>
        <option value="<? echo $satir['kt_id'];?>"><? echo $satir['kt_adi'];?></option>
        <? }?>
        
        
      </select>
      
     </td>
    </tr>

<tr>
	 <td style="text-align: right">Urun Adi</td>
	 <td><label for="mfirma">:</label>
 <input name="uadi" type="text" id="uadi" size="100" value="<? echo $veri['u_adi'];?>"></td>
</tr>
 
<tr>
 	<td style="text-align: right">Fiyat</td>
 	<td><label for="mtel">:</label>
 <input name="ufiyat" type="text" id="ufiyat" size="100" value="<? echo $veri['u_fiyat'];?>"></td>
 
</tr>
 
<tr>
	 <td style="text-align: right">&nbsp;</td>
 	<td><input type="submit" name="submit" id="submit" value="GUNCELLE"></td>
 
</tr>

<tr>
	 <td>&nbsp;</td>
 	<td>&nbsp;</td>
</tr>
 </table>
</form>
<? }?>