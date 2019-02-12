<!-- *
+---+
| 1 |
+---+
Declare the function named greeting. When this function is called,
it prints: "<p>Welcome to the well structured code.</p>";
*/

/*
Call the function.
*/





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Declare the function named calculateArithmeticMean. 
This function has 3 parameters: a, b and c.
calculateArithmeticMean prints the arithmetic mean of a, b and c.
*/

/*
Call the function with the values for paremeters.
*/





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare the function named calculateTotalPrice. 
This function has 1 parameter: price.
calculateTotalPrice returns the total price after the tax of 13%.
*/

/*
Declare the variable total
and assign it with the value 
that calculateTotalPrice outputs 
when it is called (with the value for price parameter).
*/

/*
Print total.
*/





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare the global variable length and assign it with the value 12.
Declare the global variable width and assign it with the value 6.

Declare the function named calculateRectangleArea. 

This function calculates and prints the area of rectangle based on the 
global variables length and width.

Make these variables accessible inside the local scope, and do the calculation and printing
*/

/*
Call the function.
*/

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
If the function for calculating the area of a triangle looks like this:
*/
function calculateTriangleArea($base, $height) {
    $area =  ($base * $height) / 2;
}

/*
What can you do to make the $area accessible in global scope 
(without using the return statement)?
*/

/*
Choose the values for parameters and call the function.
*/

Print $area. -->


<?php
function greeting($value='') {
	return $value;
}
echo "<p>".greeting('Welcome to the well structured code')."</p>";
echo "<hr style=\"margin 1rem 0\">";
function calculateArithmeticMean($a='',$b='',$c='') {
	$ArithmeticMean=($a + $b + $c)/3;
	return $ArithmeticMean;
}
echo 'Arithmetic mean of a, b and c: '.calculateArithmeticMean(10,20,30);
echo "<hr style=\"margin 1rem 0\">";
function calculateTotalPrice($price='') {
	$total = $price + ($price*13/100);
	return $total;
}
echo 'Total: '.calculateTotalPrice(300);
echo "<hr style=\"margin 1rem 0\">";
function calculateRectangleArea($length='',$width='') {
	$area = $length * $width;
	return $area;
}
echo 'Area of a rectangle: '.calculateRectangleArea(10,12);
echo "<hr style=\"margin 1rem 0\">";
function calculateTriangleArea($base='', $height='') {
	$area =  ($base * $height) / 2;
	echo 'Area of a triangle: '.$area;
}
calculateTriangleArea(30,50);
echo "<hr style=\"margin 1rem 0\">";
?>