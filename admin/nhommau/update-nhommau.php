<?php 
	
	$con = mysqli_connect('localhost','root','','nganhangmau');
	$id = $_GET['id'];
	$sql = "SELECT * FROM nhommau WHERE ID = '$id'";
	$query = mysqli_query($con,$sql) or die('Loi truy van');
	$row = mysqli_fetch_assoc($query);

 ?>
}


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cập nhật máu</title>
	<link rel="stylesheet" href="../vendor/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap.min.css">
	<script src="vendor/jquery-3.3.1.min.js"></script>
</head>
<body>
		<div class="container">
		  <div class="jumbotron">
		    <h1>Cập nhật tình hình máu</h1>      
		 	<form method="POST" action="xl-capnhatmau.php">
		 		Id : <input type="text" name="txtIndex" value="<?php echo $row['ID'];?>"><br>
		 		Nhóm máu : <input type="text" name="txtNhommau" value="<?php echo $row['nhommau'];?>"><br>
		 		Đơn vị : <input style="margin-left: 28px;" type="text" name="txtDonvi" value="<?php echo $row['donvimau'];?>"><br>
							<input type="submit" name="them" value="Sửa">
		 	</form>   
		</div>
	</div>
</body>
</html>
