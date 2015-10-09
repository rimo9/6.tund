<?php
	//table
	require_once("functions.php");
	//kas kasutaja tahab kustutada, kas aadressi real on ?delete=??
	if(isset($_GET["delete"])){
		deleteCar($_GET["delete"]);
	}
	
	$car_list = getCarData();
	
?>

<table border=1>
	<tr>
		<th>id</th>
		<th>User id</th>
		<th>auto nr märk</th>
		<th>Värv</th>
		<th>X</th>
	</tr>
	<?php
			//iga massiivis oleva elemendi kohta, masiivi pikkus, $i++ = $i=$i+1
		for($i = 0; $i<count($car_list); $i++){
			echo"<tr>";
			echo"<td>".$car_list[$i]->id."</td>";
			echo"<td>".$car_list[$i]->user_id."</td>";
			echo"<td>".$car_list[$i]->number_plate."</td>";
			echo"<td>".$car_list[$i]->color."</td>";
			echo"<td><a href='?delete=".$car_list[$i]->id."'>x</a></td>";
			echo"</tr>";
		}
	?>
</table>