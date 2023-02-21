<?php

	include('Db.php');
	session_start();
	
	$Id=$_POST["txtId"];
	$Date=$_POST["txtDate"];
	$Dept=$_POST["ddDept"];
	$Sem=$_POST["ddSem"];
	$Info=$_POST["txtInfo"];

	$file_name = "";
	
	$Fpath=$_FILES["txtFile"]["name"];


/*	$qry="Select CategoryId From Category Where CategoryName='" . $ca . "'";
	$rs=mysql_query($qry,$con) or die(mysql_error());
$catid="";
	if($row = mysql_fetch_array($rs))
	{
$catid = $row['CategoryId'];
	}

*/
	//$sr=$_REQUEST["txtSaleRate"];	

if ($_FILES["txtFile"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["txtFile"]["error"] . "<br />";
    }
  else
    {
 //   echo "Upload: " . $_FILES["fpFilePath"]["name"] . "<br />";
    //echo "Type: " . $_FILES["fpFilePath"]["type"] . "<br />";
    //echo "Size: " . ($_FILES["fpFilePath"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["fpFilePath"]["tmp_name"] . "<br />";

    if (file_exists("image/subject/" . $_FILES["txtFile"]["name"]))
      {
      echo $_FILES["txtFile"]["name"] . " already exists. ";
	  return;
      }
    else
      {
      move_uploaded_file($_FILES["txtFile"]["tmp_name"],
      "image/subject/" . $_FILES["txtFile"]["name"]);
    //  echo "Stored in: " . "upload/" . $_FILES["fpFilePath"]["name"];
      }
    }
	
	
	/*if(isset($_FILES['fileUploader']))
	{
		$fileType = strtolower(pathinfo($_FILES["fileUploader"]["name"],PATHINFO_EXTENSION));
        $file_name = $Id . '.' . $fileType;
        $file_tmp =$_FILES['fileUploader']['tmp_name'];
        move_uploaded_file($file_tmp,"Image/Uploads/". $file_name);
		echo "Yes";
    }*/

	
	$qry="Insert Into SubjectTable Values('". $Id ."','". $Date ."','". $Dept .  "','" . $Sem . "','". $_SESSION['username'] ."','". $Info ."','". $Fpath ."')";
	mysql_query($qry,$con) or die(mysql_error());

   	header('location:ViewSubjectStaff.php');
	
?>