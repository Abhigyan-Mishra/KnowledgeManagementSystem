<?php

echo "<center><b>PHP Script To Find the number of days left till Birthday</b></center>";
function prin($n) {
	$s=strtotime($n);
	$d=ceil(($s-time())/60/60/24);
	if($d<-1)
	$d=$d+365;
	echo "<center><b>$d</b> days till $n</center>";
  }
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Magnet</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
</head>

<body bgcolor="cyan">
  <center><h2>COUNTDOWN TO BIRTHDAY</h2></center>
	<form>
		<center>Enter the Date Of Birth<b>(Date/Month)</b></center>
	<center><input type="text" name="num" align="center"></center>
	<center><input type="submit"></center>
	</form>
	<?php
	$n1=$_GET["num"];
	prin($n1);
	?>
</body>

</html>
