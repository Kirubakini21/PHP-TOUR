<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy-main">

	<?php
	include('Header.php');
	include('Db.php');

	$query= mysql_query("Select Count(*)+1 as data From StudentTable", $con);
	$row = mysql_fetch_array($query);
	$Id="S" . sprintf("%03d",$row['data']);

	?>
	<form action="RegStudentCode.php" method="post">
	<br/><br/><br/><br/>
	<center><h2>ADD STUDENT</h2></center>
		<table class="tbl" align="center">
			<tr>
				<td align="right">Reg No:</td> <td><input type="text" name="txtId" value="<?php echo $Id; ?>"Required/></td>
			</tr>
			<tr>
				<td align="right">Student Name:</td> <td><input type="text" name="txtName" Required/></td>
			</tr>
			<tr> 
				<td align="right">Dept:</td> <td>
				 	<select  name="ddDept" Required>
				 		<option value="">Select</option>
				 		
				 		<option value="MCA">MCA</option>
				 		<option value="MSCCS">MSCCS</option>
						<option value="BCA">BCA</option>
						<option value="BScCS">B.ScCS</option>
						<option value="BScIT">B.ScIT</option>
					</select> 
				</td>
			</tr>
			<tr> 
				<td align="right">Year:</td> <td>
				 	<select  name="ddYear" Required>
				 		<option value="">Select</option>
				 		<option value="I">I</option>
				 		<option value="II">II</option>
				 		<option value="III">III</option>
					</select> 
				</td>
			</tr>
			<tr>
				<td align="right">Contact No:</td> <td><input type="text" name="txtContactNo" Required/></td>
			</tr>
			<tr>
				<td align="right">EMail Id:</td> <td><input type="text" name="txtEMailId" Required/></td>
			</tr>
			<tr>
				<td align="right">Password:</td> <td><input type="password" name="txtPassword" Required/></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" Style="width:147px;"/></td>
			</tr>
		</table>
	</form>
			

</body>

</html>