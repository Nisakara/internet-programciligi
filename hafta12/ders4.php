<?

include "ders1.php";
$guncelleme =$db->exec("UPDET deneme SET adi='irem',soyad='mandal'");
if($guncelleme)
{
	echo "Güncellem Başarılı.";
}
else
{
	echo"Güncelleme Başarılısız.";
}
//veeritabanından prepare ile veri güncelleme
$sorgu=$db->prepare("UPDATE deneme SET ad=?,soyad=?");
$gunelleme=$sorgu->execute(array("kevser","cebeci"));
if($guncelle)
{
	echo "Güncellem Başarılı.";
}
else
{
	echo"Güncelleme Başarılısız.";
}
?>
	