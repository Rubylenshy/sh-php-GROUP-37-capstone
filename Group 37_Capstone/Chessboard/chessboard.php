<table width = "400px" cellpadding="0px" cellspacing="0px" border="1px" align="center">
	<div align="center">
		<h2> Capstone Chessboard </h2>
	</div>
	<?php
		for ($length=1; $length <= 8 ; $length++) 
		{ 
			echo "<tr>";
			for ($width=1; $width <= 8 ; $width++) 
			{ 
				$total = $length + $width;
				if ($total%2 == 0) {
						echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
					}
					else{
						echo "<td height=30px width=30px bgcolor=#000000></td>";
					}	
			}
			echo "</tr>";
		}	
	?>
</table>