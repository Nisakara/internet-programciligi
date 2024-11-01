<html>
<head>
  <meta charset="UTF-8"
 <title>SWİTCH CASE YAPISI KULLANIMI</title>
 </head>
 <body>
   <form name="form" action="" method="post">
    Sayı Giriniz:
	<input type="text" name="gun">
	<input type="submit" name="gonder" value="Gönder">
	
</form>
</body>
</html>

<?php
if(isset($_POST["gonder"]))
{
	$kgun=$_POST["gun"];
	switch($kgun){
		case 1:echo "Bugun günlerden Pazartesi";
		break;
		case 2:echo "Bugun günlerden Salı";
		break;
		case 3:echo "Bugun günlerden Çarşamba";
		break;
		case 4:echo "Bugun günlerden Perşembe";
		break;
		case 5:echo "Bugun günlerden Cuma";
		break;
		case 6:echo "Bugun günlerden Cumartesi";
		break;
		case 7 :echo "Bugun günlerden Pazar";
		break;
	default: echo "Böyle bir gün olamaz";
	}
}

?>