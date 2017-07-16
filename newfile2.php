
   
<?php
// Polaczenie z baza mysql.
$connection = mysql_connect("localhost" , "galaxyog_Pk2" , "Derwisz")
or die ("Kicha ");

// Check connection
if (!$connection)   
{
	die("Connection failed: " . mysql_error());
}
echo "Connected successfully";
echo "<BR>";


{
//Wybranie bazy danych "galaxyog_WWWPGF"
$db = mysql_select_db("galaxyog_WWWPGF", $connection)
or die ("Kicha2");

//Przykladowe pobranie CKK
$query = "Select CKK from Kierowcy Where Name = 'Roman'";
$result = mysql_query($query)
or die ("Nie powiodla sie 2 ". mysql_error());
list($Ckk) = mysql_fetch_array($result);       //Zapisanie do zmiennej
echo "CKK ",  $Ckk, "<BR>";
}
//$Ckk = $Ckk + $Ckk;
//echo "2", $Ckk, "<BR>";

//Dla pobranego CKK pobranie Dnia, Miesi¹ca, Roku
$Data = array(11,22,33); 
$Data = Pobranie_daty($Ckk, $Data);

//echo $Data[1];
//echo "GFDS";
echo "Po wykonaniu funkcji Pobranie_daty : ", $Data[1], "<BR>";


//Pobranie ilosci dni w danym miesi¹cu
$query = "SELECT Dnimiesiaca FROM Dni_w_miesiacu WHERE Miesiac = $Data[1] ";
$result = mysql_query($query);
list($Dni) = mysql_fetch_array($result);
echo "Dni--- ", $Dni,  "<BR>";

$iltras = 5;
$trasa = "RZ";
//form($iltras,$trasa, $Dni);
jeden_wpis();
/*
$query = "SELECT * FROM Dni_mc_rok" ;
$result = mysql_query($query)
or die ("Nie powiodla sie ". mysql_error());
echo"<Table Border='1'>";
echo "<TR>";
echo "<TH>Dzien</TH><TH>Trasa</TH><TH>Dystans</TD>";
echo "</TR>";

while ($row = mysql_fetch_array($result)){
	echo "<TR>";
	echo "<TD>", $row['Dzien'], "</TD><TD>", $row['Trasa'], "</TD>",
	"<TD>", $row['Dystans'], "</TD>";
	echo "</TR>";
}
*/	
echo "<CENTER>";
echo "<h1>", "Miesiac ", "$Data[1]", "  - - -  ","$Data[2]", "</h1>";	
echo "<BR />"	;


echo "<table border= '1' style= width:1200px height:200px >";
echo "<TR>";
echo "<TH>Dzien</TH><TH>Trasa</TH><TH>Dystans</TH><TH>Trasa</TH><TH>Dystans</TD>";
echo "<TH>Trasa</TH><TH>Dystans</TH><TH>Trasa</TH><TH>Dystans</TH><TH>Trasa</TH><TH>Dystans</TH><TH>Trasa</TH><TH>Dystans</TD>";
echo "</TR>";
echo "</CENTER>";
echo "<BR>";

echo "<Table Width='1200' height='300' Border='1'>";
echo "<TR>";
echo "<TH>$Data[0]</TH><TH>Trasa</TH><TH>Dystans</TH><TH>Trasa</TH><TH>Dystans</TD>";
echo "<TH>Trasa</TH><TH>Dystans</TH><TH>Trasa</TH><TH>Dystans</TH><TH>Trasa</TH><TH>Dystans</TH><TH>Trasa</TH><TH>Dystans</TD>";
echo "</TR>";
echo "</CENTER>";
echo "<BR>";
echo "<form>";
echo "buton ";
echo 	"Imiê:<br />" ;		
echo	"<input name='imie' value='100' /><br />" ;
echo "</form>";

//Testowy formularz
function form($iltras, $trasa, $Dni){
	
	echo " $Dni ";
	echo " $iltras ";
	echo " $trasa <BR><br />";
	echo "<form name = 'FormDzien'>";
	echo "<form action='formPHP.php' method='post'>";
	for ($w=0 ; $w <= $Dni ; $w++){
	for ($g=0 ; $g <= $iltras; $g++){
	
	//echo "<   $i >";
	
	//echo "<div>";
	//echo "Imiê:<br />";
	if (!$g ){
	echo "<input name='dzien' value=' $Dni ' style='width: 25px;' />";	
	//$i++;
	}
	elseif($i >= 1){
	echo "Trasa ";	
	echo "<input name='trasa' value=' RZ ' style='width: 55px;' />";	
	echo " KM : ";
	echo "<input name='trasa' value=' - ' style='width: 55px;' />";
	
	}
	$i++;
	}
	echo "<BR><BR />";
	}
	//echo "Adres e-mail:<br />";	
	//echo "<input name='email' value='' /><br />";	
	echo "<input type='checkbox' value='checked' name='mailing' />Chcê otrzymywaæ informacje handlowe<br /><br />";
	echo "<input type='submit' value=' Zapisz ' name='submit' />";
	
	//echo "</div>";
	
	echo "</form>";
	
	
}

function jeden_wpis(){
    echo "Trasa ";
    echo "<input name='trasa' value=' RZ ' style='width: 55px;' />";
    echo " KM : ";
    echo "<input name='trasa' value=' - ' style='width: 55px;' />";
}

function Pobranie_daty($Ckk, $Data){
	$query = "SELECT Aktudzien FROM Kierowcy WHERE CKK = $Ckk" ;
	$result = mysql_query($query);
	list($Aktudzien) = mysql_fetch_array($result);
	echo $Aktudzien, "<BR>";
	
	$query = "SELECT Aktumies FROM Kierowcy WHERE CKK = $Ckk" ;
	$result = mysql_query($query);
	list($Aktumies) = mysql_fetch_array($result);
	echo $Aktumies, "<BR>";
	
	$query = "SELECT Akturok FROM Kierowcy WHERE CKK = $Ckk" ;
	$result = mysql_query($query);
	list($Akturok) = mysql_fetch_array($result);
	echo $Akturok, "<BR>";
	$Data = array($Aktudzien , $Aktumies , $Akturok) ;
	echo "W funkcji : ", $Data[2], "<BR>";
	Return $Data ; 
	
}
/*
$query = "SELECT * FROM Dni_mc_rok" ;
$result = mysql_query($query)
or die ("Nie powiodla sie ". mysql_error());



echo"<Table Border='1'>";
echo "<TR>";
echo "<TH>Dzien</TH><TH>Trasa</TH><TH>Dystans</TD>";
echo "</TR>";


while ($row = mysql_fetch_array($result))
{
	echo "<TR>";
	echo "<TD>", $row['Dzien'], "</TD><TD>", $row['Trasa'], "</TD>",
	"<TD>", $row['Dystans'], "</TD>";
	echo "</TR>";
	
}
echo "</Table>";
*/
mysqli_close($connection);
?>