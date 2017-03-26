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
        <th style="text-align:center;">วันที่นัด/เวลา </th>
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
         <?php if ($res['date_treat'] == '0000-00-00 00:00:00') { ?>
           <td><?php echo '-' ?></td>
           <?php }else if ($res['date_treat'] != '0000-00-00 00:00:00') { ?>
                   <td><?php echo $res['rank']; ?></td>
         <?php } ?> 
      		<td><?php echo $res_u['name']; ?></td>
      		<td><?php echo $res['lose_d']; ?></td>
      		<td><?php echo $res['sick']; ?></td>
          <?php if ($res['date_appoint'] == '0000-00-00') { ?>
          <td><?php echo '-'; ?></td>
          <?php }elseif ($res['date_appoint'] != '0000-00-00') {?>
      		<td><?php echo Date_Mouth_Shot($res['date_appoint']); ?></td>
          <?php } ?>
           <?php if ($res['date_app'] == '0000-00-00 00:00:00') { ?>
          <td><?php echo '-'; ?></td>
          <?php }elseif ($res['date_app'] != '0000-00-00 00:00:00') {
            $day = substr($res['date_app'],0,10);
            $time = substr($res['date_app'],10,9);
            ?>
          <td style="color: red;"><?php echo Date_Mouth_Shot($day).'('.$time.')'; ?></td>
          <?php } ?>
	        <td align="center">
            <?php if ($res['rank'] == '0') {?>
	        	<a href="emp_action_service.php?ranks=1&idrank=<?php echo $res['id']; ?>" class="btn btn-primary btn-xs" >จัดคิว</a>
            <?php }elseif ($res['rank'] != '0') { ?>
            <a href="#" class="btn btn-default btn-xs" disabled>จัดคิว</a>
            <?php } ?>

           
	        	<a href="emp_action_service.php?up=1&idup=<?php echo $res['id']; ?>"   data-toggle="modal"  data-target="#myModalin" class="btn btn-warning btn-xs" >แก้ไข</a>

           <?php if ($res['charge_id'] == '0') { ?>
				    <a href="emp_action_service_row.php?row=1&idup=<?php echo $res['id']; ?>"   data-toggle="modal"  data-target="#myModalin" class="btn btn-success btn-xs" >ค่าใช้จ่าย</a>
            <?php }elseif ($res['charge_id'] != '0') { ?>
            <a href="#"   data-toggle="modal"  data-target="#myModalin" class="btn btn-default btn-xs" disabled >ค่าใช้จ่าย</a>
            <?php } ?>

             <?php if ($res['status_sick'] == '0') { ?>
				<a href="emp_action_service_appoint.php?appoint=1&idappoint=<?php echo $res['id']; ?>"   data-toggle="modal"  data-target="#myModalin" class="btn btn-danger btn-xs" >นัดหมาย</a> 
         <?php }elseif ($res['status_sick '] != '0') { ?>
          <a href="#"   data-toggle="modal"  data-target="#myModalin" class="btn btn-default btn-xs" disabled >นัดหมาย</a>
         <?php } ?>      
	        </td>	       
      </tr>
      <?php $i++;} ?>
    </tbody>
  </table>
  </div>