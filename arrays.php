<!-- 
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
 -->





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