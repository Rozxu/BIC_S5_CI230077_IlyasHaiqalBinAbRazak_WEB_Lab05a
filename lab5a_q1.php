<!DOCTYPE html>

<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>

<style>
	table, th, td {
	border:1px solid black;
}
</style>

<body>

 <?php
 $name = "ILYAS HAIQAL BIN AB RAZAK";
 $matrics = "CI230077";
 $course = "BIW - BACHELOR OF COMPUTER SCIENCE (WEB TECHNOLOGY) WITH HONOURS";
 $yearOfStudy = 2;
 $address ="AMPANG, SELANGOR";
 
 ?>
 <table style="width:80%">
	<tr>
		<th>Name: </th>
		<th>Matrics ID: </th>
		<th>Course: </th>
		<th>Year of Study: </th>
		<th>Address: </th>
	</tr>
	<tr>
		<td><?php echo " $name"; ?></td>
		<td><?php echo " $matrics"; ?></td>
		<td><?php echo " $course"; ?></td>
		<td><?php echo " $yearOfStudy"; ?></td>
		<td><?php echo " $address"; ?></td>
	</tr>
 </table>

</body>
</html>