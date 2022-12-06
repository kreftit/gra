<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dokument bez tytułu</title>
</head>
<?php
require_once ('db_krzysz.php');

DBOpen() ;
$xx = $_POST['x'];
$xx2 = $_POST['x'];
$xx3 = $_POST['x'];
$xx4 = $_POST['x'];
$xx5 = $_POST['x'];
$xx6 = $_POST['x'];
$xx7 = $_POST['x'];
$xx8 = $_POST['x'];
$yy  = $_POST["y"];
$yy2  = $_POST["y"];
$yy3  = $_POST["y"];
$yy4  = $_POST["y"];
$yy5  = $_POST["y"];
$yy6  = $_POST["y"];
$yy7  = $_POST["y"];
$yy8  = $_POST["y"];



echo "Sprawdzamy zmienne";
echo $xx;
echo $yy;
echo $vv;
echo "<br />";
$kol =mysql_query("select * from move "); $kol2= mysql_result($kol,0,0);
echo "Sprawdzamy kolor:";
echo $kol2;
echo "<br />";
//Sprawdzamy czy ruch jest możliwy
$m1 =mysql_query("select V from reversi where X=$xx and Y=$yy "); $m2= mysql_result($m1,0,0);
echo "!!!!Sprawdzamy V pola";
echo $m2;
echo "<br />";
if ( $m2 != 0)
{
	$niem = " Ruch niemożlowy";
	echo $niem;
	mysql_query("update rev set name = 'Na danej pozycji już jest pionek. Podaj inną pozycję' ");

}
else

		if ($kol2 == "white") 
		{

		mysql_query("update reversi	set V=1 where X=$xx and Y=$yy");
		mysql_query("update move set move='black' ");
		echo "ruch wykonany";
			mysql_query("update rev set name = 'Twoj Ruch' ");
		
}
// funkcja wygranej
//sprawdzanie od pionka w górę

$yy--;
$gra1 =mysql_query("select V from reversi where X=$xx and Y=$yy "); 
$gra2= mysql_result($gra1,0,0);
if ($gra2==1)
echo "bład";
else	{
		for ($yy; $yy=0; $yy--){
			$gra1 =mysql_query("select V from reversi where X=$xx and Y=$yy "); $gra2= mysql_result($gra1,0,0);
			if ($gra2 ==1){
				echo "błąd";
									}
			else{
				if ($gra2 ==2){
					mysql_query("update reversi set V=1 where X=$xx and Y=$yy");
											}
					
							};
}
}

   
   // sprawdzanie od pionka w górę i prawo XXYY2
	//if ($xx2 != 0) {
	//if($yy2 !=0) {
$xx2++;
$yy2--;

$gra1 =mysql_query("select V from reversi where X=$xx2 and Y=$yy2 "); 
$gra2= mysql_result($gra1,0,0);
echo"<br />";
echo"SPRADZAM@!@! Ponownie";
echo $gra2;
if ($gra2==1)
echo "bład";
else	{
		for ($yy2; $yy2=0; $yy2--){
			for ($xx2; $xx2<8; $xx2++){
					$gra1 =mysql_query("select V from reversi where X=$xx2 and Y=$yy2 "); $gra2= mysql_result($gra1,0,0);
					if ($gra2 ==1){
						echo "błąd";
									}
					else{
						if ($gra2 ==2){
							mysql_query("update reversi set V=1 where X=$xx2 and Y=$yy2");
												}
							}
															};
														};
		}
		 // sprawdzanie od pionka w prawo XXYY3
	//if ($xx2 != 0) {
	//if($yy2 !=0) {
$xx3++;


$gra11 =mysql_query("select V from reversi where X=$xx3 and Y=$yy3 "); 
$gra22= mysql_result($gra11,0,0);
echo"<br />";
echo"SPRADZAM@!@! Ponownie";
echo $gra2;
if ($gra22==1)
echo "bład";
else	{
	//	for ($yy2; $yy2>=0; $yy2--){
			for ($x3x; $xx3<8; $xx3++){
			$gra11 =mysql_query("select V from reversi where X=$xx3 and Y=$yy3 "); $gra22= mysql_result($gra11,0,0);
			if ($gra22 ==1){
				echo "błąd";
									}
			else{
				if ($gra22 ==2){
					mysql_query("update reversi set V=1 where X=$xx3 and Y=$yy3");
										}
			}
			};
			//};
		}
		 // sprawdzanie od pionka w prawo i doł XXYY4
	//if ($xx2 != 0) {
	//if($yy2 !=0) {
$xx4++;
$yy4++;


$gra111 =mysql_query("select V from reversi where X=$xx4 and Y=$yy4 "); 
$gra222= mysql_result($gra111,0,0);
echo"<br />";
echo"SPRADZAM@!@! Ponownie";
echo $gra222;
if ($gra222==1)
	echo "bład";
else	{
	for ($yy4; $yy4<8; $yy4++){
			for ($xx4; $xx4<8; $xx4++){
				$gra111 =mysql_query("select V from reversi where X=$xx4 and Y=$yy4 "); $gra222= mysql_result($gra111,0,0);
					if ($gra222 ==1){
					echo "błąd";
									}
					else{
						if ($gra22 ==2){
					mysql_query("update reversi set V=1 where X=$xx4 and Y=$yy4");
										}
			}
			};
			};
		
	}
	 // sprawdzanie od pionka w   doł XXYY5
	//if ($xx2 != 0) {
	//if($yy2 !=0) {
$yy5++;



$gra1111 =mysql_query("select V from reversi where X=$xx5 and Y=$yy5 "); 
$gra2222= mysql_result($gra1111,0,0);
echo"<br />";
echo"SPRADZAM@!@! Ponownie";
echo $gra222;
if ($gra222==1)
echo "bład";
else	{
	for ($yy5; $yy5<8; $yy5++){
			//for ($xx5; $xx5<8; $xx5++){
			$gra1111 =mysql_query("select V from reversi where X=$xx5 and Y=$yy5 "); $gra2222= mysql_result($gra1111,0,0);
			if ($gra2222 ==1){
				echo "błąd";
									}
			else{
				if ($gra2222 ==2){
					mysql_query("update reversi set V=1 where X=$xx5 and Y=$yy5");
										}
			}
			};
			//};
		}
			 // sprawdzanie od pionka w   dołi i lewo XXYY6
	//if ($xx2 != 0) {
	//if($yy2 !=0) {
$xx6--;
$yy6++;
$gra11111 =mysql_query("select V from reversi where X=$xx6 and Y=$yy6 "); 
$gra22222= mysql_result($gra11111,0,0);
echo"<br />";
echo"SPRADZAM@!@! Ponownie";
echo $gra222;
if ($gra222==1)
echo "bład";
else	{
	for ($yy6; $yy6=0; $yy6--){
			for ($xx6; $xx6=0; $xx6--){
			$gra11111 =mysql_query("select V from reversi where X=$xx6 and Y=$yy6 "); $gra22222= mysql_result($gra11111,0,0);
			if ($gra22222 ==1){
				echo "błąd";
									}
			else{
				if ($gra22222 ==2){
					mysql_query("update reversi set V=1 where X=$xx6 and Y=$yy6");
										}
			}
			};
			};
		}
		 // sprawdzanie od pionka w    lewo XXYY7
	//if ($xx2 != 0) {
	//if($yy2 !=0) {
$xx7--;

$gra11111 =mysql_query("select V from reversi where X=$xx7 and Y=$yy7 "); 
$gra22222= mysql_result($gra11111,0,0);
echo"<br />";
echo"SPRADZAM@!@! Ponownie";
echo $gra222;
if ($gra222==1)
echo "bład";
else	{
	//	for ($yy2; $yy2>=0; $yy2--){
			for ($xx7; $xx7=0; $xx7--){
			$gra11111 =mysql_query("select V from reversi where X=$xx7 and Y=$yy7 "); $gra22222= mysql_result($gra11111,0,0);
			if ($gra22222 ==1){
				echo "błąd";
									}
			else{
				if ($gra22222 ==2){
					mysql_query("update reversi set V=1 where X=$xx5 and Y=$yy5");
										}
			}
			};
			//};
		}
		 // sprawdzanie od pionka w   górę i lewo XXYY8
	//if ($xx2 != 0) {
	//if($yy2 !=0) {
$xx8--;
$yy8--;
$gra11111 =mysql_query("select V from reversi where X=$xx8 and Y=$yy8 "); 
$gra22222= mysql_result($gra11111,0,0);
echo"<br />";
echo"SPRADZAM@!@! Ponownie";
echo $gra222;
if ($gra222==1)
echo "bład";
else	{
	for ($yy8; $yy8=0; $yy8--){
			for ($xx8; $xx8>=0; $xx8--){
			$gra11111 =mysql_query("select V from reversi where X=$xx8 and Y=$yy8 "); $gra22222= mysql_result($gra11111,0,0);
			if ($gra22222 ==1){
				echo "błąd";
									}
			else{
				if ($gra22222 ==2){
					mysql_query("update reversi set V=1 where X=$xx8 and Y=$yy8");
										}
			}
			};
	};
		}
?>	
	

<meta http-equiv="refresh" content="0;url=index-white.php" />
<body>

</body>
</html>
