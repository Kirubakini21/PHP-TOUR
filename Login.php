<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy-main">

	<?php
	include('Header.php');
	?>
	<form action="LoginCode.php" method="post">
		<table class="tbl" align="center" class="login-style">
			<tr>
				<td>Login ID:<br><input type="text" name="txtUsername" placeholder=" Login Id" Style="width:250px;"/></td>
			</tr>
			<tr>
				<td>Password:<br><input type="password" name="txtPassword" placeholder=" Password" Style="width:250px;"/></td>
			</tr>
			<tr> 
				<td>Type:<br>
					 <select Style="width:250px;" name="ddType">
					  <option value="admin">Admin</option>
					  <option value="staff">Staff</option>
					  <option value="student">Student</option>
					</select> 
				</td>
			</tr>
			
			<tr>
				<td><br><input type="submit" name="btnSubmit" value="Login" class="btn_submit" Style="width:250px;"/></td>
			</tr>
		</table>
	</form>

</body>

</html>