
<?php 
	$con = mysqli_connect('localhost','root','','nganhangmau');
	$u = $_POST['txtNhommau'];
	$p = $_POST['txtLuongchodi'];
	$o = $_POST['txtNgaychodi'];
	$x = $_POST['txtNguoinhan'];
	$s = $_POST['txtNumber'];
	$t = $_POST['txtNgaynhan'];
	$sql = "INSERT INTO nhanmau (nhommau, luongchodi, ngaychodi, nguoinhan, SDTnguoinhan, ngaynhan) values('$u','$p','$o','$x','$s','$t')";
	if ($query = mysqli_query($con,$sql)) {
		header("location: ../quanlynguoinhan.php");
	}
 ?>