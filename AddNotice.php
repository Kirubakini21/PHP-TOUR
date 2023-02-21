<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy-main">

	<?php
	include('HeaderStaff.php');
	include('Db.php');

	$query = mysql_query("Select MAX(Sno) as data From NoticeTable", $con);
	$row = mysql_fetch_array($query);
	$Id = $row['data']+1;

	?>

	<form action="AddNoticeCode.php" method="post" enctype="multipart/form-data">
		
		<table class="tbl" align="center" >
			<tr>
				<td align="right">Notice Sno:</td> 
				<td><input type="text" name="txtId" value="<?php echo $Id; ?>" readonly/></td>
			</tr>
			<tr>
				<td align="right">Date:</td> 
				<td><input type="date" name="txtDate" value="<?php echo date('Y-m-d'); ?>"/></td>
			</tr>
			<tr> 
				<td align="right">Dept:</td> <td>
				 	<select  name="ddDept" Required>
				 		<option value="ALL">All</option>
				 	
				 		<option value="MCA">MCA</option>
				 		<option value="MSCCS">MSCCS</option>
					</select> 
				</td>
			</tr>
			<tr>
				<td align="right">Information:</td> 
				<td>
					 <textarea name="txtInfo" Required></textarea> 
				</td>
			</tr>
			<tr>
				<td align="right">File Path:</td> 
				<td><input type="file" name="txtFile" id="txtFile" Required/></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" Style="width:182px;"/></td>
			</tr>
		</table>
		
	</form>

</body>

</html>