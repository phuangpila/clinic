<?php
include('include/connect.php');
include('include/function.php');

?>
<div class="panel panel-success" >
  <div class="panel-heading" >ตารางข้อมูลการบริการ	</div>

  <div class="panel-body"> <a href="emp_action_service.php?insert=1"   data-toggle="modal"  data-target="#myModalin" class="btn btn-success  btn-sm" >เพิ่มข้อมูล</a>
    <div class="modal fade" id="myModalin" tabindex="-1" role="dialog" aria-labelledby="myModalLabelin" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"></div>
      </div>
    </div>
  </div>
  <table class="table-bordered table-striped table-condensed" width="100%">
    <thead>
      <tr>
      	<th style="text-align:center;">ลำดับ</th>
        <th style="text-align:center;">รหัสการรักษา</th>
        <th style="text-align:center;">ลำดับคิว</th>
        <th style="text-align:center;">ชื่อผู้เข้ารักษา</th>
        <th style="text-align:center;">การรักษา</th>
        <th style="text-align:center;">การแพ้ยา</th>
        <th style="text-align:center;">วันที่มารักษา</th>
        <th style="text-align:center;">วันที่นัด</th>
        <th style="text-align:center;">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    	$i=1;
    	$query = mysql_query("select * from treatment");
    	while ($res = mysql_fetch_array($query)) {
    			$query_u = mysql_query("select * from user where id = '".$res['id_user']."'");
    			$res_u = mysql_fetch_array($query_u);
     ?>
      <tr>
      		<td><?php echo $i; ?></td>
      		<td><?php echo '00'.$res['id']; ?></td>
      		<td></td>
      		<td><?php echo $res_u['name']; ?></td>
      		<td><?php echo $res['lose_d']; ?></td>
      		<td><?php echo $res['sick']; ?></td>
      		<td><?php echo Date_Mouth_Shot($res['date_appoint']); ?></td>
      		<td></td>
	        <td align="center">
	        	<a href="emp_action_service.php?rank=1&idrank=<?php echo $res['id']; ?>" class="btn btn-primary btn-xs" >จัดคิว</a>

	        	<a href="emp_action_type_treatment.php?up=1&idup=<?php echo $res['id']; ?>"   data-toggle="modal"  data-target="#myModalin" class="btn btn-warning btn-xs" >แก้ไข</a>

				<a href="emp_action_type_treatment.php?up=1&idup=<?php echo $res['id']; ?>"   data-toggle="modal"  data-target="#myModalin" class="btn btn-success btn-xs" >ค่าใช้จ่าย</a>

				<a href="emp_action_type_treatment.php?up=1&idup=<?php echo $res['id']; ?>"   data-toggle="modal"  data-target="#myModalin" class="btn btn-danger btn-xs" >นัดหมาย</a>       
	        </td>	       
      </tr>
      <?php $i++;} ?>
    </tbody>
  </table>
  </div>