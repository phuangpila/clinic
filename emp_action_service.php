<?php
include('include/connect.php');
include('include/function.php');
error_reporting(0);
if ($_POST['in'] == '0') {
   $data = array(
  "id_user"=>$_POST["id_user"],
  "type_id"=>$_POST["type_id"],
  "lose_d"=>$_POST["lose_d"],
  "sick"=>$_POST["sick"],
  "date_appoint"=>$_POST["date_appoint"],
);
insert("treatment",$data);
 header('refresh : 0.1; emp_index.php?menu=ser');
}elseif ($_GET['rank'] =='1') {
  $query_rank = mysql_query("select max(rank) as total from treatment");
  $res_rank = mysql_fetch_array($query_rank);

  if ($res_rank['date_']) {
    # code...
  }
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
<form name="form1" action="emp_action_service.php" method="POST">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabelin">เพิ่มข้อมูลการบริการ  </h4>
  </div>
  <div class="modal-body">
    <table width="100%" border="0" align="center">
      <tr>
        <td align="right">ชื่อผู้ป่วย :</td>
        <td>
         <select name="id_user" id="id_user" class="form-control">
            <option value="0">เลือก</option>
            <?php
             $query_u = mysql_query("select * from user");
              while ($res_u = mysql_fetch_array($query_u)) {
             ?>
             <option value="<?php echo $res_u['id']; ?>"><?php echo $res_u['name']; ?></option>
             <?php } ?>
          </select>
          <input type="hidden" name="in" id="" value="0">
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
     <tr>
        <td align="right">ประเภทการรักษา :</td>
        <td>
          <select name="type_id" id="type_id" class="form-control">
            <option value="0">เลือก</option>
            <?php
             $query_tr = mysql_query("select * from type_treatment");
              while ($res_tr = mysql_fetch_array($query_tr)) {
             ?>
             <option value="<?php echo $res_tr['id']; ?>"><?php echo $res_tr['name']; ?></option>
             <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">การรักษา :</td>
        <td><textarea name="lose_d" id="lose_d" cols="30" rows="10" class="form-control"></textarea></td>
      </tr>
       <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">การแพ้ยา :</td>
        <td><textarea name="sick" id="sick" cols="30" rows="10" class="form-control"></textarea></td>
      </tr>
        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">วันที่มารักษา :</td>
        <td><input type="date" name="date_appoint" id="date_appoint" class="form-control"></td>
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