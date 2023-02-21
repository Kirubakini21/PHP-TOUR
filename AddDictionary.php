<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy-main">

	<?php
	include('HeaderAdmin.php');
	include('Db.php');

	$query = mysql_query("Select MAX(Sno) as data From DictionaryTable", $con);
	$row = mysql_fetch_array($query);
	$Id = $row['data']+1;

	?>

	<form action="AddDictionaryCode.php" method="post" enctype="multipart/form-data">
		
		<table class="tbl" align="center" >
			<tr>
				<td align="right">S.No</td> 
				<td><input type="text" name="txtSNo" value='<?php echo $Id; ?>' readonly /></td>
			</tr>
			<tr>
				<td align="right">Word Name</td> 
				<td><input type="text" name="txtW" value="" /></td>
			</tr>
			<tr>
				<td align="right">Synonym</td> 
				<td><input type="text" name="txtS" value="" /></td>
			</tr>
			<tr>
				<td align="right">Antonym</td> 
				<td><input type="text" name="txtA" value="" /></td>
			</tr>
			
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" Style="width:182px;"/></td>
			</tr>
		</table>
		
	</form>

</body>

</html>