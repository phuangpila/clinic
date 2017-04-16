<?php
error_reporting(0);
include('include/connect.php');
include('include/function.php');
if($_GET['in']=='1'){

$pass_word=hash('sha1','1234');
$status='2';
  $data = array(
"name"=>$_POST["name"],
"num_card"=>$_POST["num_card"],
"username"=>$_POST["username"],
"address"=>$_POST["address"],
"age"=>$_POST["age"],
"sex"=>$_POST["sex"],
"tel"=>$_POST["tel"],
"pass_word"=>$pass_word,
"status"=>$status,
);
insert("user",$data);
header("refresh:0.5; admin_index.php?menu=emp" );
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
<form name="form1" action="admin_action_emp.php?in=1" method="POST">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabelin">เพิ่มข้อมูลพนักงาน</h4>
  </div>
  <div class="modal-body">
    <table width="100%" border="0" align="center">
      <tr>
        <td align="right" width="40%">ชื่อ-นามสกุล :</td>
        <td width="60%"><input type="text" name="name" id="name" class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">เลขที่บัตรประจำตัวประชาชน :</td>
        <td><input type="text" name="num_card" id="num_card" class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">Username :</td>
        <td><input type="text" name="username" id="username" class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">ที่อยู่ :</td>
        <td><textarea name="address" class="form-control"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td align="right">เบอร์โทร :</td>
        <td><input type="text" name="tel" id="tel" class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">อายุ :</td>
        <td><input type="text" name="age" id="age" class="form-control" style="width:100px"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
       <tr>
        <td align="right">เพศ : </td>
        <td>
        <input type="radio" name="sex" value="F" checked> หญิง
        <input type="radio" name="sex" value="M"> ชาย</td>
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