<?php 
  include("includes/header.php");
  include("includes/body.php");
 ?>
 <style>
 	body{
 		background-image: url("images/mau.png");
 		background-size: 50px 50px;
 	}
  .navbar-inverse .navbar-toggle{
    border-color: #922B21;
  }
 	.group{
 		padding-top: 50px;
 		padding-bottom: 50px;
 	}
 	#dichuot:hover{
 		box-shadow: 5px 5px 5px 5px #F1948A;
 	}
 	@-webkit-keyframes glowing {
  0% { background-color: #E74C3C; -webkit-box-shadow: 0 0 3px #E74C3C; }
  50% { background-color: #F5B7B1; -webkit-box-shadow: 0 0 10px #F5B7B1; }
  100% { background-color: #E74C3C; -webkit-box-shadow: 0 0 3px #E74C3C; }
}
 
@-moz-keyframes glowing {
  0% { background-color: #E74C3C; -moz-box-shadow: 0 0 3px ##E74C3C; }
  50% { background-color: #F5B7B1; -moz-box-shadow: 0 0 10px #F5B7B1; }
  100% { background-color: #E74C3C; -moz-box-shadow: 0 0 3px #E74C3C; }
}
 
@-o-keyframes glowing {
  0% { background-color: #E74C3C; box-shadow: 0 0 3px #E74C3C; }
  50% { background-color: #F5B7B1; box-shadow: 0 0 10px #F5B7B1; }
  100% { background-color: #E74C3C; box-shadow: 0 0 3px #E74C3C; }
}
 
@keyframes glowing {
  0% { background-color: #E74C3C; box-shadow: 0 0 3px #E74C3C; }
  50% { background-color: #F5B7B1; box-shadow: 0 0 10px #F5B7B1; }
  100% { background-color: #E74C3C; box-shadow: 0 0 3px #E74C3C; }
}
 
.button {
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

 </style>


  		<div class="jumbotron" style="background-color: rgb(208, 211, 212,0.5);">
  			<font color="#16a085">
  				<marquee direction="left"> <h2> 𝕋𝕣𝕦𝕪ề𝕟 𝕥𝕙ố𝕟𝕘 đạ𝕠 𝕝ý ô𝕟𝕘 𝕔𝕙𝕒 <i class='fas fa-ambulance' style='font-size:24px'></i>  𝕄á𝕦 𝕙ồ𝕟𝕘 𝕞ộ𝕥 𝕘𝕚ọ𝕥 𝕓𝕒𝕠 𝕝𝕒 𝕥ì𝕟𝕙 𝕟𝕘ườ𝕚 <i class='fas fa-ambulance' style='font-size:24px'></i> ℂ𝕙𝕠 𝕥ô𝕚 𝕞ộ𝕥 𝕘𝕚ọ𝕥 𝕞á𝕦 𝕥ươ𝕚 <i class='fas fa-ambulance' style='font-size:24px'></i> Ơ𝕟 𝕒𝕚 𝕩𝕚𝕟 𝕘ử𝕚 𝕟𝕘à𝕟 𝕝ờ𝕚 𝕥𝕣𝕚 â𝕟</h2>
  				</marquee>
  			</font>
  		</div>




 <!--  chia khung lam 2 -->
 <div class="group">
 	    <div class="row">
 		       <div class="col-md-6">
 			         <div id="dichuot" style="background-color: rgb(255,255,255,0.4);width: 99%;height: 400px;border-radius: 10px;">trai</div>
 		       </div>

 		        <div class="col-md-6">
 			           <div id="dichuot" style="background-color: rgb(255,255,255,0.4);width: 99%;height: 400px;border-radius: 10px;">phai</div>
 		       </div>
 	    </div>
 </div>

 <div id="duongdan" style="margin:0 0 0 100px;float: left; width: 20%;">
 	  <div>
 		     <a href="register.php" class="button" style="background-color: red;-webkit-border-radius: 10px;border-radius: 10px;border: none;color: #FFFFFF;cursor: pointer;display: inline-block;font-family: Arial;font-size: 20px;padding: 5px 10px;text-align: center;text-decoration: none;">Đăng kí hiến máu</a>

 	  </div>
 </div>

  
  <div id="timkiem" style="float: right;margin:0 0 20px 0;width: 20%;">
       <a href="timkiem.php" style="background-color: red;-webkit-border-radius: 10px;border-radius: 10px;border: none;color: #FFFFFF;cursor: pointer;display: inline-block;font-family: Arial;font-size: 20px;padding: 5px 10px;text-align: center;text-decoration: none;">Nhóm máu hiện có</a>

	</div>
<?php  include("includes/footer.php"); ?>