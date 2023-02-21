<?php
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Name=$_POST["txtName"];
	$Dept=$_POST["ddDept"];
	$ContactNo=$_POST["txtContactNo"];
	$MailId=$_POST["txtEMailId"];
	$Password=$_POST["txtPassword"];
		
	$qry="Insert Into StaffTable Values('". $Id ."','". $Name ."','". $Dept ."','". $ContactNo ."','". $MailId ."','". $Password ."')";
	mysql_query($qry,$con) or die(mysql_error());
    header('location:Login.php');
	mysql_close($con);
?>