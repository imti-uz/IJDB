<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>rolling a dice</title>
</head>
<body>
	<p>let's roll dice and see who wins; 456 I win,123 you</p>
	<?php 
		echo '<p>let\'s play</p>';
		$val = rand(1, 6);
		echo 'we\'ve got '.$val;
		if($val > 3)
			echo '<p>you lost</p>';
		else
			echo '<p>puck you!</p>';
		echo 'want to play again?';
	 ?>
</body>
</html>