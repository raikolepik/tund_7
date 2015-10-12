<?php
	//edit.php
	
	require_once("edit_functions.php");
	
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
<form action="table.php" method="get" >
	<input name="car_id"type="hidden" value="<?=$_GET["edit_id"];?>">
	<input name="number_plate" type="text" value="<?=$car->number_plate;?>">
	<input name="color" type="text" value="<?=$car->color;?>">
	<input name="update" type="submit">
</form>