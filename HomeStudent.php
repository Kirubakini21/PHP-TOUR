<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy">
	
	<?php
    session_start();
	include('HeaderStudent.php');
	?>
	
	<div class="tbl">Welcome.....   <?php echo $_SESSION["username"]; ?> </div>
	
</body>

</html>