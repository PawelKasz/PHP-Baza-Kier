<HTML xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>   
<meta http-equiv="Content-Type" content="text/html:
charset=UTF-8" />
</head>
<body>
<CENTER>
<h1>Listy wyboru</h1>
<table  width="100" border="1">
<form  METOD="GET" action="newfile.php">
	Wybierz swoje ulubione owoce:  GRUSZKA
	<BR>
	<BR>
	<SELECT NAME="nazwa_naszej_listy"  MULTIPLE="multiple" size="2">
		<option value="1"> A</option>
		<option value="2"> BB</option>
		<option value="3"> D</option>
		<option value="4"> E</option>
		<option value="5"> M</option>
		<option value="6"> O</option>
	</SELECT>
	</table>
	<BR>
</form> 
<BR>
<table width="300" border="1">
	<tr>
		<td>Pierwsza</td>
		<td>Druga</td>
	</tr>
	<tr>
		<td>Trzecia</td>
		<td>Czwarta</td>
		</tr>
	
</table>
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
<?php
echo "Witajcie w naszej bajce.";
$kierowca = 5 ;
$trasa = 15 ;
echo "Wynik " , $trasa + $kierowca , "<BR>" ;
echo "Po dodaniu 3 wynik = " , $trasa + 3 , "<BR>" ;
$ilosc = $trasa + $kierowca ;
echo "Ilosc " , $ilosc ;

$tresc = '<table id="tabela">';
for($i=1;$i<$komorki;$i++){
	$tresc.='<tr>';
	for($a=0;$a<$kolumny;$a++){
		$tresc.='<td>';
	}
	$tresc.'</tr>';
}
$tresc.= '</table>';
echo $tresc;


	//phpinfo();
	?>
	
	
<table>
<tr>
  <th>a</th>
  
<?php

$podstawa = 10;
$wykladnik = 5;

for ($i = 0; $i <= $wykladnik ; $i++) {
    echo "<th>a<sup>$i</sup></th>\n";
}
?>  

</tr>
<tr>
</tr>
<?php

for ($i = 2; $i <= $podstawa; $i++) {
    echo "<tr>\n";
    echo "<th>$i</th>\n";    
    for ($j = 0; $j <= $wykladnik; $j++) {    
        echo '<td>';
        echo pow($i, $j);
        echo "</td>\n";
    }
    echo "</tr>\n";    
}
?>
</table>
<?php 
$ilosc_komorek = 2;
$nazwa[0] = (1);
$nazwa[1] = (2);
$nazwa[2] = (3);

    echo "<table border='1'>";
    for($i=0;$i<$ilosc_komorek;$i++)
    {
      $nazwa[$i]= 1+$nazwa[$i-1];
      echo"<tr>		
    	<td> $i 


<input type='text' name='nazwa_". $nazwa[$i] ."' size='25' /> </td>
	<td> <input type='text'  size='25' /> </td>
      </tr>";
    }
    echo "</table>";
?>

<?php 


$connection = mysql_connect("localhost" , "galaxyog_Pk2" , "Derwisz");


// or die ("Kicha ");

// Check connection
if (!$connection) 
{
    die("Connection failed: " . mysql_error());
}
echo "Connected successfully";




$db = mysql_select_db("galaxyog_WWWPGF", $connection)
 or die ("Kicha2");


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
 
 mysqli_close($connection);
?>
	</CENTER>
	</body>
</HTML>	