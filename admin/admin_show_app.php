<?php
session_start();
include('../include/connect.php');
include('../include/function.php');

?>

<div class="panel panel-success" >
  <div class="panel-heading" >ปฏิทินนัดหมาย</div>
  <div class="panel-body"> 
  <br>
<div id='calendar'></div>
</div>
</div>
<div class="panel panel-success" >
  <div class="panel-heading" >ตารางนัดหมาย</div>

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
