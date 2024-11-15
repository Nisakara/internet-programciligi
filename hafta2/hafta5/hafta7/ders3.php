<html>
<head>
  <title>ÜÇE VE BEŞE BÖLÜNME</title>
</head>
<body>
<form name="form" action="" method="post">
<table>
 <tr> 
    <td>1.Sayıyı Giriniz.: <input type="text" name="sayi1"></td>
 </tr>
       <tr> 
        <td>2.Sayıyı Giriniz.: <input type="text" name="sayi2"></td>
</tr>
<tr> 
  <td>Seçim Yapınız:
  <select name="seçim">
     <option value="ucebolunme">İki sayı arasında 3'e bölünen sayılar</option>
	 
	 <option value="besebolunme">İki sayı arasında 5'e bölünen sayılar</option>
	 </select></td>
</tr>
<tr>
<td>
 <input type="submit" name="gonder" value="GÖNDER">
 </tr>
 </td>
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
		case "ucebolunme":
		if($ksayi1>$ksayi2)
		{
			$enb=$ksayi1;
			$enk=$ksayi2;
		}
		else
		{ 
	        $enb=$ksayi2;
			$enk=$ksayi1;
			
		}
		for($i=$enk;$şi<=$enb;$i++)
		{
			if($i%3==0)
			{
			 echo "3'e bölünen sayılar:".$i."<br>";
			}
		} 
        case "besbolunme":
		if($ksayi1>$ksayi2)
		{
			$enb=$ksayi1;
			$enk=$ksayi2;
		}
		else
		{ 
	        $enb=$ksayi2;
			$enk=$ksayi1;
			
		}
		for($i=$enk;$şi<=$enb;$i++)
		{
			if($i%5==0)
			 echo "5'e bölünen sayılar:".$i."<br>";
		} 	
		break;
	}
}
?>