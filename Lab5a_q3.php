<!DOCTYPE.html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab 5a Q3</title>
</head>

<?php

function calculateArea($length, $width) {
    return $length * $width;
}

$length = 4; 
$width = 2;  
$area = calculateArea($length, $width);

echo "<b>The area of a rectangle with a width of $width and $length is $area.</b>";
?>
</html>