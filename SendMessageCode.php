<?php
session_start();
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Date=$_POST["txtDate"];
	$staff=$_POST["ddStaff"];
	$title=$_POST["txtTitle"];
	$desc=$_POST["txtDesc"];



	
	$qry="Insert Into Messages Values('". $Id ."','". $_SESSION['staffid'] . "','" . $staff .  "','" . $title . "','". $desc ."','". $Date ."','" . $_SESSION['usertype'] . "')";
	mysql_query($qry,$con) or die(mysql_error());

   	header('location:SendMessage.php');
	
?>