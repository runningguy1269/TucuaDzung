<?php 
	$con = mysqli_connect('localhost','root','','nganhangmau');
	$id = $_GET['id'];
	$sql = "DELETE FROM nhanmau WHERE ID = '$id'";
	if ($query = mysqli_query($con,$sql)) {
		header("location: ../quanlynguoinhan.php");
	}
 ?>