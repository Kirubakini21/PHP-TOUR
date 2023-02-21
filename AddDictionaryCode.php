<?php

	include('Db.php');
	session_start();
	
	$Id=$_POST["txtSNo"];
	$W=$_POST["txtW"];
	$S=$_POST["txtS"];
	$A=$_POST["txtA"];
	
	
	$qry="Insert Into DictionaryTable Values('". $Id ."','". $W ."','". $S .  "','" . $A  . "')";
	mysql_query($qry,$con) or die(mysql_error());

   	header('location:ViewDictionary.php');
	
?>