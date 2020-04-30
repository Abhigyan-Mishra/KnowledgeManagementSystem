<?php 
$host='localhost';
$user='id12066845_root';
$pass='class';
$db='id12066845_students';
if(@mysql_connect($host,$user,$pass)&&@mysql_select_db($db))
  {
	; 
  }
  else 
  {
	  die("COULD NOT CONNECT TO DB");
  }
	
?>