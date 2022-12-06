<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$h = "localhost";
$n = "s7271";
$p = "Krz.Kref";
$bd = "s7271";

/* Funkcja połączenie z Baza Danych */

function DBOpen() {
    global $h;
	global $n;
	global $p;
	global $bd;
	// serwer 
	$mysql_server = "$h";
	// loging
	$mysql_admin = "$n";
	// hasło
	$mysql_pass = "$p";
	// nazwa baza
	$mysql_db = "$bd";
	// nawiązujemy połączenie z serwerem MySQL
	@mysql_connect($mysql_server, $mysql_admin, $mysql_pass)
	or die('Brak połączenia z serwerem MySQL.');
	echo "Udało się połączyć z serwerem!<br />";
	// łączymy się z bazą danych
	@mysql_select_db($mysql_db)
	or die('Błąd wyboru bazy danych.');
			}
function ReversiNG() {
		$rev2="reversi";
		mysql_query("update $rev2	set V=1 where X=3 and Y=3");
		mysql_query("update $rev2	set V=1 where X=4 and Y=4");
		mysql_query("update $rev2	set V=2 where X=3 and Y=4");
		mysql_query("update $rev2	set V=2 where X=4 and Y=3");
		mysql_query("update move set move='white' ");
		mysql_query("update rev set name='Twoj Ruch' ");
		//mysql_query(" drop table $rev2")
}
function RevrsiWIN()
{
	mysql_query(" create table revwin (X int, Y int, V int)");
		//V -  0-pusty 1-biały 2-czarny
		//x,y -połóżenie
		for ($y=0; $y<8; $y++ )
			{
				for($x=0; $x<8; $x++)
					{
				$v=0;
				 mysql_query("Insert into revwin (X,Y,V) VALUES ($x,$y,$v)");
					
					};
		
	};
	
}
function ReversiDR()
{
	mysql_query("drop table reversi");
	mysql_query("drop table revwin");
}
	function ReversiCreate() {
		$rev="reversi";
		mysql_query(" create table $rev (X int, Y int, V int)");
		//V -  0-pusty 1-biały 2-czarny
		//x,y -połóżenie
		for ($y=0; $y<8; $y++ )
			{
				for($x=0; $x<8; $x++)
					{
				$v=0;
				 mysql_query("Insert into $rev (X,Y,V) VALUES ($x,$y,$v)");
					
					};
		
	};
	return $rev;
	return $v;
	}
	function RevesriTable(){

	$rev = "reversi";
	$test=123;
		echo "
<table width=\"640\" border=\"1\">
  <tr>
    <td><center><center>"; $r=mysql_query("select V from $rev where X=0 AND Y=0"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=1 AND Y=0"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=2 AND Y=0"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=3 AND Y=0"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=4 AND Y=0"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=5 AND Y=0"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=6 AND Y=0"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
    <td><center>"; $r=mysql_query("select V from $rev where X=7 AND Y=0"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
  </tr>
  <tr>
 <td><center>"; $r=mysql_query("select V from $rev where X=0 AND Y=1"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=1 AND Y=1"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=2 AND Y=1"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=3 AND Y=1"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=4 AND Y=1"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=5 AND Y=1"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=6 AND Y=1"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=7 AND Y=1"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
  </tr>
  <tr>
 <td><center>"; $r=mysql_query("select V from $rev where X=0 AND Y=2"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=1 AND Y=2"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=2 AND Y=2"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=3 AND Y=2"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=4 AND Y=2"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=5 AND Y=2"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=6 AND Y=2"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=7 AND Y=2"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
  </tr>
  <tr>
 <td><center>"; $r=mysql_query("select V from $rev where X=0 AND Y=3"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=1 AND Y=3"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=2 AND Y=3"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=3 AND Y=3"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=4 AND Y=3"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=5 AND Y=3"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=6 AND Y=3"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=7 AND Y=3"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
  </tr>
  <tr>
 <td><center>"; $r=mysql_query("select V from $rev where X=0 AND Y=4"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=1 AND Y=4"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=2 AND Y=4"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=3 AND Y=4"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=4 AND Y=4"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=5 AND Y=4"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=6 AND Y=4"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=7 AND Y=4"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
  </tr>
  <tr>
 <td><center>"; $r=mysql_query("select V from $rev where X=0 AND Y=5"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=1 AND Y=5"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=2 AND Y=5"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=3 AND Y=5"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=4 AND Y=5"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=5 AND Y=5"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=6 AND Y=5"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=7 AND Y=5"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
  </tr>
  <tr>
 <td><center>"; $r=mysql_query("select V from $rev where X=0 AND Y=6"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=1 AND Y=6"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=2 AND Y=6"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=3 AND Y=6"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=4 AND Y=6"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=5 AND Y=6"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=6 AND Y=6"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=7 AND Y=6"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
  </tr>
  <tr>
 <td><center>"; $r=mysql_query("select V from $rev where X=0 AND Y=7"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=1 AND Y=7"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=2 AND Y=7"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=3 AND Y=7"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=4 AND Y=7"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=5 AND Y=7"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=6 AND Y=7"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
 <td><center>"; $r=mysql_query("select V from $rev where X=7 AND Y=7"); $kret = mysql_result($r,0,0);  if($kret==0)  echo" <img src=\"img/0.gif\">";if($kret==1) echo"<img src=\"img/1.gif\">"; if($kret==2) echo"<img src=\"img/2.gif\">"; echo"</center></td>
  </tr>
</table>";
	}
						
/*Funkcja wypisania tabeli*/
	function DBQuery($query) {	
	$result = @mysql_query($query);
      	$queryresult = array();
      	$num_fields = mysql_num_fields($result);
      	$num_rows = mysql_num_rows($result);			
      	$nr_row = 0;
      	while ($nr_row < $num_rows) {
		$nr_field = 0;
		$current_row = mysql_fetch_row($result);					
		while ($nr_field < $num_fields)	{
			$queryresult[$nr_row][$nr_field] = $current_row[$nr_field];
			$nr_field++;									
		}
		$nr_row++;		
	};
    return $queryresult;	
};

					


function DBExec($z)
		{
		//echo $z;
		mysql_query("$z");
		}	
/*function DBHTMLShow () {
	$x = DBQuery($wynik);
 	!if (mysql_num_rows($x) > 0) {
    /* jeżeli wynik jest pozytywny, to wyświetlamy dane 
    echo "<table cellpadding=\"0\" border=1>";
    while($r = mysql_fetch_array($x)) {
        echo "<tr>";
        echo "<td><center>".$r[0]."</center></td>";
        echo "<td><center>".$r[1]."</center></td>";
		echo "<td><center>".$r[2]."</center></td>";
						}

						}
						}
*/
?> 


</body>
</html>