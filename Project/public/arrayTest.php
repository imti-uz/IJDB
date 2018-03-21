<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>array test</title>
</head>
<body>
	<?php 
		$myArray = ['one', 2, '3'];
		$myArray[] = 'four';
		for($counter = 0; $counter < sizeof($myArray); $counter++)
		{
			echo $myArray[$counter].' ';
		}

		$anotherArray = [
			1 => 'one',
			2 => 'two',
			3 => 'three',
			4 => 'four',
			5 => 'five',
			6 => 'six'
		];

		// echo $anotherArray[];
	?>
</body>
</html>