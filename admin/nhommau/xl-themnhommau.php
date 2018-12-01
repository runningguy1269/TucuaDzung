

<?php 
	$con = mysqli_connect('localhost','root','','nganhangmau');
	$u = $_POST['txtNhommau'];
	$p = $_POST['txtDonvi'];
	$sql = "INSERT INTO nhommau (nhommau, donvimau) values('$u','$p')";
	if ($query = mysqli_query($con,$sql)) {
		header("location: ../quanlynhommau.php");
	}
 ?>