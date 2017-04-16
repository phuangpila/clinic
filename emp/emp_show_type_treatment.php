<?php
include('include/connect.php');
include('include/function.php');
?>
<div class="panel panel-success" >
  <div class="panel-heading" >ตารางข้อมูลประเภทการบริการ  </div>

  <div class="panel-body"> <a href="emp_action_type_treatment.php?insert=1"   data-toggle="modal"  data-target="#myModalin" class="btn btn-success  btn-sm" >เพิ่มข้อมูล</a>
    <div class="modal fade" id="myModalin" tabindex="-1" role="dialog" aria-labelledby="myModalLabelin" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"></div>
      </div>
    </div>
  </div>
  <table class="table-bordered table-striped table-condensed" width="100%">
    <thead>
      <tr>
        <th style="text-align:center;">ลำดับ</th>
        <th style="text-align:center;">ประเภทการบิการ</th>
        <th style="text-align:center;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 

        $i=1;
        $query = mysql_query("select * from type_treatment");
        while ($res = mysql_fetch_array($query)) {
       ?>
      <tr>
          <td width="10%"><?php echo $i; ?></td>
          <td><?php echo $res['name']; ?></td>
          <td width="20%" align="center">
        <a href="emp_action_type_treatment.php?up=1&idup=<?php echo $res['id']; ?>"   data-toggle="modal"  data-target="#myModalin" class="btn btn-warning btn-xs" >แก้ไข</a>


                  <button class="btn btn-danger btn-xs" onclick="confirmDelete('emp_action_type_treatment.php?del=<?php echo  $res['id']; ?>')"><i class="pe-7s-trash"></i></button>
                </td>
          </td>  
      </tr>
      <?php 
      $i++;
        }
       ?>
    </tbody>
  </table>
  </div>