<?php 
include('include/function.php');
include('include/connect.php');
session_start();
$sql=mysql_query("SELECT * FROM user WHERE id='".$_SESSION["id"]."' ");
$res=mysql_fetch_array($sql);
 ?>
 	<div class="panel panel-success">
 		<div class="panel-heading">
 			<h3 class="panel-title">ข้อมูลส่วนตัว</h3>
 		</div>
 		<div class="panel-body">
 			<table border="1">
 				<tr>
 					<td>pic</td>
 				</tr>
 			</table>
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
 					<tr>
 						<td style="text-align:right;">
 							
								<div class="panel-body"> <a href="admin_action_profile.php?up=1&idup=<?php echo $res['id']; ?>"   data-toggle="modal" data-target="#myModal" class="btn btn-warning  btn-sm" >แก้ไข</a>
    						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      						<div class="modal-dialog">
        					<div class="modal-content"></div>
      						</div>
   							 </div>
  							</div>
 						</td>
 						<td></td>
 					</tr>
 				</thead>
 			</table>
 		</div>
 	</div>