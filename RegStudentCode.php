<?php
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Name=$_POST["txtName"];
	$Dept=$_POST["ddDept"];
	$Year=$_POST["ddYear"];
	$ContactNo=$_POST["txtContactNo"];
	$MailId=$_POST["txtEMailId"];
	$Password=$_POST["txtPassword"];
		
	$qry="Insert Into StudentTable Values('". $Id ."','". $Name ."','". $Dept ."','". $Year ."','". $ContactNo ."','". $MailId ."','". $Password ."')";
	mysql_query($qry,$con) or die(mysql_error());
    header('location:Login.php');
	mysql_close($con);
?>