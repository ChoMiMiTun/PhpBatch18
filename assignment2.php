<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<style>

table{
	margin: 0 auto;
	width: 30%;
	margin-top: 30px;
}

h2,h3{
	text-align: center;
	margin-top: 30px;
}

</style>

<h2>10 Largest city of American</h2>


	
		<?php

$citys = array(
				"New York City"=>"8175133", 
				"Los Angeles"=>"3792621", 
				"Chicago"=>"2695598",
				"Houston"=>"2100263",
				"Philadelphia"=>"1526006",
				"Phoenix"=>"1445632",
				"San Antonio"=>"1327407",
				"San Diego"=>"1307402",
				"Dalls"=>"1197816",
				"San Joes"=>"945942",
			);

echo "<table border='1' cellspacing=0 cellpadding='20px'>";

	echo "<h3>Locations and Populations</h3>";
$sum = 0;
			foreach($citys as $key => $val) {

				$sum += $val;

				echo "<tr>";
				echo "<td>$key</td><td>$val</td>";
				echo "</tr>";
			}

			echo "<tr><td><strong>Total</strong></td><td>$sum</td><tr>";

echo "</table>";

// Order by Populations

	asort($citys);

echo "<table border='1' cellspacing=0 cellpadding='20px'>";

	echo "<h3>Order by Populations</h3>";

			foreach($citys as $key => $val) {

				echo "<tr>";
				echo "<td>$key</td><td>$val</td>";
				echo "</tr>";

			}

echo "</table>";

// Order by City Name

	ksort($citys);

echo "<table border='1' cellspacing=0 cellpadding='20px'>";

	echo "<h3>Order by City Name</h3>";

			foreach($citys as $key => $val) {

				echo "<tr>";
				echo "<td>$key</td><td>$val</td>";
				echo "</tr>";

			}

echo "</table>";

		?>
		
</body>
</html>