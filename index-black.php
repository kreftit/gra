<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Grasz jako czany</title>
<style type="text/css">
body {
 background: green;
}
</style>
</head>

<body>
<?php
require_once ('db_krzysz.php');
DBOpen();
//ReversiCreate() 
//ReversiNewGame();
RevesriTable();
echo "<a href=\"ng.php\">NowaGra</a>";
echo "<br />";

$p=mysql_query("select count(V)as Punkty from  reversi where V=2; "); $p2= mysql_result($p,0,0);
$z=mysql_query("select count(V)as Punkty from  reversi where V=0; "); $z2= mysql_result($z,0,0);
if ($z2 == 0){
	echo "KONIEC GRY";
	echo "Wynik Koncowy: $p2";
	}
	else
echo "Liczba Punktów: $p2";
echo "<br />";
?>
<?php
$kol =mysql_query("select * from move "); $kol2= mysql_result($kol,0,0);
$ruch =mysql_query("select * from rev "); $ruch2= mysql_result($ruch,0,0);
//echo "RUCH NALEŻY DO $kol2";
if 	($kol2 == "black")
{
	echo $ruch2;
}
	else 
	{
		echo "Ruch Przeciwnika";
	}
if  ($kol2 == "black" ) 
{
echo'
<form action="gra-c.php" method="post">
X<br />
<input type="text" name="x" /><br />
Y<br />
<input type="text" name="y" /><br />


<input type="submit" value="Graj" />
</form>
';
}
?>

<meta http-equiv="refresh" content="7;url=index-black.php" />
</body>
</html>
