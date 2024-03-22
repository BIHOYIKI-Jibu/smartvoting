<?php
$conn=mysqli_connect("localhost","root","","smartvoting");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="design.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
	<fieldset>
<h1>smart voting</h1>
<table border="2">
<tr>
<th>candidate's id</th>
<th>candidate's name</th>
<th>political part</th>
<th>candidate's age</th>
<th>gender</th>
</tr>
<?php
$a=mysqli_query($conn,"SELECT * FROM candidates");
while($row=mysqli_fetch_array($a)){
?>
<tr>
<td><?php echo $row['candidate_id']; ?></td>
<td><?php echo $row['candidate_name']; ?></td>
<td><?php echo $row['political_part']; ?></td>
<td><?php echo $row['candidate_age']; ?></td>
<td><?php echo $row['gender']; ?></td>
</tr><br><br>
<?php
}
?>
</table>
</fieldset>
</center>
</body>
</html>