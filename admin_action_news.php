<?php
session_start();
error_reporting(0);
include("include/connect.php");
include("include/function.php");
if($_GET['in']=='1'){
      $image=$_FILES['imagee']['tmp_name'];
      $image2='n_'.date("Ymd")."_".rand(1,99999).".jpg";
      $dest="Up_img/".$image2;  
    
$data = array(
"name_news" => $_POST['name_news'],
"detail_news" => $_POST['detail_news'],
"picture" => $image2,
"id_user" => $_SESSION["id"],
);
insert("news",$data);
move_uploaded_file($image,$dest);
 header("refresh : 0.1; admin_index.php?menu=news");
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
<form name="form1" method="post" action="admin_action_news.php?in=1" enctype="multipart/form-data">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">เพิ่มข่าวประชาสัมพันธ์</h4>
  </div>
  <div class="modal-body">
  <table  width="100%" border="0" align="center">
    <tr>
      <td>หัวข้อข่าวประชาสัมพันธ์ :</td>
      <td><input name="name_news" type="text"  size="30" value="" required class="form-control"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    <tr>
      <td>รายละเอียดข่าวประชาสัมพันธ์ :</td>
      <td  ><textarea name="detail_news" type="text" row="5" required class="form-control"></textarea></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    <tr>
      <td>รูปภาพ</td>
      <td><input type="file" name="imagee" class="form-control"></td>
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
