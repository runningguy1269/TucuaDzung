<?php 


// help function //

function clean($string){
	return htmlentities($string);
}//end



// redirect
function redirect($location){
	return header("Location: {$location}"); //{} để biết biến ở đâu
}//end


//set message
function datthongbao($message){
	if(!empty($message)){
		$_SESSION['message'] = $message;
	}
	else{
		$message = "";
	}
}//end


//display message
function hienthithongbao(){
	if(isset($_SESSION['message'])){
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}//end


// display error messsage
function hienthiloi($error_message){
 	$error_message = <<<DELIMITER
 	<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	<strong>Warning!</strong> $error_message
	</div>
DELIMITER;
	return $error_message;
}//end

// email exist
function email_tontai($email){
	$sql = "SELECT id from nguoihienmau where email = '$email' ";
	$result = query($sql);
	if(row_count($result) == 1){
		return true;
	}
	else{
		return false;
	}
}//end

//username exist
function hovaten_tontai($hovaten){
	$sql = "SELECT id from nguoihienmau where hovaten = '$hovaten' ";
	$result = query($sql);
	if(row_count($result) == 1){
		return true;
	}
	else{
		return false;
	}
}//end

//validation//


function kiemtradangkyhienmau()
{

	$errors = [];


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$hovaten			= clean($_POST['hovaten']);
		$SDT				= clean($_POST['SDT']);
		$email				= clean($_POST['email']);
		$facebook			= clean($_POST['facebook']);
		$gioitinh			= clean($_POST['gioitinh']);
		$tuoi				= clean($_POST['tuoi']);
		$nhommau			= clean($_POST['nhommau']);
		$diachi				= clean($_POST['diachi']);

	if(email_tontai($email)){
		$errors[] = "Email đã tồn tại";
	}

	if(hovaten_tontai($hovaten)){
		$errors[] = "Họ tên đã được đăng ký";
	}

	if(!empty($errors)){
		foreach ($errors as $error){
			echo hienthiloi($error);
		}
	}
	else
	{
		if(dangkyhienmau($hovaten, $SDT, $email, $facebook, $gioitinh, $tuoi, $nhommau, $diachi))
		{
		datthongbao("<p class='bg-success text-center'>Bạn đã trở thành thành viên/người hiến máu.</p>");
		redirect("dangkythanhcong.php");
		}
	}

	}
}//end

// register

function dangkyhienmau($hovaten, $SDT, $email, $facebook, $gioitinh, $tuoi, $nhommau, $diachi)
{

		$hovaten			= clean($_POST['hovaten']);
		$SDT				= clean($_POST['SDT']);
		$email				= clean($_POST['email']);
		$facebook			= clean($_POST['facebook']);
		$gioitinh			= clean($_POST['gioitinh']);
		$tuoi				= clean($_POST['tuoi']);
		$nhommau			= clean($_POST['nhommau']);
		$diachi				= clean($_POST['diachi']);

	if(email_tontai($email))
	{
		return false;
	}
	else if (hovaten_tontai($hovaten)){
		return false;
	} else {

		$sql = "INSERT INTO nguoihienmau (hovaten, SDT, email, facebook, gioitinh, tuoi, nhommau, diachi)";
		$sql.= " VALUES('$hovaten','$SDT','$email','$facebook','$gioitinh','$tuoi','$nhommau','$diachi')";
		$result = query($sql);
		confirm($result);
		return true;
	}




}//end






 ?>

