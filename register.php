<?php 
	include("includes/header.php");
	include("includes/body.php"); 
	?>
	<style>
		body{
 		background-image: url("images/mau.png");
 		background-size: 50px 50px;
 	}
	</style>

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php kiemtradangkyhienmau(); ?>						
		</div>

	</div>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="register.php" class="active" id="">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" method="post" role="form" >

									<div class="form-group">
										<input type="text" name="hoten" id="hovaten" tabindex="1" class="form-control" placeholder="Họ và Tên" value="" required >
									</div>
									<div class="form-group">
										<input type="number" name="SDT" id="SDT" tabindex="1" class="form-control" placeholder="SDT" value="" required >
									</div>
									
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="facebook" id="facebook" tabindex="1" class="form-control" placeholder="Facebook" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="gioitinh" id="gioitinh" tabindex="2" class="form-control" placeholder="Giới tính" required>
									</div>
									<div class="form-group">
										<input type="text" name="tuoi" id="tuoi" tabindex="2" class="form-control" placeholder="Tuổi" required>
									</div>
									<div class="form-group">
										<input type="text" name="nhommau" id="nhommau" tabindex="2" class="form-control" placeholder="Nhóm máu" required>
									</div>
									<div class="form-group">
										<input type="text" name="diachi" id="diachi" tabindex="2" class="form-control" placeholder="Địa chỉ" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php  include("includes/footer.php"); ?>