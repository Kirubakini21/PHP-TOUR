<?php
session_start();
	$con = mysql_connect("localhost","root",'');
	mysql_select_db("onlineprojecttracking", $con);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	$sno=$_REQUEST["txtGuideId"];
	$UserId=$_REQUEST["cboUserId"];
	$projectid=$_REQUEST["cboProjectId"];
	$dat=$_REQUEST["txtDate"];
	$details=$_REQUEST["txtDetails"];
	
	$qry="insert into messagetousers (SNo,GuideId,UserId,ProjectId,EntryDate,Message) values(" . $sno . ",'" .  $_SESSION['guideid'] . "','" . $UserId . "','" . $projectid . "','" .   $dat . "','" . $details . "')";
/*echo $qry;
return;*/
	mysql_query($qry,$con) or die(mysql_error());
	
?>
<html>
<head><link rel="stylesheet" type="text/css" href="styles.css"></link>
</head>
<body>
<table border="0" width="100%">
<tr>
<td>
<?php
include('pagetop.php');
include('menugeneraltop.php');
?>
<table width="100%">
<tr><td>
<?php 
include ('menutableguide.php');
?>
</td><td align="center"  valign="top">
<h2 align="center"><font face="Monotype Corsiva" color="White">MESSAGE TO USER</font></h2>
			<table align="center"  cellspacing="1" cellpadding="6" width="10%%" border="1">
			<tr>
<td>
<font color="White" size="4">
MESSAGE TO USER DETAILS REGISTERED.</font>
<a href='sendmessagetostudentbyguide.php' style="color:blue">Back</a>
</td>	
			</table>
		</TD></TR></TABLE>
		
		</td>
		</tr>
		</table>
	</body>
</html>