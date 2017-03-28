<?php
include('include/connect.php');
include('include/function.php');
?>
<div class="panel panel-success" >
  <div class="panel-heading" >ตารางข่าวประชาสัมพันธ์</div>

  <div class="panel-body"> <a href="admin_action_news.php?insert=1"   data-toggle="modal"  data-target="#myModalin" class="btn btn-success  btn-sm" >เพิ่มข้อมูล</a>
    <div class="modal fade" id="myModalin" tabindex="-1" role="dialog" aria-labelledby="myModalLabelin" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"></div>
      </div>
    </div>
  </div>
  <table class="table-bordered table-striped table-condensed" width="100%">
    <thead>
      <tr>
        <th style="text-align:center;">ลำดับที่</th>
        <th style="text-align:center;">หัวข้อข่าวประชาสัมพันธ์</th>
        <th style="text-align:center;">รายละเอียด</th>
        <th style="text-align:center;">รูปภาพ</th>
        <th style="text-align:center;">วันที่ประกาศ</th>
        <th style="text-align:center;">ชื่อผู้ลงข่าว</th>
        <th width="10%">Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
      $i=1;
$sql=mysql_query("SELECT * FROM news ");
while($res=mysql_fetch_array($sql)){
      ?>
      <tr>
        <td style="text-align:center;"><?php echo $i; ?></td>
        <td style="text-align:center;"><?php echo $res['name_news']; ?></td>
        <td style="text-align:center;"><?php echo $res['detail_news']; ?></td>
        <td style="text-align:center;"><img src="Up_img/<?php echo $res["picture"];?>" width="80" height="80"></td>
        <td style="text-align:center;"><?php echo Date_Mouth_Shot_Time($res['date_news']); ?></td>
        <td style="text-align:center;">
        <?php
        $sql_u=mysql_query("SELECT * FROM user WHERE id='".$res['id_user']."'");
        $res_u=mysql_fetch_array($sql_u);
        echo $res_u['name'];
         ?></td>
        <td><a href="" onclick="popup('../clinic/admin_action_emp.php','mywindow','800','400');" class="btn btn-warning btn-xs" ><i class="pe-7s-note"></i></a>

          <a href="" onclick="popup('../clinic/admin_action_emp.php','mywindow','800','400');" class="btn btn-danger btn-xs" ><i class="pe-7s-trash"></i></a></td>
      </tr>
          <?php
          $i++;
        }
          ?>
      
    </tbody>
  </table>
  </div>