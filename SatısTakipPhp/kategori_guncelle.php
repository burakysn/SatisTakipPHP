<?

$sql=mysql_query(" select * from kategori where kt_id='".$_GET['ktid']."' ");
while($veri=mysql_fetch_assoc($sql))
{
?>

<form name="form1" method="post" action="kategori_guncelle_islem.php?kt_id=<? echo $_GET['ktid'];?>">
 
	<table width="800" border="0" align="center" cellpadding="1" cellspacing="1">
 <tr>
 	<td width="147" style="text-align: right">&nbsp;</td>
 	<td width="647">&nbsp;</td>
 </tr>
 
<tr>
 		<td style="text-align: right">Kategori Adi</td>
	 	<td><label for="mad">:</label>
<input name="ktad" type="text" id="ktad" size="100" value="<? echo $veri['kt_adi']; ?>"></td>

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