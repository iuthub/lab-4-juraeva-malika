<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php if (($_REQUEST["name"] == "" ) || ($_REQUEST["section"] == "") || ($_REQUEST["credit_card"] == "") || ($_REQUEST["card"] == "")){
				?><h1><?php print "Sorry";?></h1>
			</br>
			<?php print "you didn't fill out the form completely!"; ?><a href="http://localhost/webpage/buyagrade.php">Try Again?</a><?php
			} 
			else{?>
		<h1>Thanks, sucker!</h1>
		<p>Your information has been recorded.</p>
		<dl>
			<dt>Name</dt>
			<dd>
			print $_POST["name"];
			?></dd>
			<dt>Section</dt>
			<dd><?php print $_POST["section"]; ?></dd>
			<dt>Credit Card</dt>
			<dd><?php print $_POST["credit_card"];
					print '('.$_POST["card"].')';
			?></dd>
		</dl>
		<?php
		file_put_contents("sucker.txt", $_POST["name"].';', FILE_APPEND);
		file_put_contents("sucker.txt", $_POST["section"].';', FILE_APPEND);
		file_put_contents("sucker.txt", $_POST["credit_card"].';', FILE_APPEND);
		file_put_contents("sucker.txt", $_POST["card"], FILE_APPEND);
		$dir = file_get_contents("sucker.txt");
		print_r ($dir);}?>
	</body>
</html>