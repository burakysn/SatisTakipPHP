<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MUSTERI TAKIP OTOMASYONU</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="kontrol.php">
	<table width="400" border="1" align="center"  >
  <tbody>
    
	<tr>
      <td colspan="2" style="text-align: center">MUSTERI TAKIP OTOMASYONU</td>
    </tr>
   
	  <tr>
	  	<td height="20" colspan="2"><? if( $_GET['h']==1){echo "Bilgiler yanlis";}?></td>
	  </tr>
	  <tr>
      <td style="text-align: right">Kullanici Adi:</td>
      <td><input type="text" name="kad" id="kad" ></td>
    </tr>
	
	  <tr>
      <td style="text-align: right">Sifre:</td>
      <td><input type="password" name="ksifre" id="ksifre"></td>
    </tr>
	  
	  <tr>
      <td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="GIRIS"></td>
      
      
    </tr>
  </tbody>
</table>
</form>
	

</body>
</html>