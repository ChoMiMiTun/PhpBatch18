
<style type="text/css">
	.blackcolor{
		background: #000;
	}
</style>


<table border="1" cellspacing="0" cellpadding="20px">
	<tr>
		<?php

		for ($row = 1; $row <= 8 ; $row++) { 
			echo "<tr>";

			for($col = 1; $col <= 8; $col++){

	            if (($row + $col) % 2 == 0) {
	                	echo "<td class='blackcolor'></td>";
	                }else{
	                	echo "<td></td>";
	                }  
	         }

	         echo "</tr>";

         }

		?>
		
	</tr>
</table>

