<?php
	$food = array();
	$food['Pizza'] = array('type'=>'Main Course','origin'=>'Italy');
	$food['Cheesesake'] = array('type'=>'Desert','origin'=>'Greece');
	$food['Biriyani'] = array('type'=>'Main Course','origin'=>'India');
	$food['Nuddols'] = array('type'=>'Main Course','origin'=>'Japan');
	foreach ($food as $k => $name) {
		echo $k."<br/>";
	}
	echo "<hr style=\"margin 1rem 0\"><ul>";
	foreach ($food as $k => $name) {
		echo "<li>".$k."</li>";
	}
	echo "</ul><hr style=\"margin 1rem 0\"><ul>";
	foreach ($food as $k => $name) {
		echo "<li>".$k.":<ul><li>Type: ".$name['type']."</li><li>Origin: ".$name['origin']."</li></ul></li>";
	}
	echo "</ul><hr style=\"margin 1rem 0\">";
	foreach ($food as $k => $name) {
		echo  $k." | ".$name['type']." | ".$name['origin']."<br/>";
	}
	echo "<hr style=\"margin 1rem 0\"><table><tr><th>Name</th><th>Type</th><th>Origin</th></tr>";
	foreach ($food as $k => $name) {
		echo "<tr><td>".$k."</td><td>".$name['type']."</td><td>".$name['origin']."</td></tr>";
	}
	echo "</table><hr style=\"margin 1rem 0\">";
?>