<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<h1>Learning PHP</h1>

	<?php

	//echo is used to print values  similar to document.write in js
	echo "Pakistan Zindabad";

	//here a and b are variables.
	$a = 8;
	$b = 4;

	echo $a+$b;

	$x = 8;

	if($x>4)
	{
		echo "<br>x ki value 4 se zyada hai";
	}
	else
	{
		echo "<div>x is less than 4</div>";
	}

	mycal(3,7);

	for($i=1; $i<=10; $i++)
	{
		echo "<div>2 * ".$i." = ".($i*2)."</div>";
	}

	function mycal($x, $y)
	{
		echo "<br>The sum of ".$x." and ".$y." is ".($x+$y);
	}

	?>

</body>
</html>