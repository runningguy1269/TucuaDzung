<?php 
  include("includes/header.php");
  include("includes/body.php");
 ?>
<?php
   $conn= mysqli_connect('localhost','root','','nganhangmau');
   if (!$conn){
      echo("Không Thể Kết Nối Dữ Liệu");
   }

   mysqli_set_charset($conn, 'UTF8');

  
?>
<html>
<title>tìm kiếm</title>
<head>
</head>
<style>
    body{
        background-image: url("images/mau.png");
        background-size: 50px 50px;
    }
    #list{
         border-collapse: collapse;
      }
      #list th{
         background-color: #ebebeb;
      }
      #tim{
        padding: 50px 350px 100px  0;
      }
</style>

<body>

<form class="container">  
      <div class="row">
         <div class="col-md-12">
           

            <div id="tim">
                <input type="text" class="form-control pull-right" style="width:50%;" id="search" placeholder="Tìm kiếm">
            </div>

            <div class="tabbable" id="tabs-940333">
              <form name="fchuyen" onsubmit="return fcheck()">
              

                <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                    <table class="table table-striped" id="list" boeder="1" cellpadding="5" >
                       <thead>
                          <tr>
                            <th>ID</th>
                            <th>họ và tên</th>
                            <th>SDT</th>
                            <th>email</th>
                            <th>facebook</th>
                            <th>giới tính</th>
                            <th>tuổi</th>
                            <th>nhóm máu</th>
                            <th>địa chỉ</th>
                         </tr>
                       </thead>
                       <?php
                          $sql="SELECT * from nguoihienmau";

                          $result=mysqli_query($conn,$sql);

                          if(!$result){
                              die("Lỗi truy vấn");
                          }
                          $i=1;
                          while ($row=mysqli_fetch_assoc($result)) {
                             
                       ?>
                       <tbody>
                         <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['hoten']; ?></td>
                            <td><?php echo $row['SDT']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['facebook']; ?></td>
                            <td><?php echo $row['gioitinh']; ?></td>
                            <td><?php echo $row['tuoi']; ?></td>
                            <td><?php echo $row['nhommau']; ?></td>
                            <td><?php echo $row['diachi']; ?></td>
                         </tr>
                        </tbody>
                       <?php $i++; }?>
                    </table>
                  </div>

                </div>

                <?php
                    
                ?>
              </form>
            </div>
         </div>
      </div>
   </form>

   <script>
   $(document).ready(function(){
    $("#search").keyup(function(){
     _this = this;
     // Show only matching TR, hide rest of them
    $.each($("#list tbody tr"), function() {
      if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
        $(this).hide();
      else
        $(this).show();
      });
    });
  });
</script>

</body>

</html>

<?php  include("includes/footer.php"); ?>

<?php 
   mysqli_free_result($result);
   mysqli_close($conn);
?>