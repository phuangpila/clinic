<?php
include('include/function.php');
?>
<div class="panel panel-success" >
  <div class="panel-heading" >ตารางข้อมูลพนักงาน</div>
  <div class="panel-body"> <a href="#" onclick="popup('../clinic/admin_action_emp.php','mywindow','800','400');" class="btn btn-success  btn-sm" >เพิ่มข้อมูล</a>
   <br>
  <br>
  <table class="table-bordered table-striped table-condensed" width="100%">
    <thead>
      <tr>
        <th>ลำดับที่</th>
        <th>ชื่อ-นามสกุล</th>
        <th>เลขที่บัตรประจำตัวประชาชน</th>
        <th>ที่อยู่</th>
        <th>เบอร์โทร</th>
        <th>อายุ</th>
        <th>เพศ</th>
        <th>อาการป่วย</th>
        <th>แพ้ยา</th>
        <th>สถานการณ์ใช้งาน</th>
        <th width="10%">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $i++; ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a href="" onclick="popup('../clinic/admin_action_emp.php','mywindow','800','400');" class="btn btn-warning btn-xs" ><i class="pe-7s-note"></i></a>

          <a href="" onclick="popup('../clinic/admin_action_emp.php','mywindow','800','400');" class="btn btn-danger btn-xs" ><i class="pe-7s-trash"></i></a></td>
      </tr>
    </tbody>
  </table>