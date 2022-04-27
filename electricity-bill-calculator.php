<div>
		<h2 align="center">Electricity Bill Calculator</h2>
	</div>
<div align="center">
<?php	
	
	if (isset($_POST['submit_units'])) {
		$units = $_POST['units'];
		if (!empty($units)) {
		 	$fee = calc_bill($units);
		 } 
	}

	function calc_bill($units)
	{
		$units_cost1 = 3.50; //first 50
		$units_cost2 = 4.00; //Next 100 = 150
		$units_cost3 = 5.20; //Next 100 = 250
		$units_cost4 = 6.50; //Above 250 


		if ($units <= 50) {
			$fee = $units * $units_cost1;
		}
		elseif ($units > 50 && $units <= 150) {
			$units_fee1 = $units_cost1 * 50;
			$excess_units1 = $units - 50;

			$fee = $units_fee1 + ($excess_units1 * $units_cost2);
		}
		elseif ($units > 150 && $units <= 250) {
			$units_fee2 = ($units_cost1 * 50) + ($units_cost2 * 100);
			$excess_units2 = $units - 150;

			$fee = $units_fee2 + ($excess_units2 * $units_cost3); 
		}
		else {
			$units_fee3 = ($units_cost1 * 50) + ($units_cost2 * 100) + ($units_cost3 * 100);
			$excess_units3 = $units - 250;

			$fee = $units_fee3 + ($excess_units3 * $units_cost4);
		}

		return number_format((float)$fee,2,'.','');

	}

?>

	<form  action="" method="post" id="form">
		<?php
			echo "How many units of current would you like to purchase?".'<br/>'.'<br/>';
		?>
		<input type="number" id="units" name="units" placeholder="Enter number of units?" />
		<input type="submit" id="submit_units" name="submit_units" value="Calculate"/>
	</form>

	<div>
		<?php
			echo "Total cost of ".$units." units : ". "NGN".$fee;
		?>
	</div>

	</div>
