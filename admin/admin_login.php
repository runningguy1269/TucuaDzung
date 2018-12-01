<?php 
	include('includes/include.php');
 ?>


<?php 


session_start();


if(isset($_POST['btnLogin'])){
    //nếu có sự kiện click vào nút đăng nhập thì xử lý
    
    $username = $_POST['username'];
    //uName là tên của input người dùng nhập vào
    
    $password = $_POST['password'];
    //pWord là tên của input người dùng nhập vào
    
    if($username == 'admin' && md5($password == 'test12345')){
        echo 'Bạn đã đăng nhập thành công';
        $_SESSION['us'] = $username;
        header("location:trangquantri.php");
    }else{
        echo 'Đăng nhập thất bại, tài khoản hoặc mật khẩu chưa chính xác.';
    }
}

	
 ?>
