<?php
    session_start();
    include('Db.php');
	
	$Username = $_POST["txtUsername"];
	$Password = $_POST["txtPassword"];
	$Type = $_POST["ddType"];
	
	if($Type == "admin")
	{
		$query= mysql_query("Select Count(*) as data From AdminTable Where Username = '". $Username ."' and Password = '". $Password ."' ", $con);
		$row = mysql_fetch_array($query);
		if($row['data']>0){
			$_SESSION["username"] = $Username;
			$_SESSION["usertype"]="admin";
            header('location:HomeAdmin.php');
		}
		else{
            echo "Invalid Credentials!<br/>";
            echo "<a href='Login.php'>Go Back</a>";
		}
	}
	else if($Type == "staff")
	{
		$query= mysql_query("Select Count(*) as data From StaffTable Where StaffID = '". $Username ."' and Password = '". $Password ."' ", $con);
		$row = mysql_fetch_array($query);
		if($row['data']>0){
			$_SESSION["username"]=$Username;
			$_SESSION["staffid"]=$Username;
			$_SESSION["usertype"]="staff";
			header('location:HomeStaff.php');
		}
		else{
            echo "Invalid Credentials!<br/>";
           echo "<a href='Login.php'>Go Back</a>";
		}
	}
	else if($Type == "student")
	{
		$query= mysql_query("Select Count(*) as data From StudentTable Where RegNo = '". $Username ."' and Password = '". $Password ."' ", $con);
		$row = mysql_fetch_array($query);
		if($row['data']>0){
			$_SESSION["username"]=$Username;
			$_SESSION["regno"]=$Username;
			$_SESSION["usertype"]="student";
			header('location:HomeStudent.php');
		}
		else{
            echo "Invalid Credentials!<br/>";
           echo "<a href='Login.php'>Go Back</a>";
		}
	}
	mysql_close($con);
?>