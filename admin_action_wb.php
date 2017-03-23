<?php
error_reporting(0);
include("include/connect.php");
if($_GET['insert']=='1'){
	$topic = trim($_POST['topic']);
$detail = trim($_POST['detail']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$created = date('Y-m-d H:i:s');

$sql = "INSERT INTO questions (topic,detail,name,email,created) VALUES ";
$sql .= "('{$topic}','{$detail}','{$name}','{$email}','{$created}')";
$query = mysql_query($sql);

 header("refresh : 0.1; admin_index.php?menu=wb");
}
?>
<style type="text/css">
.modal-backdrop {
	display: none;
}
</style>
<form id="form1" name="form1" method="post" action="admin_action_wb.php?insert=1">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">ตั้งกระทู้</h4>
  </div>
  <div class="modal-body">
    <table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000">
      <tr>
        <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
            <tr>
              <td colspan="3" bgcolor="#000000"><b style="color: #FFFFFF;">ตั้งกระทู้</b></td>
            </tr>
            <tr>
              <td width="30%" style="text-align: right;"><strong>ชื่อหัวข้อกระทู้</strong></td>
              <td width="70%"><input name="topic" type="text" id="topic" size="50" /></td>
            </tr>
            <tr>
              <td valign="top" style="text-align: right;"><strong>รายละเอียด</strong></td>
              <td><textarea name="detail" cols="50" rows="5" id="detail"></textarea></td>
            </tr>
            <tr>
              <td style="text-align: right;"><strong>ชื่อผู้ตั้งกระทู้</strong></td>
              <td><input name="name" type="text" id="name" size="50" /></td>
            </tr>
          </table></td>
      </tr>
    </table>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-success">บันทึก</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
  </div>
</form>
