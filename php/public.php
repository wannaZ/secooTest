<?php
	header("content-type:text/html;charset=utf-8");
	$db = mysql_connect("localhost","root","root");
	mysql_select_db("secoo",$db);
	mysql_query("set names utf8");
?>