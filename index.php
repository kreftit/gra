<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Witaj w grze Reversi</title>
<style type="text/css">
body {
	background: green;
	font-size: 16px;
}
.pos {
	font-family: "Lucida Console", Monaco, monospace;
	font-weight: bold;
}
.man {
	font-size: 16px;
}
.test {
	font-size: 20px;
}
.test {
	text-align: center;
}
</style>
</head>

<body>
<p>
  <?php /*
require_once ('db_krzysz.php');
DBOpen();
//ReversiCreate() 
//ReversiNewGame();
RevesriTable();
echo "<a href=\"ng.php\">NowaGra</a>";


?>
<form action="gra.php" method="post">
X<br />
<input type="text" name="x" /><br />
Y<br />
<input type="text" name="y" /><br />
V:<br />
<input type="text" name="v" /><br />

<input type="submit" value="Graj" />
</form>
*/

?>
</p>
<table width="211" border="0">
  <tr>
    <td width="150" class="test"><span class="test">Wybierz Kolor:</span></td>
    <td width="51">&nbsp;</td>
  </tr>
  <tr>
    <td class="test"><span class="test"><a href="index-black.php" class="test"><strong> CZARNY</strong></a></span></td>
    <td><span class="test"><a href="index-black.php"><img src="img/2.gif" alt="czarny" /></a><br />
    </span></td>
  </tr>
  <tr>
    <td class="test"><span class="test"><a href="index-white.php" class="test"><strong> BIAŁY</strong></a></span></td>
    <td><span class="test"><a href="index-white.php"><img src="img/1.gif" alt="biały" /></a></span></td>
  </tr>
</table>

<p>&nbsp;	</p>
<p class="pos">!!Postęp Zmian!!</p>
<p class="pos">v 0.1 - 18 maj 2010 - P<span class="pos">oczątkowy projekt (Graficzny,Bazodanowych)</span></p>
<p class="pos"><span class="pos">v 0.1b  - 24 maj 2010 - Zmiana (Ruch należy do..) na Twój Ruch / Ruch Przeciwnika</span></p>
<p class="pos">v 0.2 - 24 maj 2010 - Dodano brak możlwiości ruchu, na zajęte pole.</p>
<p class="pos">v 0.2b - 24 maj 2010 - Zmiana wyglądu pliku index.php </p>
<p class="pos">V 0.3 - 25 maj 2010 - Dodano &quot;Brak możliwości ruchu&quot; do plików index-white, index-black na zajęte już pole</p>
<p class="pos">&nbsp;</p>
<p class="pos">&nbsp;</p>
<p class="pos">!!MOJE CELE:!!</p>
<ol>
  <li class="pos">Wybór pola prez kliknięcie na niego</li>
  <li class="pos">SYTEM WYGRYWANIA!!!</li>
  <li class="pos">Kosmetyczne zmiany gry</li>
  <li class="pos">Napisanie Instrukcji ;-)</li>
  <li class="pos">Nie wime jeszcze;] </li>
</ol>

 <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10"
        alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
  </p>
<p class="pos">!!Praca zaliczeniowa na WPR autorstwa Krzysztof Kreft I rok PJWSTK GDAŃSK 2010!!!</p>
</body>
</html>
