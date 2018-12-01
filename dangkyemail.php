<?php 
	$con = mysqli_connect('localhost','root','','nganhangmau');

	if(isset($_POST['emaildangky'])){
		$email = $_POST['emaildangky'];
		$sql = "INSERT INTO emaildangky (email)";
		$sql.= " VALUES('$email')";
		$result = mysqli_query($con, $sql);
	}


 ?>