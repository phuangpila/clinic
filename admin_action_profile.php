<?php 
include('include/function.php');
include('include/connect.php');
session_start();
$sql=mysql_query("SELECT * FROM user WHERE id='".$_SESSION["id"]."' ");
$res=mysql_fetch_array($sql);
 ?>
 <style type="text/css">
.modal-backdrop {
  display: none;
}
</style>
<?php
if($_GET['up']=='1'){
?>
 <form name="form1" action="admin_action_emp.php?in=1" method="POST">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel" align="left">แก้ไขข้อมูลส่วนตัว</h4>
  </div>
  <div class="modal-body">
   <table align="center" border="0">
 				<thead>
 					<tr>
 						<td style="text-align:right;">ชื่อ-นามสกุล : </td> 
 						<td><?php echo $res['name']; ?></td>

 					</tr>
 					<tr>
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
					<tr>
						<td style="text-align:right;">เลขบัตรปะจำตัวประชาชน : </td>
 						<td><?php echo $res['num_card']; ?></td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
					<tr>
 						<td style="text-align:right;">Username :  </td>
 						<td><?php echo $res['username']; ?></td>
 						
 					</tr>
 					<tr>
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
					<tr>
 						<td style="text-align:right;">ที่อยู่ : </td>
 						<td><?php echo $res['address']; ?></td>
 						
 					</tr>
 					<tr>
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
 					<tr>
 						<td style="text-align:right;">เบอร์โทร : </td>
 						<td><?php echo $res['tel']; ?></td>
 						
 					</tr>
 					<tr>
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
					<tr>
 						<td style="text-align:right;">เพศ : </td>
 						<td><?php echo $res['sex']; ?></td>
 						
 					</tr>
 					<tr>
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
 					<tr>
 						<td style="text-align:right;">อายุ : </td>
 						<td><?php echo $res['age']; ?></td>
 					</tr>
 					<tr>
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
 					
 				</thead>
 			</table>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-success">บันทึก</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
  </div>
</form>
<?php
}
?>