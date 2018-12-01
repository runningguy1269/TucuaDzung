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
		<div style="width: 22%;float: left;box-sizing: border-box;" class="row">
			
				<div style="border: 1px solid blue;height: 500px;width: 250px;background-color: #333333;box-sizing: border-box;" id='cssmenu'>
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
			
		</div>
		<div style="float: left;margin-left: 20px;border-radius: 8px;width: 75%;">
			<p style="font-size: 20px;font-family: monospace;text-align: center;padding:10px;">Thêm người hiến máu</p>
		</div>
		<style>
			.formAddDonor{
				text-align: center;
			}
		</style>
		<form class="formAddDonor" action="" method="POST">
			<label style="margin-left: 79px;" >ID :<input style="margin-left: 50px;" type="text" name="id" value=""></label><br>
			<label style="margin-left: 30px;" >Ho va ten :<input style="margin-left: 50px;" type="text" name="hoten" value=""></label><br>
			<label style="margin-left: 65px;" >SDT :<input style="margin-left: 50px;" type="text" name="sdt" value=""></label><br>
			<label style="margin-left: 57px;" >email :<input style="margin-left: 50px;" type="text" name="mail" value=""></label><br>
			<label style="margin-left: 32px;" >facebook :<input style="margin-left: 50px;" type="text" name="fb" value=""></label><br>
			<label style="margin-left: 43px;" >gioitinh :<input style="margin-left: 50px;" type="text" name="gioitinh" value=""></label><br>
			<label style="margin-left: 67px;" >tuoi :<input style="margin-left: 50px;" type="text" name="tuoi" value=""></label><br>
			<label style="margin-left: 70px;">Nhom mau: <input type="text" name="nhomMau" value=""></label><br>
			<label style="margin-left: 40px;" >diachi :<textarea style="margin-left: 50px;" name="diachi" cols="20" rows="2"></textarea><br>
			<button style="margin-right: 20px;margin-left: -20px;" class="btn btn-default" type="reset">Cancel</button>
			<button class="btn btn-primary" name="btnSubmit" type="submit">Save changes</button>

		</form>
		<?php 

		$con = mysqli_connect('localhost','root','','nganhangmau');

			if(isset($_POST['btnSubmit'])){
				$id			= $_POST['id'];
				$hoten		= $_POST['hoten'];
				$sdt		= $_POST['sdt'];
				$email		= $_POST['mail'];
				$facebook	= $_POST['fb'];
				$gioiTinh	= $_POST['gioitinh'];
				$tuoi 		= $_POST['tuoi'];
				$nhommau 	= $_POST['nhomMau'];
				$diachi 	= $_POST['diachi'];
				$sql = "INSERT INTO nguoihienmau (id, hoten, sdt, email, facebook, gioitinh, tuoi, nhommau,diachi)";
				$sql.= " VALUES('$id', '$hoten', '$sdt', '$email', '$facebook', '$gioiTinh','$tuoi','$nhommau','$diachi')";
				if($result = mysqli_query($con, $sql)){
					echo 'Success :Thêm dữ liệu thành công';
				}else{
					echo 'loi ket noi';
				}

				mysqli_close($con);
			}

		 ?>
		
		
		
	</div>
</body>
</html>