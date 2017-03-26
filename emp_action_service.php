<?php
include('include/connect.php');
include('include/function.php');
error_reporting(0);
if ($_POST['in'] == '0') {
   $data = array(
  "id_user"=>$_POST["id_users"],
  "type_id"=>$_POST["type_id"],
  "lose_d"=>$_POST["lose_d"],
  "sick"=>$_POST["sick"],
  "date_appoint"=>$_POST["date_appoint"],
);
insert("treatment",$data);
 header('refresh : 0.1; emp_index.php?menu=ser');
}elseif ($_GET['ranks'] =='1') {
  $query_rank = mysql_query("select max(rank) as total from treatment");
  $res_rank = mysql_fetch_array($query_rank);

  $query_rank2 = mysql_query("select * from treatment where id = '".$_GET['idrank']."'");
  $res_rank2 = mysql_fetch_array($query_rank2);
  $date = date("Y-m-d H:i:s");

  if ($res_rank2['date_treat'] == '0000-00-00 00:00:00') {
      $rank_total = $res_rank['total']+1;
    $update = "update treatment set rank = '".$rank_total."' ,date_treat = '".$date."' where id = '".$_GET['idrank']."'";
    //echo $update;
     mysql_query($update);
     header('refresh : 0.1; emp_index.php?menu=ser');
  }
}else if($_POST['update_ser'] == '1'){
 $data = array(
  "id_user"=>$_POST["id_users"],
  "type_id"=>$_POST["type_id"],
  "lose_d"=>$_POST["lose_d"],
  "sick"=>$_POST["sick"],
  "date_appoint"=>$_POST["date_appoint"],
);
update("treatment",$data,"id = '".$_POST["id_up"]."' ");
header('refresh : 0.1; emp_index.php?menu=ser');  
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
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="creload();">&times;</button>
    <h4 class="modal-title" id="myModalLabelin">เพิ่มข้อมูลการบริการ  </h4>
  </div>
  <div class="modal-body">
    <table width="100%" border="0" align="center">
      <tr>
        <td align="right">ชื่อผู้ป่วย :</td>
        <td>
         <select name="id_users" id="id_users" class="form-control">
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
    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="creload();">ปิด</button>
  </div>
</form>
<?php
} if ($_GET['up'] == '1') {
?>
<form name="form1" action="emp_action_service.php" method="POST">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="creload();">&times;</button>
    <h4 class="modal-title" id="myModalLabelin">แก้ไขข้อมูลการบริการ  </h4>
  </div>
  <div class="modal-body">
    <table width="100%" border="0" align="center">
    <?php 
      $query_edit = mysql_query("select * from treatment where id = '".$_GET['idup']."'");
      $res_edit = mysql_fetch_array($query_edit);
      //echo $res_edit['id_user'];
     ?>
      <tr>
        <td align="right">ชื่อผู้ป่วย :</td>
        <td>
         <select name="id_users" id="id_users" class="form-control">
            <option value="0">เลือก</option>
            <?php
             $query_u = mysql_query("select * from user");
              while ($res_u = mysql_fetch_array($query_u)) {
             ?>
             <option value="<?php echo $res_u['id']; ?>" 
             <?php if ($res_u['id'] == $res_edit['id_user']) {
              echo "selected";
             } ?>><?php echo $res_u['name']; ?></option>
             <?php } ?>
          </select>
        <input type="hidden" name="id_up" id="id_up" value="<?php echo $_GET['idup']?>"> 
           <input type="hidden" name="update_ser" id="update_ser" value="1">
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
             <option value="<?php echo $res_tr['id']; ?>" <?php if ($res_tr['id'] == $res_edit['type_id']) {
               echo "selected";
             } ?>><?php echo $res_tr['name']; ?></option>
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
        <td><textarea name="lose_d" id="lose_d" cols="30" rows="10" class="form-control"><?php echo $res_edit['lose_d']; ?></textarea></td>
      </tr>
       <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">การแพ้ยา :</td>
        <td><textarea name="sick" id="sick" cols="30" rows="10" class="form-control"><?php echo $res_edit['sick']; ?></textarea></td>
      </tr>
        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">วันที่มารักษา :</td>
        <td><input type="date" name="date_appoint" id="date_appoint" class="form-control" value="<?php echo $res_edit['date_appoint']; ?>"></td>
      </tr>
     
    </table>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-success">บันทึก</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="creload();">ปิด</button>
  </div>
</form>
<?php }?>

 
<script>
  function creload(){
    window.location.reload('emp_index.php?menu=ser');
  }

</script>