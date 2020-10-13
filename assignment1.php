<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<style>

table{
	margin: 0 auto;
	width: 50%;
	margin-top: 30px;
}

h2{
	text-align: center;
	margin-top: 30px;
}

</style>

<h2>Bill of Restaurant Meal</h2>

<table border="1" cellspacing="0" cellpadding="20px">
	
		<?php

			$hamburger = 4.95;
			$hamburgers = 4.95 * 2;
			$milkshake = 1.85;
			$cola = 0.85;

			$totalprice = $hamburgers + $milkshake + $cola;

			$tax = $totalprice*7.5/100;

			$pre_tip = $totalprice*16/100;

			$totaltt = $tax + $pre_tip;

			echo "<tr><th>Name</td><th>Price</th><th>Qty</th><th>Total Price ($)</th></tr>";
			echo "<tr><td>Hamburgers</td><td>$hamburger</td><td>2</td><td>$$hamburgers</td></tr>";
			echo "<tr><td>Milkshake</td><td>$$milkshake</td><td>1</td><td>$$milkshake</td></tr>";
			echo "<tr><td>Cola</td><td>$cola</td><td>1</td><td>$$cola</td></tr>";
			echo "<tr><td colspan=3>Total</td><td>$$totalprice</td></tr>";
			echo "<tr><td colspan=3>Tax Rate</td><td>$tax</td></tr>";
			echo "<tr><td colspan=3>Pre-tip</td><td>$pre_tip</td></tr>";
			echo "<tr><td colspan=3>Total tax and Tip</td><td>$totaltt</td></tr>";
		?>
		
</table>

</body>
</html>