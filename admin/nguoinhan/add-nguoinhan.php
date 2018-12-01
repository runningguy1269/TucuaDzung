<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>thêm nhóm máu</title>
	
	<link rel="stylesheet" href="../vendor/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap.min.css">
	<script src="vendor/jquery-3.3.1.min.js"></script>
	
</head>
<body>
	
	<div class="container">
		  <div class="jumbotron">
		    <h1>Thêm Người Nhận</h1>      
		 	<form method="POST" action="xl-themnguoinhan.php">

		 		Nhóm máu : <input style="margin-left:50px;" type="text" name="txtNhommau"><br><br>
		 		Lượng cho đi : <input style="margin-left: 35px;" type="text" name="txtLuongchodi"><br><br>
		 		Ngày cho đi : <input style="margin-left: 45px;" type="date" name="txtNgaychodi"><br><br>
		 		Người nhận : <input style="margin-left: 44px;" type="text" name="txtNguoinhan"><br><br>
		 		SDT Người nhận : <input style="margin-left: 12px;" type="text" name="txtNumber"><br><br>
		 		Ngày nhận : <input style="margin-left: 51px;" type="date" name="txtNgaynhan"><br>

							<input type="submit" name="them" value="Thêm">
		 	</form>   
		</div>
	</div>
</body>
</html>
