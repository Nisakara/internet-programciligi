<html> 
<head>
<title>AGİ FORM</title>
</head>
<body>
<form name="form" action="" method="post">
     <table width="500" border="0">
	     <tr>
		   <td>TC:</td>
		   <td><input type="number" name="tc"></td>
		 </tr>
		 <tr>
              <td>AD:</td>
		      <td><input type="text" name="ad"></td>
		 </tr>
         <tr>
             <td>SOYAD:</td>
		     <td><input type="text" name="soyad"></td>
	     </tr>
		 <tr>
		     <td>TC Kimlik:</td>
			 <td><input type="text" name="tc kimlik"></td>
		 </tr>
		 <tr>
           	<td>Cinsiyet:</td>
            <td><input type="radio" name="cins" value="Kadın"><input type="radio" name="cins" value="Erkek"></td>
        </tr>
		<tr>
		<td>Maaş:</td>
		<td><input type="text" name="maas"></td>
		</tr>
		<tr>
		   <td>Çocuk Sayısı:</td>
		   <td><input type="radio" name="cocuksayısı" value="1">1<input type="radio" name="cocuksayısı"value="2">2 <input type="radio" name="cocuksayısı"value="3'den fazla">3'en fazla</td>
        </tr>
     <tr colspan="4">
          <td><input type="submit" name="ekle" value="EKLE">
		  <input type="submit" name="sil" value="SİL">
		  <input type="submit" name="degis" value="DEĞİŞTİR">
		  <input type="submit" name="listele" value="LİSTELE"></td>
	</tr>
	</table>
</form>
</body>
</html>

<?php
$db=new PDO("mysql:host=localhost; dbname=maasisci;charset=ytf8","root","");
if(isset($_POST["ekle"]))
{
	$ktc=$_POST["ad"];
	$ksoyad=$_POST["soyad"];
	$ktc=$_POST["tc"];
	$kcinsiyet=$_POST["cinsiyet"];
    $kmaas=$_POST["maas"];
	$kcocuksayisi=$_POST["cocuk_sayisi"];
	$sonmaas=0;
	if($kcocuksayisi==1)
	{$sonmaas=$kmaas+500;}
    else if ($kcocuksayisi==2)
	{$sonmaas=$kmaas+600;}
    else if ($kcocuksayisi==3)
	{$sonmaas=$kmaas+700;}
    if($db)
	{echo "Veritabanına bağlantı gerçekleşti";}
$ekle=$db->exec("INSERT INTO durum(tc,ad,soyad,cinsiyet,maas,cocuksayisi,tmaas)VALUES
('$ktc','$kad','$ksoyad','$kcinsiyet','$kmaas','$kcocuksayisi','$sonmaas')");
if($ekle)
{echo "Kayıt ekleme başarılı";}
else
{echo "Kayıt ekleme başarısız";}


if($kcocuksayisi==1)
	{$sonmaas=$kmaas+500;}
    else if ($kcocuksayisi==2)
	{$sonmaas=$kmaas+600;}
    else if ($kcocuksayisi==3)
	{$sonmaas=$kmaas+700;}
 if($db)
 { echo "Veritabanına bağlantı gerçekleşti";}
$guncelle=$db->exec("UPDATE durum SET tc='$ktc',ad='$kad',soyad='$ksoyad',cinsiyet='$kcinsiyet',maas='$kmaas',cocuksayisi='$kcocuksayisi',tmaas='$sonmaas' WHERE tc='$ktc'");
if($guncelle)
{echo "Güncelleme başarılı";}
else
{echo "güncelleme baiarısız";}
?>
