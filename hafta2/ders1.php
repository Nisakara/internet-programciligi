<?php

//GETTYPE UYGULAMASI

/*$degisken=true;
$degisken2=3;
$degisken3=5.6;
$degisken4="nisa";
//$degisken5=array("red","blue","yellow"):
//$degisken6=new stdClass;
$degisken7=NULL;
$degisken8="30";

echo gettype($degisken)."<br>".
     gettype($degisken2)."<br>".
	 gettype($degisken3)."<br>".
	 gettype($degisken4)."<br>".
	 //gettype($degisken5)."<br>".
     //gettype($degisken6)."<br>".
     gettype($degisken7)."<br>".
	 gettype($degisken8)."<br>";*/
	 
	 
//GETTYPE EKRAN GÖRÜNTÜSÜ DENEMESİ
//"\" kaçış oparetörü

/*/$sayi=55;
echo "<b>Birinci degiskenin adi:
\$sayi</b>"."<br>".
    "Degeri:".$sayi."<br>".
	"Türü:".gettype($sayi)."<br><br>";
	
	$adi="Nisa";
echo "<b>İkinci degiskenin adi:
\$adi</b>"."<br>".
    "Degeri:".$adi."<br>".
	"Türü:".gettype($adi)."<br><br>";
	
$ondalık=5.1234;
echo "<b>Ücüncü degiskenin adi:
\$ondalık</b>"."<br>".
    "Degeri:".$ondalık."<br>".
	"Türü:".gettype($ondalık)."<br><br>";

$mantıksal=1;
echo "<b>Dördüncü degiskenin adi:
\$mantıksal</b>"."<br>".
    "Degeri:".$mantıksal."<br>".
	
	"Türü:".gettype($mantıksal)."<br><br>"; */
//STTYPE UYGULAMASI
/*$b="32";
settype($b,"integer");
var_dump($b);
echo gettype($b)."<br>";*/

//PHP SABİTLERİ

echo "<h2>PHP SABİTLERİ</h2>"."<br>.
    "Kodun Bulunduğu Yer :".(__LINE__)."<br>".
	"Dosyanın Bulunduğu yer: ".(__FILE__)."<br>".
	"Sunucudaki PHP Versiyonu:".phpversion()."<br>".
	"Sunucudaki İşletim Sistemi: ".(PHP_OS)."<br>".
	"Dosyanın Bulunduğu dizin: ".(__DIR__); 
	
?>