<?

mysql_connect("localhost","root","12345678");
mysql_select_db("musteritakip");

mysql_query("SET NAMES 'utf-8'");
mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
?>