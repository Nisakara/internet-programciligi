<?php
try
{
$db=new PDO("mysql:host=localhost; dbname=veritabanı;charset=utf8","root","");
echo "Kayıt Başarılı";


}
catch(PDOException $e)
{
	 echo $e->getMassage();
}
















?>