  <?php 

include('include/connect.php');
include('include/function.php');
error_reporting(0);

  if ($_POST['app'] == '1') {
    $sql_in = "INSERT INTO treatment (type_id,id_user,lose_d,date_app,sick,status_sick) VALUES('".$_POST['type_id']."','".$_POST['user']."','".$_POST['lose_d']."','".$_POST['date_app']."','".$_POST['sick']."','1')";
    //echo $sql_in;
    //echo $_POST['date_app'];
    mysql_query($sql_in);
    header('refresh : 0.1; emp_index.php?menu=ser');  
  }
   ?>

  
<style type="text/css">
.modal-backdrop {
  display: none;
}
</style> 
<?php if ($_GET['appoint'] == '1') {?>
  <form name="form1" action="emp_action_service_appoint.php" method="POST">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="creload();">&times;</button>
    <h4 class="modal-title" id="myModalLabelin">นัดหมายคนไข้  </h4>
  </div>
  <div class="modal-body">
    <table width="100%" border="0" align="center">
    <?php 
      $query_edit = mysql_query("select * from treatment where id = '".$_GET['idappoint']."'");
      $res_edit = mysql_fetch_array($query_edit);
      //echo $res_edit['id_user'];
     ?>
     <tr>
        <td align="right">ประเภทการรักษา :</td>
        <td>
          <input type="hidden" name="app" id="app" value="1">
          <input type="hidden" name="appoint" id="appoint" value="<?php echo $_GET['idappoint']; ?>">
          <input type="hidden" name="user" id="user" value="<?php echo $res_edit['id_user']; ?>">
          <input type="hidden" name="sick" id="sick" value="<?php echo $res_edit['sick']; ?>">
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
        <td align="right">วันที่มารักษา :</td>
        <td><input type="datetime-local" name="date_app" id="date_app" class="form-control"></td>
      </tr>
     
    </table>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-success">บันทึก</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="creload();">ปิด</button>
  </div>
</form>
<?php } ?>
  <script>
  function creload(){
    window.location.reload('emp_index.php?menu=ser');
  }

</script>