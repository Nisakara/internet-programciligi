<?

include "ders1.php";
$kayıt=$db->exec("INSERT INTO deneme SET id='10',ad='Berat',soyad='yozkatlı'");
if($kayit)
{
	echo "Kayıt gerçekleştirildi. ID değeri: ".$db->LastInsertId();
}



















?>