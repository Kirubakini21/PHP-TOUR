 <?php
    $con = mysql_connect("localhost","root","");
	mysql_select_db("ENotice", $con);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
?>