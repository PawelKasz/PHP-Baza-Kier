!doctype html>
<html>
  <head>
    <title>Przyciski</title>
    <meta charset="utf-8" />
 
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
<?php
require_once('klasa.php');

$przycisk1=new Przyciski();
$przycisk1->napis='Nast�pny dzie�';
$przycisk1->szerokosc='300';
$przycisk1->wyswietl();

$przycisk2=new Przyciski();
$przycisk2->pozycja_y='60';
$przycisk2->napis='Poprzedni dzie�';
$przycisk2->adres='http://glowacki.p9.pl';
$przycisk2->szerokosc='300';
$przycisk2->kolor='red';
$przycisk2->wyswietl();
?>
  </body>
</html>