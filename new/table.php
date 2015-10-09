<?php
	//table
	require_once("functions.php");
	$car_list = getCarData();
	
?>

<table border=1>
	<tr>
		<th>id</th>
		<th>auto nr märk</th>
		<th>Värv</th>
		<th>User id</th>
	</tr>
	<?php
			//iga massiivis oleva elemendi kohta, masiivi pikkus, $i++ = $i=$i+1
		for($i = 0; $i<count($car_list); $i++){
			echo"<tr>";
			echo"<td>".$car_list[$i]->id."</td>";
			echo"<td>".$car_list[$i]->number_plate."</td>";
			echo"<td>".$car_list[$i]->color."</td>";
			echo"<td>".$car_list[$i]->user_id."</td>";
			echo"</tr>";
		}
	?>
</table>