<?php
	//functions
	
	require_once("../../configglobal.php");
	$database = "if15_rimo";
	
	//funktsioon et küsida andmebaasist andmeid
	function getCarData(){
		$mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
		$stmt = $mysqli->prepare("SELECT id, user_id, number_plate, color FROM car_plates");
		$stmt->bind_result($id, $user_id, $number_plate, $color);
		$stmt->execute();
		$row = 0;
		//tee tsüklit nii palju kordi kui saad ab'st ühe rea andmeid
		while($stmt->fetch()){
			echo $row." ".$number_plate."<br>";
			$row = $row + 1;
		}
		
		
		$stmt->close();
		$mysqli->close();
	}
	
?>