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
$yy  = $_POST["y"];
$vv  = $_POST["v"];
echo $xx;
echo $yy;
echo $vv;
mysql_query("update reversi	set V=$vv where X=$xx and Y=$yy");

//
?>
<meta http-equiv="refresh" content="0;url=index.php" />
<body>

</body>
</html>
