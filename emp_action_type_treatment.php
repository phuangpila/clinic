<?php
include('include/connect.php');
include('include/function.php');
error_reporting(0);
if ($_POST['in'] == '1') {
  $data = array(
  "name"=>$_POST["txt_name"],
);
insert("type_treatment",$data);
 header('refresh : 0.1; emp_index.php?menu=type_tr');

}else if($_POST['update'] > 0){
 $data = array(
   "name"=>$_POST["txt_name"],
);
update("type_treatment",$data,"id = '".$_POST["update"]."' ");
header('refresh : 0.1; emp_index.php?menu=type_tr');  
}
else if($_GET['del']){
  delete('type_treatment','id="'.$_GET['del'].'" ');
  echo "<script type='text/javascript'>alert('ลบข้อมูลเรียบร้อยแล้ว');window.location.href ='emp_index.php?menu=type_tr';</script>";
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
<form name="form1" action="emp_action_type_treatment.php" method="POST">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabelin">เพิ่มข้อมูลประเภทการบริการ  </h4>
  </div>
  <div class="modal-body">
    <table width="100%" border="0" align="center">

      <tr>
        <td align="right">ประเภทการบริการ :</td>
        <td>
          <input type="text" name="txt_name" id="txt_name" class="form-control" >
          <input type="hidden" name="in" id="in" value="1">
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
<?php
if($_GET['up']=='1'){
?>
<form name="form1" action="emp_action_type_treatment.php" method="POST">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabelin">เพิ่มข้อมูลประเภทการบริการ  </h4>
  </div>
  <div class="modal-body">
    <table width="100%" border="0" align="center">
      <?php 
      $query = mysql_query("select * from type_treatment where id = '".$_GET['idup']."'");
      $res = mysql_fetch_array($query);
      ?>
      <tr>
        <td align="right">แกไขประเภทการบริการ :</td>
        <td>
          <input type="text" name="txt_name" id="txt_name" class="form-control" value="<?php echo $res['name']; ?>">
          <input type="hidden" name="update" id="update" value="<?php echo $_GET['idup']; ?>">
          
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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