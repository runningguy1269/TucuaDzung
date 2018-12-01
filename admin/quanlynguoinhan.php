<?php 
	include('includes/include.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>quản lý nhóm máu</title>
	<link rel="stylesheet" href="vendor/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="vendor/styles.css">
	<script src="../admin/vendor/jquery.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div style="border-bottom: 1px solid #fff;border-right: 1px solid #fff; line-height: 52px; font-size: 24px; font-family: monospace; background-color: #333333; color: #fff;" class="col-md-10">
				Hệ thống quản trị ngân hàng máu
			</div>
			<div style=" line-height: 50px; background-color: #333333;" class="col-md-2">
				<span style="color:#fff;font-size: 20px;font-family: monospace;">Đăng xuất</span> &nbsp;<a style="color:#fff;" class="fas fa-sign-out-alt" href="http://localhost:8888/project02/admin/dangnhap.php"></a>
			
			</div>
		</div>
		<div class="row">
			
				<div id='cssmenu'>
					<ul>
					   <li><a href='trangquantri.php'><span>Tổng Quan</span></a></li>
					   <li class='active has-sub'><a href='#'><span>Nhóm Máu</span></a>
					      <ul>
					        
					               <li class='last'><a href='quanlynhommau.php'><span>Quản Lý Nhóm Máu</span></a></li>
					        
					      </ul>
					   </li>
					   <li><a href='themnguoihienmau.php'><span>Thêm Người Hiến Máu</span></a></li>
					   <li class='last'><a href='qlemailnguoinhan.php'><span>Quản lý email người nhận</span></a></li>
					    <li class='last'><a href='quanlynguoinhan.php'><span>Quản lý người nhận</span></a></li>
					   
					</ul>
				</div>
			
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">
				
				<h1>Quản lý người nhận</h1>
			
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
					<form>
				<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Nhóm Máu
						</th>
						<th>
							Lượng cho đi (đơn vị/cc/ml)
						</th>
						<th>
							Ngày cho đi
						</th>
						<th>
							Người nhận
						</th>
						<th>
							SDT người nhận
						</th>
						<th>
							Ngày nhận
						</th>
						<th>
							Action
						</th>
					</tr>
				</thead>
				<tbody>
			
					<?php 
						$sql = "SELECT * FROM nhanmau";
						$result = mysqli_query($con, $sql);
						$i  = 1;
						while ($rows = mysqli_fetch_array($result)) {
						    echo '<tr>';
						    		echo '<td>'.$i.'</td>';
						    		echo '<td>'.$rows['nhommau'].'</td>';
						    		echo '<td>'.$rows['luongchodi'].'</td>';
						    		echo '<td>'.$rows['ngaychodi'].'</td>';
						    		echo '<td>'.$rows['nguoinhan'].'</td>';
						    		echo '<td>'.$rows['SDTnguoinhan'].'</td>';
						    		echo '<td>'.$rows['ngaynhan'].'</td>';
						    		echo "<td> <a href='nguoinhan/add-nguoinhan.php'>Thêm</a> | <a href='nguoinhan/delete-nguoinhan.php?id=".$rows['ID']."'>Xóa</a>";
						    echo '</tr>';
						    $i++;
						}

					 ?>
				</tbody>
			</table>
		</div>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>	