<?php

include "connectDB.php";

$q=mysqli_query($conn,"SELECT * FROM Users WHERE eninovID='" . $_POST['UserName'] . "'");
	$row  = mysqli_fetch_array($q);
	if($row["password"]==$_POST["Password"])
	{
		session_start();
		$_SESSION['username']=$row["eninovID"];
		$_SESSION['userId']=$row["id"];
		//$html = file_get_html('nav/mainWindow.html');
		//echo $html;
		/*$doc = new DOMDocument();
		$doc->loadHTMLFile("navi/mainWindow.html");
		echo $doc->saveHTML();*/
		//include "navi/mainWindow.php";
		echo "success";
		

	}

	else
	{
		$_SESSION['error']="Invalid Credentials";
		echo "failed";
	}



?>
