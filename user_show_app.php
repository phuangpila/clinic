<?php
session_start();
include('include/connect.php');
include('include/function.php');
?>
<div class="panel panel-success" >
  <div class="panel-heading" >นัดหมาย</div>

  <div class="panel-body"> <a href="user_action_app.php?insert=1"   data-toggle="modal"  data-target="#myModalin" class="btn btn-success  btn-sm" >เพิ่มการนัด</a>
    <div class="modal fade" id="myModalin" tabindex="-1" role="dialog" aria-labelledby="myModalLabelin" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"></div>
      </div>
    </div>
  </div>
  <table class="table-bordered table-striped table-condensed" width="100%">
    <thead>
      <tr>
        <th width="5%" style="text-align:center;">ลำดับที่</th>
        <th width="20%" style="text-align:center;">ชื่อ-นามสกุล หมอ</th>
        <th width="15%" style="text-align:center;">วันเวลาที่นัด</th>
        <th width="35%" style="text-align:center;">หมายเหตุ</th>
        <th width="15%" style="text-align:center;">ผลการนัด</th>
        <th width="10%" style="text-align:center;">Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
      $i=1;
$sql=mysql_query("SELECT * FROM appoint WHERE id_user='".$_SESSION["id"]."' ORDER BY date_app DESC");
while($res=mysql_fetch_array($sql)){
      ?>
      <tr>
        <td style="text-align:center;"><?php echo $i; ?></td>
        <td>
        <?php
        $sql_u=mysql_query("SELECT * FROM user WHERE id='".$res['id_doctor']."' ");
         $res_u=mysql_fetch_array($sql_u); 
         echo $res_u['name'];
        ?></td>
        <td style="text-align:center;"><?php echo $res['date_app']." - ".$res['time_app']; ?></td>
        <td><?php echo $res['note']; ?></td>
        <td style="text-align:center;">
        <?php 
          if($res['status']=='0'){
            echo "<p class='text-warning'>รอการตอบรับ</p>";
          }else if($res['status']=='1'){
            echo "<p class='text-success'>นัดสำเร็จ</p>";
          }else if($res['status']=='2'){
            echo "<p class='text-danger'>นัดไม่สำเร็จ</p>";
          }
        ?></td>
        <td style="text-align:center;">
        <a href="" onclick="popup('../clinic/admin_action_emp.php','mywindow','800','400');" class="btn btn-warning btn-xs" ><i class="pe-7s-note"></i></a>

          <a href="" onclick="popup('../clinic/admin_action_emp.php','mywindow','800','400');" class="btn btn-danger btn-xs" ><i class="pe-7s-trash"></i></a>
        </td>

      </tr>
          <?php
          $i++;
        }
          ?>
      
    </tbody>
  </table>