<?php
session_start();
include('include/connect.php');
include('include/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fullcalendar 1</title>


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
    <link rel="stylesheet" href="js/fullcalendar-2.1.1/fullcalendar.min.css">
    <style type="text/css">
    html,body{
        maring:0;padding:0;
        font-family:tahoma, "Microsoft Sans Serif", sans-serif, Verdana;   
        font-size:12px;
    }
	#calendar{
		max-width: 700px;
		margin: 0 auto;
        font-size:13px;
	}        
    </style>
</head>
<body>

<br><br>
<div style="margin:auto;width:800px;">
 <div id='calendar'></div>
 </div>
  <div class="panel panel-success" >
  <div class="panel-heading" >นัดหมาย</div>

  <div class="panel-body"> 
  <table border="0" align="center">
  <tr>
  <td>
  <input type="date" name="search" class="form-control">
  </td>
  <td>&nbsp;</td>
  <td><input type="submit" name="ok" class="btn btn-primary" value="ค้นหา"></td>
  </tr>

  </table>
  </div>
  <table class="table-bordered table-striped table-condensed" width="100%">
    <thead>
      <tr>
        <th width="10%" style="text-align:center;">ลำดับที่</th>
        <th width="20%" style="text-align:center;">ชื่อ-นามสกุล ผู้นัด</th>
        <th width="15%" style="text-align:center;">วันเวลาที่นัด</th>
        <th width="35%" style="text-align:center;">หมายเหตุ</th>
        <th width="20%" style="text-align:center;">Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
      $i=1;
$sql=mysql_query("SELECT * FROM appoint WHERE id_doctor='".$_SESSION["id"]."' ");
while($res=mysql_fetch_array($sql)){
      ?>
      <tr>
        <td style="text-align:center;"><?php echo $i; ?></td>
        <td><?php echo $res['id_user']; ?></td>
        <td><?php echo $res['date_app']." - ".$res['time_app']; ?></td>
        <td><?php echo $res['note']; ?></td>
        <td style="text-align:center;">
        <?php
        if($res['status']=='0'){
        ?>
        <a class="btn btn-success btn-sm" onclick="confirmAppoint_y('admin_action_app.php?ok=1&app_id=<?php echo $res['id']; ?>')">ยืนยันการนัด</a> <a class="btn btn-danger btn-sm" onclick="confirmAppoint_n('admin_action_app.php?no=1&app_id=<?php echo $res['id']; ?>')">ยกเลิกการนัด</a>
        <?php }else{ 
          if($res['status']=='1'){
            echo "<p class='text-success'>ยืนยันการนัดแล้ว</p>";
          }else if($res['status']=='2'){
            echo "<p class='text-danger'>ยกเลิกการนัดแล้ว</p>";
          }
        }
          ?>

        </td>

      </tr>
          <?php
          $i++;
        }
          ?>
      
    </tbody>
  </table>
    
<script src="js/fullcalendar-2.1.1/jquery.min.js"></script>    
<script type="text/javascript" src="js/fullcalendar-2.1.1/lib/moment.min.js"></script>
<script type="text/javascript" src="js/fullcalendar-2.1.1/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/fullcalendar-2.1.1/lang/th.js"></script>
    


 <!--  <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script> -->
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script> 

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<!-- <script src="assets/js/chartist.min.js"></script> -->

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>     
</body>
</html>


