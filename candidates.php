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
<body><center><fieldset>
	<center><h1>smartvoting</h1></center>
<form method="POST">
	<label>candidate's id:</label>
	<input type="text" name="candidate_id"><br><br><br>
	<label>candidate's name:</label>
	<input type="text" name="candidate_name"><br><br><br>
	<label>political part:</label>
	<input type="text" name="political_part"><br><br><br>
	<label>candidate's age:</label>
	<input type="text" name="candidate_age"><br><br><br>
	<label>gender:</label>
	<input type="text" name="gender"><br><br><br>
	<input type="submit" name="regist" value="regist">
</form>
<?php
if(isset($_POST['regist'])){
	$cid=$_POST['candidate_id'];
	$cn=$_POST['candidate_name'];
	$pp=$_POST['political_part'];
	$ca=$_POST['candidate_age'];
	$g=$_POST['gender'];
	if(age<18){
		echo "you can't be a leader wait until you grow up";
	}
	if(mysqli_query($conn,"INSERT INTO candidates(candidate_id,candidate_name,political_part,candidate_age,gender) values('$cid','$cn','$pp','$ca','$g')" )){
		echo "data inserted";
	}
}
?>
</fieldset>
</table>
</center>
</body>
</html>

