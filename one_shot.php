<?php
$connection = polacz();
$Ckk = wybr_bazy($connection);



//Dla pobranego CKK pobranie Dnia, Miesi¹ca, Roku
$Data = array(11,22,33);
$Data = Pobranie_daty($Ckk, $Data);
  

echo "<CENTER>";
echo "<h1>", "Miesiac ", "$Data[1]", " / ","$Data[2]", "</h1>";
echo "<BR />";

echo "<form id='form1' name='form1' method='post' action='one_shot.php'>";
echo "<table width='400' border='1'>";
echo "<TR>";

echo "<input type='submit' name='test1' value='Nastêpny'>";
echo "<input type='submit' name='test2' value='Poprzedni'>";
echo "<input type='submit' name='test3' value='akcja3'>";

echo "<TD>",'gfj',"</TD";

echo "</TR>";
echo "</table>";
echo "</form>";

if( isset($_POST['test1']) ){
    //akcja 1
    //echo "Akc1";
  wypisz_dzien($Data);
    //echo "<BR />";
} else if( isset($_POST['test2']) ){
    //akcja 2
    echo "Akc2";
} else if( isset($_POST['test3']) ){
    //akcja 3
    echo "Akc3";
}






//------------------ FUNKCJE ------------------------------------//

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

function wybr_bazy($connection)
{
    //Wybranie bazy danych "galaxyog_WWWPGF"
    $db = mysql_select_db("galaxyog_WWWPGF", $connection)
    or die ("Kicha2");
    
    //Przykladowe pobranie CKK
    $query = "Select CKK from Kierowcy Where Name = 'Roman'";
    $result = mysql_query($query)
    or die ("Nie powiodla sie 2 ". mysql_error());
    list($Ckk) = mysql_fetch_array($result);  //Zapisanie do zmiennej
    echo "CKK ",  $Ckk, "<BR>";
    return $Ckk;
}

function polacz(){
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
    return $connection;
}

//Wypisuje dzien z bazy i czeka na zmiany

function wypisz_dzien($Data){
    echo "Dzieñ "; 
    echo "<input name='dzien' value=' $Data[0] ' style='width: 55px;' />";
    echo "Trasa ";
    echo "<input name='trasa' value=' RZ ' style='width: 55px;' />";
    echo " KM : ";
    echo "<input name='trasa' value=' - ' style='width: 55px;' />";
    
}

?>


<form id="form1" name="form1" method="get" action="display.php">
<table width="400" border="1">
<tr>
<td><label>Multiple Selection </label>&nbsp;</td>
<td><select name="select2" size="3" multiple="multiple" tabindex="1">
<option value="11">eleven</option>
<option value="12">twelve</option>
<option value="13">thirette</option>
<option value="14">fourteen</option>
<option value="15">fifteen</option>
<option value="16">sixteen</option>
<option value="17">seventeen</option>
<option value="18">eighteen</option>
<option value="19">nineteen</option>
<option value="20">twenty</option>
</select>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" tabindex="2" /></td>
</tr>
</table>
</form>