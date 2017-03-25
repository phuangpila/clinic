<?php
include('include/connect.php');
include('include/function.php');
?>
<div class="panel panel-success" >
  <div class="panel-heading" >ตารางข้อมูลพนักงาน</div>

  <div class="panel-body"> <a href="admin_action_emp.php?insert=1"   data-toggle="modal"  data-target="#myModalin" class="btn btn-success  btn-sm" >เพิ่มข้อมูล</a>
    <div class="modal fade" id="myModalin" tabindex="-1" role="dialog" aria-labelledby="myModalLabelin" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"></div>
      </div>
    </div>
  </div>
  <table class="table-bordered table-striped table-condensed" width="100%">
    <thead>
      <tr>
        <th style="text-align:center;">ลำดับที่</th>
        <th style="text-align:center;">ชื่อ-นามสกุล</th>
        <th style="text-align:center;">Username</th>
        <th style="text-align:center;">เลขที่บัตรประจำตัวประชาชน</th>
        <th style="text-align:center;">ที่อยู่</th>
        <th style="text-align:center;">เบอร์โทร</th>
        <th style="text-align:center;">อายุ (ปี)</th>
        <th style="text-align:center;">เพศ</th>
        <th style="text-align:center;">วันที่สร้าง</th>
        <th width="10%">Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
      $i=1;
$sql=mysql_query("SELECT * FROM user WHERE status='2' ");
while($res=mysql_fetch_array($sql)){
      ?>
      <tr>
        <td style="text-align:center;"><?php echo $i; ?></td>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['username']; ?></td>
        <td><?php echo $res['num_card']; ?></td>
        <td><?php echo $res['address']; ?></td>
        <td style="text-align:center;"><?php echo $res['tel']; ?></td>
        <td style="text-align:center;"><?php echo $res['age']; ?></td>
        <td style="text-align:center;"><?php if($res['sex']=="F"){echo "หญิง";}else{ echo "ชาย"; } ?></td>
        <td style="text-align:center;"><?php echo Date_Mouth_Shot_Time($res['create']); ?></td>
        <td><a href="" onclick="popup('../clinic/admin_action_emp.php','mywindow','800','400');" class="btn btn-warning btn-xs" ><i class="pe-7s-note"></i></a>

          <a href="" onclick="popup('../clinic/admin_action_emp.php','mywindow','800','400');" class="btn btn-danger btn-xs" ><i class="pe-7s-trash"></i></a></td>
      </tr>
          <?php
          $i++;
        }
          ?>
      
    </tbody>
  </table>