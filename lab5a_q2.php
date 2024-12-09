<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab 5a Q2</title>
	
    <style>

		table, th, td {
		border:1px solid black;
	}
    </style>
</head>

 <?php
 $students = [
	[
		'name' => 'Alice',
		'program' => 'BIP',
		'age' => 21
	],
	[
		'name' => 'Bob',
		'program' => 'BIS',
		'age' => 20
	],
	[
		'name' => 'Raju',
		'program' => 'BIT',
		'age' => 22
	]
];?>

<body>
    <table style="width:30%">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['program']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>