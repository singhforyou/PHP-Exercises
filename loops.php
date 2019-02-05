<!-- +---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/

/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Use while-loop to print array elements (every food in a new row).
*/

/*
Use for-loop to print array elements (every food in a new row).
*/

/*
Use foreach-loop to print array elements (every food in a new row).
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below). -->

<?php
	$x = 1;
	while($x <= 10) {
	    echo $x;
	    $x++;
	}
	echo "<hr style=\"margin 1rem 0\">";
	function ranges($start,$end,$step) {
		$numbers = array();
		for($i=$start;$i<=$end;$i+=5){
			$numbers[]=$i;
		}
		return $numbers;
	}
	$nNum = ranges(5,100,5);
	$count = count($nNum);
	for ($j=0;$j < $count;$j++) {
		$val = $nNum[$j];
		$remainder = $val % 2;
		if($remainder){
			echo $val.',';
		}
	}
	echo "<hr style=\"margin 1rem 0\">";
	foreach ($nNum as $key => $value) {
		$remainder = $value % 2;
		if($remainder){
			echo $value.' % 2 = ',$remainder." -> Odd Number<br/>";
		} else {
			echo $value.' % 2 = ',$remainder." -> Even Number<br/>";
		}
	}
	echo "<hr style=\"margin 1rem 0\">";
	$food1 = array();
	$food1[] = array('name'=>'Pizza','type'=>'Main Course','origin'=>'Italy');
	$food1[] = array('name'=>'Cheesesake','type'=>'Desert','origin'=>'Greece');
	$food1[] = array('name'=>'Biriyani','type'=>'Main Course','origin'=>'India');
	$food1[] = array('name'=>'Nuddols','type'=>'Main Course','origin'=>'Japan');
	$keys = array_reverse(array_keys($food1));
	while (!empty($keys)) {
	    $key = array_pop($keys);
	    echo $food1[$key]['name']." | ".$food1[$key]['type']." | ".$food1[$key]['type']."<br/>";
	}
	echo "<br/>";
	$keysCount = count($food1);
	for($p=0;$p<$keysCount;$p++){
		$_key = $p;
	    echo $food1[$_key]['name']." | ".$food1[$_key]['type']." | ".$food1[$_key]['type']."<br/>";
	}
	echo "<br/>";
	foreach ($food1 as $k => $name) {
		echo  $name['name']." | ".$name['type']." | ".$name['origin']."<br/>";
	}
	echo "<hr style=\"margin 1rem 0\"><ul>";
	$keys1 = array_reverse(array_keys($food1));
	while (!empty($keys1)) {
	    $key = array_pop($keys1);
	    echo "<li>".$food1[$key]['name']." | ".$food1[$key]['type']." | ".$food1[$key]['type']."</li>";
	}
	echo "</ul><ul>";
	$keysCount1 = count($food1);
	for($p1=0;$p1<$keysCount1;$p1++){
		$_key = $p1;
	    echo "<li>".$food1[$_key]['name']." | ".$food1[$_key]['type']." | ".$food1[$_key]['type']."</li>";
	}
	echo "</ul><ul>";
	foreach ($food1 as $k => $name) {
		echo  "<li>".$name['name']." | ".$name['type']." | ".$name['origin']."</li>";
	}
	echo "</ul>";
	$food = array();
	$food['Pizza'] = array('type'=>'Main Course','origin'=>'Italy');
	$food['Cheesesake'] = array('type'=>'Desert','origin'=>'Greece');
	$food['Biriyani'] = array('type'=>'Main Course','origin'=>'India');
	$food['Nuddols'] = array('type'=>'Main Course','origin'=>'Japan');
	echo "<hr style=\"margin 1rem 0\"><b>My favourite meals</b><ul>";
	foreach ($food as $k => $name) {
		echo "<li>".$k.":<ul><li>Type: ".$name['type']."</li><li>Origin: ".$name['origin']."</li></ul></li>";
	}
	echo "</ul><hr style=\"margin 1rem 0\">";
?>