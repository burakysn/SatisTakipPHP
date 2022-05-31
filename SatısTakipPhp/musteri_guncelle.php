<?

$sql=mysql_query(" select * from musteri where m_id='".$_GET['mid']."' ");
while($veri=mysql_fetch_assoc($sql))
{
?>

<form name="form1" method="post" action="musteri_guncelle_islem.php?m_id=<? echo $_GET['mid'];?>">
 
	<table width="800" border="0" align="center" cellpadding="1" cellspacing="1">
 <tr>
 	<td width="147" style="text-align: right">&nbsp;</td>
 	<td width="647">&nbsp;</td>
 </tr>
 
<tr>
 		<td style="text-align: right">Musteri Adi</td>
	 	<td><label for="mad">:</label>
<input name="mad" type="text" id="mad" size="100" value="<? echo $veri['m_adi']; ?>"></td>

</tr>

<tr>
	 <td style="text-align: right">Musteri Firma Adi</td>
	 <td><label for="mfirma">:</label>
 <input name="mfirma" type="text" id="mfirma" size="100" value="<? echo $veri['m_firma'];?>"></td>
</tr>
 
<tr>
 	<td style="text-align: right">Telefon</td>
 	<td><label for="mtel">:</label>
 <input name="mtel" type="text" id="mtel" size="100" value="<? echo $veri['m_tel'];?>"></td>
 
</tr>

<tr>
 	<td style="text-align: right">Mail</td>
 	<td><label for="mmail">:</label>
 <input name="mmail" type="text" id="mmail" size="100" value="<? echo $veri['m_mail'];?>"></td>
 
</tr>
 
<tr>
 	<td style="text-align: right">Adres</td>
 	<td><label for="madres">:</label>
 <input name="madres" type="text" id="madres" size="100" value="<? echo $veri['m_adres'];?>"></td>
 
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