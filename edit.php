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