<?php 
	$con = mysqli_connect('localhost','root','','nganhangmau');
	$id = $_POST['txtIndex'];
	$nhommau = $_POST['txtNhommau'];
	$donvimau = $_POST['txtDonvi'];

	$sql = "UPDATE nhommau SET nhommau = '$nhommau' , donvimau = '$donvimau' WHERE ID = '$id'";
	$query = mysqli_query($con,$sql);

	if($query){
		header('Location: ../quanlynhommau.php');
	}
 ?>