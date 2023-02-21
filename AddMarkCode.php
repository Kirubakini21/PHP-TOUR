<?php

	include('Db.php');
	session_start();
	
	$Id=$_POST["txtId"];
	$RegNo=$_POST["cboRegNo"];
	$Sem=$_POST["ddSem"];
	$Sub=$_POST["ddSub"];
	$tm=$_POST["txtTotalMark"];
	$ms=$_POST["txtMarkScored"];

	$file_name = "";
	
	$Fpath=$_FILES["txtFile"]["name"];


/*	$qry="Select CategoryId From Category Where CategoryName='" . $ca . "'";
	$rs=mysql_query($qry,$con) or die(mysql_error());
$catid="";
	if($row = mysql_fetch_array($rs))
	{
$catid = $row['CategoryId'];
	}

*/
	//$sr=$_REQUEST["txtSaleRate"];	
$result="PASS";
	if($ms <40)
		{
			$result="FAIL";
		}
		
	$qry="Insert Into MarkTable Values('". $Id ."','". $RegNo ."','". $Sem .  "','" . $Sub . "','". $_SESSION['username'] ."','". $tm ."','". $ms ."','" . $result . "')";
	mysql_query($qry,$con) or die(mysql_error());

   	header('location:ViewMarkStaff.php');
	
?>