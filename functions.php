<?php
    require_once("../config_global.php");
    $database = "if15_raiklep";
    function getAllData(){
        
        $mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
        $stmt = $mysqli->prepare("SELECT id, user_id, number_plate, color FROM car_plates WHERE deleted IS NULL");
        $stmt->bind_result($id_from_db, $user_id_from_db, $number_plate_from_db, $color_from_db);
        $stmt->execute();
        
		// massiiv, kus hoiame autosid
		$array = array();
		
		
        // iga rea kohta mis on ab'is teeme midagi
        while($stmt->fetch()){
			//suvaline muutuja, kus hoiame auto andmeid selle hetkeni, kui lisame massiivi.
			
			
			// std on tyhi objekt, kus hoiame v22rtusi
			$car = new StdClass();
			$car->color = $color_from_db;
			$car->user_id = $user_id_from_db;
			$car->id = $id_from_db;
			$car->number_plate = $number_plate_from_db;
			//lisan massiivi (auto lisan massiivi)
			array_push($array, $car);
			//echo "<pre>";
			//var_dump($array);
			//echo "</pre>";
		}
        
        // iga rea kohta mis on ab'is teeme midagi
        while($stmt->fetch()){
            //saime andmed k�tte
			//andmed saada transporditavale kujule
			

        }
        //saadan tagasi
		
		return $array;
		
		
        $stmt->close();
        $mysqli->close();
    }
    function deleteCarData($car_id){
		 $mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
		 //uuendan v2lja deleted
		 $stmt = $mysqli->prepare("UPDATE car_plates SET deleted=NOW() WHERE id=?");
		 $stmt->bind_param("i", $car_id);
		 $stmt->execute();
		 
		 header("location: table.php");
		 
		 $stmt->close();
		 $mysqli->close();
		 
	
		 
		 
		
	}
    
	
	    function updateCarData($car_id, $number_plate, $color){
		 $mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
		 //uuendan v2lja deleted
		 $stmt = $mysqli->prepare("UPDATE car_plates SET number_plate=?, color=? WHERE id=?");
		 $stmt->bind_param("ssi", $number_plate, $color, $car_id);
		 $stmt->execute();
		 $stmr->close();
	
?>