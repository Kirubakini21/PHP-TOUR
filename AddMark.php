<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy-main">

	<?php
	include('HeaderStaff.php');
	include('Db.php');

	$query = mysql_query("Select MAX(Sno) as data From MarkTable", $con);
	$row = mysql_fetch_array($query);
	$Id = $row['data']+1;

	?>

	<form action="AddMarkCode.php" method="post" enctype="multipart/form-data">
		
		<table class="tbl" align="center" >
			<tr>
				<td align="right">S.No:</td> 
				<td><input type="text" name="txtId" value="<?php echo $Id; ?>" readonly/></td>
			</tr>
			<tr>
				<td align="right">Register No:</td> 
				<td>
				<select name="cboRegNo">
					<?php
							$sql="SELECT RegNo,StudentName,Dept FROM StudentTable";
		
							$tot=mysql_query($sql,$con); 
							
							while($row = mysql_fetch_array($tot) )
							{
								
									echo "<option value='" . $row['RegNo'] . "'>" . $row['RegNo'] . ":" . $row['StudentName'] . ":" . $row['Dept'] . "</option>";
									
							}
						?>
</select>
				
				</td>
			</tr>
			
			<tr> 
				<td align="right">Semester:</td> <td>
				 	<select  name="ddSem" Required>
				 						 	
				 		<option value="I">I</option>
				 		<option value="II">II</option>
						<option value="III">III</option>
						<option value="IV">IV</option>
						<option value="V">V</option>
						<option value="VI">VI</option>
					</select> 
				</td>
			</tr>
			<tr>
				
					<td align="right">Subject:</td> <td>
				 	<select  name="ddSub" Required>
				 						 	
				 		<option value="Digital Image Processing">Digital Image Processing</option>
						<option value="Mobile Computing">Mobile Computing</option>
						
				 		
					</select> 
				</td>
			</tr>
			<tr>
				<td align="right">Total Marks:</td> 
				<td><input type="text" name="txtTotalMark" value="100" /></td>
			</tr>
			<tr>
				<td align="right">Mark Scored:</td> 
				<td><input type="text" name="txtMarkScored" value="" /></td>
			</tr>
			
			
			
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" Style="width:182px;"/></td>
			</tr>
		</table>
		
	</form>

</body>

</html>