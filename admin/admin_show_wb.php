<?php
session_start();
error_reporting(0);
include("include/connect.php");
include("include/function.php");
?>

<div class="panel panel-default" >
  <div class="panel-heading" >ตั้งกระทู้</div>
  <div class="panel-body"> <a href="admin_action_wb.php?id=1"   data-toggle="modal"  data-target="#myModal" class="btn btn-success  btn-sm" >เพิ่มข้อมูล</a>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"></div>
      </div>
    </div>
  </div>
  <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="table">
    <thead>
      <tr>
        <th width="10%" style="text-align: center;">ลำดับ</th>
        <th width="50%" style="text-align: center;">หัวข้อกระทู้</th>
        <th width="10%" style="text-align: center;">อ่าน</th>
        <th width="10%" style="text-align: center;">ตอบ</th>
        <th width="20%" style="text-align: center;">วันที่ตั้งกระทู้</th>
      </tr>
    </thead>
    <tbody>
      <?php
 $sql = "SELECT * FROM questions ORDER BY id DESC ";
$query = mysql_query($sql);
 $i = 1;
 while ($result = mysql_fetch_array($query)) {
 ?>
      <tr>
        <td style="text-align: center;"><?php echo $i; ?></td>
        <td>
        <?php
        $j="";
			$string = strip_tags($result['topic']);
			if(strlen($string) > 70){
				$j='...';
			}else{
				$j='';
			}
    		$stringCut = substr($string, 0, 70);
   			$string2 = $stringCut.$j; 
		?>
<a href="admin_index.php?menu=view_topic&id=<?php echo $result["id"]; ?>&view=1"><?php echo $string2; ?></a>
  
       
        </td>
        <td style="text-align: center;"><?php echo $result['view']; ?></td>
        <td style="text-align: center;"><?php echo $result['reply']; ?></td>
        <td style="text-align: center;"><?php echo Date_Mouth_Shot_Time($result['created']); ?></td>
      </tr>
      <?php
 $i++;
 }
 ?>
    </tbody>
  </table>
</div>
