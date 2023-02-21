<?PHP
session_start();
?><html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy-main">

	<?php
	include('HeaderStaff.php');
	include('Db.php');

	$query= mysql_query("Select Count(*)+1 as data From Messages", $con);
	$row = mysql_fetch_array($query);
	$Id=$row['data'];

	?>
	<form action="SendMessageCode.php" method="post">
	<br/><br/><br/><br/>
	<center><h2>SEND MESSAGE TO STUDENTS</h2></center>
		<table class="tbl" align="center">
			<tr>
				<td align="right">S. No:</td> <td><input type="text" name="txtId" value="<?php echo $Id; ?>"Required/></td>
			</tr>
			<tr>
				<td align="right">Entry Date:</td> <td><input type="text" name="txtDate" value="<?php echo date('Y-m-d') ?>"/></td>
			</tr>
			
			<tr> 
				<td align="right">To:</td> <td>
				 	<select  name="ddStaff" Required>
				 		<option value="">Select</option>
				 		<?php
							//$sql="SELECT StaffID,StaffName FROM stafftable Where StaffID<>'" . $_SESSION['username'] . "'";
		$sql="SELECT RegNo,StudentName FROM studenttable";// Where StaffID<>'" . $_SESSION['username'] . "'";
							$tot=mysql_query($sql,$con); 
							
							while($row = mysql_fetch_array($tot) )
							{
								
									//echo "<option value='" . $row['StaffID'] . "'>" . $row['StaffID'] . ":" . $row['StaffName'] . "</option>";
									echo "<option value='" . $row['RegNo'] . "'>" . $row['RegNo'] . ":" . $row['StudentName'] . "</option>";
									
							}
						?>
				 		
					</select> 
					
				</td>
			</tr>
			<tr>
				<td align="right">Title:</td> <td><input type="text" name="txtTitle" Required/></td>
			</tr>
			
			<tr>
				<td align="right">Message:</td> <td><textarea name="txtDesc" rows="4" cols="30"></textarea></td>
			</tr>
			
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" Style="width:147px;"/></td>
			</tr>
		</table>
		
		<center>
		<table width="80%" border='1' cellspacing='0'>
		
		
		<tr>
		<th>S.No	</th>
		<th>Date</th>
				<th>From	</th>
						<th>To Id</th>
						<th>To Name	</th>
						<th>Sender Type	</th>
						<th>Message Type	</th>
								<th>Title	</th>
								<th>Description	</th>
								
		</tr>
		
		<?php
							$sql="SELECT * FROM Messages Where FromId='" . $_SESSION['username'] . "' Or ToId='" . $_SESSION['username'] . "' Order By SNo Desc";
		
							$tot=mysql_query($sql,$con); 
							
							while($row = mysql_fetch_array($tot) )
							{
									echo "<tr><td>" . $row['SNo'] . "</td>";
									echo "<td>" . $row['EntryDate'] . "</td>";
									echo "<td>" . $row['FromId'] . "</td>";
									echo "<td>" . $row['ToId'] . "</td>";
									if( $row['SenderType']=='student')
									{
										$sql2="SELECT StaffName FROM StaffTable Where StaffID='" . $row['ToId'] ."'";
		
									$tot2=mysql_query($sql2,$con); 
									$row2 = mysql_fetch_array($tot2);
									echo "<td>" . $row2['StaffName'] . "</td>";
									echo "<td>Student</td>";
									echo "</tr><tr><td  align='left'  colspan='9' style='border-radius:5px;background-color:#ddf5bc;color:red;padding:30px'>" . $row['MessageTitle'] . "<br/>";
									echo "" . $row['MessageDescription'] . "</td></tr>";
									}
									else //if( str_starts_with($row['To'],"STF"))
									{
										$sql2="SELECT StudentName FROM StudentTable Where RegNo='" . $row['ToId'] ."'";
		
									$tot2=mysql_query($sql2,$con); 
									$row2 = mysql_fetch_array($tot2);
									echo "<td>" . $row2['StudentName'] . "</td>";
									echo "<td>Staff</td>";
									echo "</tr><tr><td  align='right'  colspan='9' style='border-radius:5px;background-color:#ddf5bc;color:blue;padding:30px'>" . $row['MessageTitle'] . "<br/>";
									echo "" . $row['MessageDescription'] . "</td></tr>";
									}
									
									
							}
						?>
				 		
						
						</table>
		</center>
	</form>
			

</body>

</html>