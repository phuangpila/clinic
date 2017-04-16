<?php
session_start();
error_reporting(0);
include('include/connect.php');
include('include/function.php');
if($_GET['in']=='1'){

$status='0';
  $data = array(
"id_doctor"=>$_POST["id_doctor"],
"id_user"=>$_SESSION["id"],
"note"=>$_POST["note"],
"status"=>$status,
"date_app"=>$_POST["date_app"],
"time_app"=>$_POST["time_app"],
);
insert("appoint",$data);
header("refresh:0.5; user_index.php?menu=app" );
}
?>

<style type="text/css">
.modal-backdrop {
  display: none;
}
</style>
<?php
if($_GET['insert']=='1'){
?>
<form name="form1" action="user_action_app.php?in=1" method="POST">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabelin">เพิ่มการนัด</h4>
  </div>
  <div class="modal-body">
    <table width="70%" border="0" align="center">
      <tr>
        <td align="right" width="30%">ชื่อ-นามสกุล หมอ :</td>
        <td width="40%">
        <select name="id_doctor" class="form-control">
        <option value="">--- เลือก ---</option>
        <?php
          $sql=mysql_query("SELECT * FROM user WHERE status='2' ");
          while ($res=mysql_fetch_array($sql)) {
            ?>
            <option value="<?php echo $res['id'] ?>"><?php echo $res['name'] ?></option>
            <?php
          }
        ?>
        </select>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">วันที่นัด :</td>
        <td><input type="date" name="date_app" id="date_app" class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">เวลาที่นัด :</td>
        <td><input type="time" name="time_app" id="time_app" class="form-control" style="width:100px;"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">หมายเหตุ :</td>
        <td><textarea name="note" class="form-control"></textarea></td>
      </tr>

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