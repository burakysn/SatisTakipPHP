<?

$sql=mysql_query(" select * from kullanici where k_id='".$_GET['kid']."' ");
while($veri=mysql_fetch_assoc($sql))
{
?>

<form name="form1" method="post" action="kullanici_guncelle_islem.php?k_id=<? echo $_GET['kid'];?>">
 
	<table width="800" border="0" align="center" cellpadding="1" cellspacing="1">
 <tr>
 	<td width="147" style="text-align: right">&nbsp;</td>
 	<td width="647">&nbsp;</td>
 </tr>
 
<tr>
 		<td style="text-align: right">Kullanici Adi</td>
	 	<td><label for="kad">:</label>
<input name="kad" type="text" id="kad" size="100" value="<? echo $veri['k_adi']; ?>"></td>

</tr>

<tr>
	 <td style="text-align: left">Kullanici Sifresi</td>
	 <td><label for="ksif">:</label>
 <input name="ksif" type="text" id="ksif" size="100" value="<? echo $veri['k_sifre'];?>"></td>
</tr>
 
<tr>
 	<td style="text-align: right">Durum</td>
 	<td><label for="kdurum">:</label>
 <input name="kdurum" type="text" id="kdurum" size="100" value="<? echo $veri['k_durum'];?>"></td>
 
</tr>


 
<tr>
	 <td style="text-align: right">&nbsp;</td>
 	<td><input type="submit" name="submit" id="submit" value="GÜNCELLE"></td>
 
</tr>

<tr>
	 <td>&nbsp;</td>
 	<td>&nbsp;</td>
</tr>
 </table>
</form>
<? }?>