<?php
error_reporting(0);
include("include/connect.php");
include("include/function.php");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>ซันเวย์คลีนิกทัตกรรม</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
 <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
 <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='assets/css/fonts.css' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<style type="text/css">
  .alert {
    background-color: #936AD4; 
}
</style>
<body>
<div class="container">
<br>
<div class="head">
  <div class="alert alert-info" role="alert">
  ซันเวย์คลีนิกทัตกรรม
</div>
</div>
    <div class="row">
     <div class="col-xs-12 col-md-8">
 <span class="bodyleft">
  <!--   Slide Show -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="Slide/11.jpg" alt="..." >
    </div>
   <div class="item">
      <img src="Slide/12.jpg" alt="..." >
    </div>
    <div class="item">
      <img src="Slide/13.jpg" alt="..." >
    </div>
  
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
   
    <span class="sr-only">Next</span>
  </a>
</div>
  </span>  
</div>
<form method="post" action="chk_login.php">
 <div class="col-xs-6 col-md-4">
   <div class="form-group">
    <h3 align="center"> เข้าสู่ระบบ</h3>
    <div class="col-sm-12">
      <input type="text" class="form-control"  name="user_name" placeholder="ชื่อผู้ใช้งาน">
    </div>
  </div>
  <div class="form-group">
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">

      </div>
    </div>
  </div>
    <div class="col-sm-12">
      <input type="password" class="form-control" name="pass_word"  placeholder="รหัสผ่าน">
    </div>
  </div>
 <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">

      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="panel-body"> <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button> <a href="reg.php?reg=1"  data-toggle="modal"  data-target="#myModal" class="btn btn-success" >สมัครสมาชิก</a>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"></div>
      </div>
    </div>
  </div>
    </div>
  </div>
</form>
 </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
   <table class="table table-striped">
 <tr>
   <th>ข่าวประชาสัมพันธ์</th>
    <th></th>
 </tr>
 <?php
$sql_n=mysql_query("SELECT * FROM news ");
while($res_n=mysql_fetch_array($sql_n)){
 ?>
 <tr>
    <td><?php echo $res_n['name_news']."  [ ".Date_Mouth_Long_Time($res_n['date_news'])." ]"; ?></td>
    <td align="center">
      <div class="panel-body"> <a href="show_news.php?insert=1&id=<?php echo $res_n['news_id']; ?>"   data-toggle="modal"  data-target="#myModalin" class="btn btn-warning  btn-sm" >รายละเอียด</a>
    <div class="modal fade" id="myModalin" tabindex="-1" role="dialog" aria-labelledby="myModalLabelin" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"></div>
      </div>
    </div>
  </div>
    </td>
  </tr>
  <?php
}
  ?>
</table>
  </div>
</div>

</div>
</body>
<footer class="footer">
            <div class="container-fluid">
                <p  align="center">
                    &copy;  <a href="#"><script>document.write(new Date().getFullYear())</script></a>, m web
                </p>
            </div>
        </footer>



    <!--   Core JS Files   -->
  <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Checkbox, Radio & Switch Plugins -->
  <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

  <!--  Charts Plugin -->
  <!-- <script src="assets/js/chartist.min.js"></script> -->

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="assets/js/light-bootstrap-dashboard.js"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){

          demo.initChartist();

          $.notify({
              icon: 'pe-7s-gift',
              message: "Welcome <b>M</b>"

            },{
                type: 'info',
                timer: 4000
            });

      });
  </script>

</html>
