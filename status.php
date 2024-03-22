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
<fieldset id="1">
		<h1>smart voting</h1>
		<h2>this shows how candidates were voted by voters</h2>
<table border="2">
	<tr>
		<th colspan="5" bgcolor="cream">A CANDIDATE</th>
		<th colspan="5"bgcolor="silver">A VOTER</th>
	</tr>
<tr>
<th>candidate's id</th>
<th>candidate's name</th>
<th>political part</th>
<th>candidate's age</th>
<th>gender</th>
<th>voter_id</th>
<th>voter_name</th>
<th>province</th>
<th>voter_age</th>
<th>gender</th>
</tr>
<?php
$a=mysqli_query($conn,"SELECT * FROM candidates INNER JOIN voters ON candidates.candidate_id=voters.voter_id");
while($row=mysqli_fetch_assoc($a)){
?>
<tr>
<td><?php echo $row['candidate_id']; ?></td>
<td><?php echo $row['candidate_name']; ?></td>
<td><?php echo $row['political_part']; ?></td>
<td><?php echo $row['candidate_age']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['voter_id'];?></td>
<td><?php echo $row['voter_name'];?></td>
<td><?php echo $row['province'];?></td>
<td><?php echo $row['voter_age'];?></td>
<td><?php echo $row['gender'];?></td>
</tr><br><br>
<?php
}
?>
</table>
</fieldset>
</center>
</body>
</html>