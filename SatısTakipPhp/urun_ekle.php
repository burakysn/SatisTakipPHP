<form name="form1" method="post" action="urun_ekle_islem.php">
  <table width="600" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td width="121">&nbsp;</td>
      <td width="673">&nbsp;</td>
    </tr>
    <tr>
      <td>Kategori</td>
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
      <td>Urun Adi</td>
      <td>: 
        <input type="text" name="u_adi" id="u_adi"></td>
    </tr>
    <tr>
      <td>Urun Fiyati</td>
      <td>: 
        <input type="text" name="u_fiyat" id="u_fiyat"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="KAYDET"></td>
    </tr>
  </table>
</form>
