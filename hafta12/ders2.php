<?php

include "ders1.php";
$kayit=$db->exec("INSERT INTO deneme SET id='4',ad='Gelişim',soyad='Üniversite'");
if($kayit)
{
	echo"Kayıt işlemi başarılı";
}
else
{
	echo "Kayıt işlemi başarısız";
}
//veritabanına prepare kullanılarak manuel veri ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET id=?,ad=?,soyad=?");
$kayit=$sorgu->execute(array("2","Berat","Nisa Karagöz"));
if($kayit)
{
	echo "Kayıt İşlemi başarılı";
}
else
{
	echo "Kayıt İşlemi başarısız";
}

?>