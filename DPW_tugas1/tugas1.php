<?php
class animal{
	public $Jumlah_Kaki,$Bisa_Terbang;
	}

class Kucing extends animal
{
	function bersuara()
	{
		return "meong meooong";
	}
}

class Ayam extends animal
{
	function bersuara()
	{
		return "cip cip cipp";
	}
}
class Elang extends animal 
{
	function bersuara()
	{
		return "niippp";
	}
}
class Beruang extends animal 
{
	function bersuara()
	{
		return "kwakkk";
	}
}

//Kucing
$Melan = new Kucing;
$Melan->Jumlah_kaki = 4;
$Melan->Bisa_Terbang ="Tidak Bisa Terbang";

echo "Melan Adalah Kucing<br>";
echo "Punya Kaki Sebanyak : " .$Melan->Jumlah_kaki. " <br>";
echo $Melan->Bisa_Terbang. "<br>";
echo "Suaranya :" .$Melan->bersuara(). "<br>";
echo "<hr>"; 

//Ayam
$Erpa = new Ayam;
$Erpa->Jumlah_kaki = 2;
$Erpa->Bisa_Terbang = "Bisa Terbang";

echo "Erpa Adalah Ayam<br>";
echo "Punya Kaki Sebanyak : " .$Erpa->Jumlah_kaki. "<br>";
echo $Erpa->Bisa_Terbang. "<br>";
echo "Suaranya :" .$Erpa->bersuara(). "<br>";
echo "<hr>";

//Elang
$Nurul = new Elang;
$Nurul->Jumlah_kaki = 2;
$Nurul->Bisa_Terbang = "Bisa Terbang";

echo "Nurul Adalah Elang<br>";
echo "Punya Kaki Sebanyak : " .$Nurul->Jumlah_kaki. " <br>";
echo $Nurul->Bisa_Terbang. "<br>";
echo "Suaranya :" .$Nurul->bersuara(). "<br>";
echo "<hr>";

//Beruang
$Sopiya = new Beruang;
$Sopiya->Jumlah_kaki = 4;
$Sopiya->Bisa_Terbang ="Tidak Bisa Terbang";

echo "Sopiya Adalah Beruang<br>";
echo "Punya Kaki Sebanyak : " .$Sopiya->Jumlah_kaki. "<br>";
echo $Sopiya->Bisa_Terbang. "<br>";
echo "Suaranya :" .$Sopiya->bersuara(). "<br>";
echo "<hr>";
?>