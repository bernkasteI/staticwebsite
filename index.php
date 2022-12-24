<?php
echo '<!doctype html>
<html>
<head>

	
<meta charset="utf-8">
<title>My Static Webpage</title>
		<link href = "assets/css/style.css" type = "text/css" rel = "stylesheet">
		<link href = "assets/css/bootstrap.css" type = "text/css" rel = "stylesheet">
</head>

<body>
	
	<div class="myheader">
		<h1>Welcome to my page!</h1>
	</div>';


		if(isset($_REQUEST['page']))
			$page=$_REQUEST['page'];
		else
			$page="index.php";

		include("navigation.php");
	
		switch($page) {
			case "contact":
				include("contact.php");
				break;
			case "education":
				include("education.php");
				break;
			case "skills":
				include("skills.php");
				break;
			case "experience":
				include("experience.php");
				break;
			case "results":
				include("entries.php");
				break;
			default:
				include("contact.php");
				break;
		}	
echo '</body></html>';	
?>

