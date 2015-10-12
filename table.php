<?php  
    require_once("functions.php");
	
		//kuulan, kas kasutaja tahab kustutada
		if(isset($_GET["delete"])) {
				deleteCarData($_GET["delete"]);
		}
	
	//kasutaja muudab andmeid
	if(isset($_GET["UPDATE"])){
		//auto id, auto number, auto v2rv
		updateCarData($_GET["UPDATE"], $_GET["number_plate"], $_GET["color"]);
		
		
	}

    
    // kõik autod objektide kujul massiivis
    $car_array = getAllData();
	
	if(isset($_GET))
	
	
	
?>

<h1>Tabel</h1>
<table border = 1>
<tr>
	<th>ID</th>
	<th>Kasutaja ID</th>
	<th>Auto numbrimärk</th>
	<th>Värv</th>
	<th>Kustuta</th>
	<th>Edit</th>
</tr>
<?php 
        

		// kasutaja tahab rida muuta
		if(isset($_GET["edit"]) && $_GET["edit"] == $car_array[$i]->id){
		echo "<tr>";
		echo "<form action='table.php' method='get'>";
		// input mida välja ei näidata
		echo "<input type='hidden' name='car_id' value='".$car_array[$i]->id."'>";
		echo "<td>".$car_array[$i]->id."</td>";
		echo "<td>".$car_array[$i]->user_id."</td>";
		echo "<td><input name='number_plate' value='".$car_array[$i]->number_plate."' ></td>";
		echo "<td><input name='color' value='".$car_array[$i]->color."' ></td>";
		echo "<td><a href='?update=".$car_array[$i]->id."'>save</a></td>";
		echo "<td><input name='update' type='submit'></td>";
		echo "<td><a href='table.php'>cancel</a></td>";
		echo "</form>";
		echo "</tr>";
		}else{
		// lihtne vaade
		}
}
?>
</table>