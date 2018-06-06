<!DOCTYPE html>
<html>
	<title>submit source</title>
	<link href="SubmitSource.css" rel="stylesheet" type="text/css">
	<head> 
		<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	</head>
	<body>
		<?php 
		//Remember to implement max per ip
		$currentSubmissionsList = scandir('sourcesubmissions/');
		$currentSubmissions = sizeof($currentSubmissionsList) - 1;
		if($currentSubmissions > 101){
		echo "<h2 align=\"center\">sorry, but it looks like my submissions list is full at the moment (>100), please try again in a few days :(</h2>";
		}
		else{
		$uniqueName = date('Y-m-d_H_i_s');
		$SubmissionFile = fopen("sourcesubmissions/$uniqueName.txt", "w");
		$Content = $_POST["DirectURL"].PHP_EOL.$_POST["Source"];
		fwrite($SubmissionFile, $Content);
		echo "<h2 align=\"center\">Thanks for your submission, I'll look into it as fast as possible.</h2>";
		}
		?>
		<h3 align="center">Direct URL Submitted: <?php echo $_POST["DirectURL"]; ?></h3>
		<h3 align="center">Proposed source: <?php echo $_POST["Source"]; ?></h3>
		<h3 align="center"><a href="../home.php">home.</a></h3>
	</body>
</html>