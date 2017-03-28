<?php
include("include/connect.php");
include("include/function.php");
?>
<style type="text/css">
.modal-backdrop {
	display: none;
}
</style>
<?php
if($_GET['insert']=='1'){

  $sql_n=mysql_query("SELECT * FROM news WHERE news_id='".$_GET['id']."'");
  $res_n=mysql_fetch_array($sql_n);
?>
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">ข่าวประชาสัมพันธ์</h4>
  </div>
  <div class="modal-body">
          <p>หัวข้อข่าวประชาสัมพันธ์</p>
          <p><?php echo $res_n['name_news']; ?></p>
         <img src="Up_img/<?php echo $res_n["picture"];?>" width="250" height="200">
         <br><br>
         <p>รายละเอียด</p>
         <p><?php echo $res_n['detail_news']; ?></p>
  </div>
  <div class="modal-footer">
  <p align="left">
  <?php
   $sql_u=mysql_query("SELECT * FROM user WHERE id='".$res_n["id_user"]."'");
   $res_u=mysql_fetch_array($sql_u);
   echo "โดย : ".$res_u['name'];
   ?></p>
    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
  </div>

<?php
}
?>