<?php
	//edit.php
	
	require_once("edit_functions.php");
	    
		
		//Kasutaja muudab andmeid
    if(isset($_GET["update"])){
        //auto id, auto number, auto v�rv
        updateCarData($_GET["car_id"], $_GET["number_plate"], $_GET["color"]);
    }
	
	//kas muutuja on aadressireal 
	if(isset($_GET["edit_id"])){
		
	
	//trykin aadressirealt muutuja
	
		echo $_GET["edit_id"];
	
	//kysin auto andmeid
		$car = getSingleCarData($_GET["edit_id"]);
		var_dump($car);
	
	}else{
		//kui muutujat ei ole, ei ole m6tet siia lehele tulla
		//suunan tagasi table.php lehele
		
		header("Location: table.php");
		
		
		
	}
	
?>
<!-- Salvestamiseks kasutan table.php rida 15, updatecar() -->
<form action="edit.php" method="get" >
	<input name="car_id"type="hidden" value="<?=$_GET["edit_id"];?>">
	<input name="number_plate" type="text" value="<?=$car->number_plate;?>">
	<input name="color" type="text" value="<?=$car->color;?>">
	<input name="update" type="submit">
</form>