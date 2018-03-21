<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>test page</title>
</head>
<body>
	<?php
 		echo rand(1,100);
		echo "<br /> string <strong> string </strong> and string <br />";
		$testVariable = 'Hi ' . 'There <br />';
		// $testVariable = 5;
		echo $testVariable;
		$var1 = 'php';
		echo $var1. ' rules <br />';
		echo '$var1. rules<br/>';
		echo "$var1 rules";
	 ?>
</body>
</html>