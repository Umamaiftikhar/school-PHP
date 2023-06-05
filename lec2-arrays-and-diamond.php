<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php
	//here $ab is an array, which uses index number.
	$ab = ["A","B","C","D","E"];
	echo "<center>";
	for($i=1; $i<5; $i++)
	{
		for($j=1; $j<=$i; $j++)
		{
			echo " ".$ab[$j-1];
		}
		echo "<br>";
	}
	for($i=1; $i<=5; $i++)
	{
		for($j=5; $j>=$i; $j--)
		{
			echo " ".$ab[5-$j];
		}
		echo "<br>";
	}
	echo "</center>";


	//here $stuData is an associative array, which use key name instead of index number.
	$stuData = ["naam"=>"Kamran","class"=>"9th","eng"=>45,"urd"=>67];

	echo $stuData['eng']+$stuData['urd'];
	?>

</body>
</html>