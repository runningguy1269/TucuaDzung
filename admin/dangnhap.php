<?php 
	

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free/">
	<script src="vendor/bootstrap.min.js"></script>
	<script src="vendor/jquery-3.3.1.min.js"></script>
</head>
<style>
	body{
		background-image: url(Image/anhnen.jpg);
	}
	.all{
		border: 1px solid black;
		padding-left: 150px;
		margin-top: 150px;
		padding-top: 20px;
		padding-bottom: 20px;
		width: 40%;
		font-family: monospace;
		border-radius: 8px;
		background-color: #fff;
		opacity: 0.85;
		
	}
	.a{
		border: 1px solid black;
		text-align: center;
		
	}
</style>
<body>
	<div class="container">    
        <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Hệ thống quản trị ngân hàng máu </div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#"></a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="admin_login.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="username" type="text" class="form-control" name="username" placeholder="username ">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                <div style="margin-top:10px" class="form-group">
                                 <div class="col-sm-12 controls">
                                      <button id="btn-login" type="submit" class="btn btn-success" name="btnLogin" style="width: 130px">Login  </button>
                                     
                                      
                                    </div>
                                </div>
                    </form>     



                        </div>                     
                    </div>  
        </div>
         
    </div>
</body>
</html>
