<html>

<head>
  <meta charset="UTF-8"
 <title>Switch ile hesap makinesi</title>
 </head>
 <body>
   <form name="form" action="" method="post">
    <table>
	  <tr>
	    <td>1.Sayıyı Giriniz:</td>
		<td><input type="text" name="sayi1"></td>
	  </tr>
	  <tr>
	    <td>2.Sayıyı giriniz:</td>
		<td><input type="text" name="sayi2"></td>
	 </tr>
	 <tr>
	    <td>İşlem Tipini Seçiniz:</td>
		<td><select name="secim">
		<option value="topla">Toplama</option>
		<option value="cikar">cıkar</option>
		<option value="carp">carp</option>
		<option value="bol">bol</option>
     </select></td>
	 </tr>
	 <tr>
	 <td><input type="sumbit" name="islem" value="İşlem Yap"></td>
	 </tr>
	 </table>
	</form>
  </body>
 </html>
 
<?php
if(isset($_POST["gonder"]))
{
	$ksayi1=$_POST["sayi1"];
    $ksayi2=$_POST["sayi2"];
	$ksecim=$_POST["secim"];
	switch($ksecim)
	{
		case "topla":
		  $topla=$ksayi1+$ksayi2;
		  echo "Toplama işleminin sonucu: ".$topla;
		  break;
		  
		case "cikar":
		  $topla=$ksayi1-$ksayi2;
		  echo "Çıkarma işleminin sonucu: ".$cikar;
		  break;
		
		case "carp":
		  $topla=$ksayi1*$ksayi2;
		  echo "Çarpma işleminin sonucu: ".$topla;
		  break;
		  
		  case "böl":
		  $topla=$ksayi1/$ksayi2;
		  echo "Bölme işleminin sonucu: ".$böl;
		  break;
    }
}
?>

