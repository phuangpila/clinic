<?php
include("include/connect.php");
include("include/function.php");
if($_GET['in']=='1'){

}
?>
<style type="text/css">
.modal-backdrop {
	display: none;
}
</style>
<?php
if($_GET['reg']=='1'){
?>
<form name="form1" action="reg.php?in=1" method="POST">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">สมัครสมาชิก</h4>
  </div>
  <div class="modal-body">
         
  </div>
  <div class="modal-footer">
  <button type="submit" class="btn btn-success">บันทึก</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
  </div>
</form>
<?php
}
?>