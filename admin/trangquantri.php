<?php 
	include('includes/include.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang quản trị</title>
	<link rel="stylesheet" type="text/css" href="../admin/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="../admin/vendor/fontawesome.min.css">
	
	<script src="vendor/jquery.min.js"></script>
	<script src="vendor/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div style="border-bottom: 1px solid #fff;border-right: 1px solid #fff; line-height: 52px; font-size: 24px; font-family: monospace; background-color: #333333; color: #fff;" class="col-md-10">
				Hệ thống quản trị ngân hàng máu
			</div>
			<div style="line-height: 50px; background-color: #333333;" class="col-md-2">
				<span style="color:#fff;font-size: 20px;font-family: monospace;">Đăng xuất</span> &nbsp;<a style="color:#fff;" class="fas fa-sign-out-alt" href="http://localhost:8888/project02/admin/dangnhap.php"></a>
			
			</div>
		</div>
		<div class="row">
			
				<div style="border: 1px solid blue;height: 500px;width: 250px;background-color: #333333;float: left;box-sizing: border-box;" id='cssmenu'>
					<ul style="text-align: justify;padding:20px;">
					   <li style="list-style-type: none; border: 1px solid red;padding: 10px;width: 200px;background-color: #D11F22;"><a style="color: #fff;" href='trangquantri.php'><span>Tổng Quan</span></a></li>
					   <li style="list-style-type: none; border: 1px solid red;padding: 10px;width: 200px;margin-top: 50px;background-color: #D11F22;" class='active has-sub'><a style="color: #fff;" href='#'><span>Nhóm Máu</span></a>
					      <ul>
					        
				
					               <li style="list-style-type: none;background-color: #D11F22;" class='last'><a style="color: #fff;" href='quanlynhommau.php'><span>Quản Lý Nhóm Máu</span></a></li>
					        
					      </ul>
					   </li>
					   <li style="list-style-type: none; border: 1px solid red;padding: 10px;width: 200px;margin-top: 50px;background-color: #D11F22;"><a style="color: #fff;" href='themnguoihienmau.php'><span>Thêm Người Hiến Máu</span></a></li>
					   <li style="list-style-type: none; border: 1px solid red;padding: 10px;width: 200px;margin-top: 50px;background-color: #D11F22;" class='last'><a style="color: #fff;" href='qlemailnguoinhan.php'><span>Quản lý email người nhận</span></a></li>
					   <li style="list-style-type: none; border: 1px solid red;padding: 10px;width: 200px;margin-top: 50px;background-color: #D11F22;" class='last'><a style="color: #fff;" href='quanlynguoinhan.php'><span>Quản Lý Người Nhận</span></a></li>
					   
					</ul>
				</div>
			
				<div style="float:left;box-sizing: border-box;padding-left: 100px;margin-top: 100px;">
					<p style="padding: 30px; border: 1px solid black; width: 300px;text-align: justify;font-size: 20px;border-bottom: none;">DANH SACH NHOM MAU</p>
					<p style="border: 1px solid black;margin-top: -10px;padding: 15px;"><a href="quanlynhommau.php">Chi tiet -></a></p>
				</div>
				
			
		</div>
		
		
	</div>
</body>
</html>
