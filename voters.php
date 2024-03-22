<?php
$conn=mysqli_connect("localhost","root","","smartvoting");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="design.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>smart voting project</title>
</head>
<body id="image"><center>
	<fieldset>
	<center><h1>smartvoting</h1></center>
<fiedset id="1">
<form method="POST">
	<label>voter's id:</label>
	<input type="text" name="voter_id"><br><br>
	<label>voter's name:</label>
	<input type="text" name="voter_name"><br><br>
	<label>province:</label>
	<input type="text" name="province"><br><br>
	<label>age:</label>
	<input type="text" name="voter_age"><br><br>
	<label>gender:</label>
	<input type="text" name="gender"><br><br>
	<label>candidate's_id</label>
	<input type="text" name="candidate_id"><br><br>
	<input type="submit" name="voting" value="vote">
</form>
<?php
if(isset($_POST['voting'])){
	$vid=$_POST['voter_id'];
	$vn=$_POST['voter_name'];
	$pp=$_POST['province'];
	$va=$_POST['voter_age'];
	$g=$_POST['gender'];
	$cid=$_POST['candidate_id'];
	if($g<18){
		echo "<h1>you can't vote becouse you are still young!</h1>";
	}
	 else if(mysqli_query($conn,"INSERT INTO voters(voter_id,voter_name,province,voter_age,gender,candidate_id) values('$vid','$vn','$pp','$va','$g','$cid')" )){
		echo "data inserted";
	}
}
?>
</fiedset>
</fiedset>
</center>
</body>
</html>