<?php 
include('include/connect.php');
include('include/function.php');
  error_reporting(0);

  
if($_POST['order']=='1'){
  $c=intval($_POST['count']);
  $date = date("Y-m-d H:i:s");
  $sql="INSERT INTO charge (status) VALUES('1')";
          $s= mysql_query($sql);
    $order_id=  mysql_insert_id();

  for ($i=1;$i<=$c;$i++) { 
   
    if($_POST['name'.$i]!="" && $_POST['price'.$i]!=""){
        $name=$_POST['name'.$i];
         $price=$_POST['price'.$i];

$data = array( 
         "drug"=>$name,
         "price"=>$price,
        "id_charge"=>$order_id,

);
insert("charge_detail",$data);
    }
    $update = "update treatment set charge_id = '".$order_id."' where id = '".$_POST['idup']."'";
    mysql_query($update);
  }
  header('refresh : 0.1; emp_index.php?menu=ser');
}
 ?>
  <script language="javascript">
function CheckNum(){
    if (event.keyCode < 48 || event.keyCode > 57){
          event.returnValue = false;
        }
  }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var i=0;
        $(".add-row").click(function(){
            i++;
             var name="";
            var price="";
            var markup = "<tr><td><input type='checkbox' name='record'></td><td><input typte='text' class='form-control' name='name"+i+"' required='' value="+name+" ></td><td><input typte='text' class='form-control' onKeyPress='CheckNum()' name='price"+i+"' value="+price+" ></td></tr>";
            $("#gg").append(markup);

        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("#gg").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>
<script type="text/javascript">
var count = 0;
function add(){
     count++;
     document.getElementById('count').value = count;
}
</script>
<style type="text/css">
.modal-backdrop {
  display: none;
}
</style>
<?php if ($_GET['row']) { ?>
 <form action="emp_action_service_row.php" method="post" class="form1">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="creload();">&times;</button>
    <h4 class="modal-title" id="myModalLabelin">ค่าใช้จ่ายในการบริการ  </h4>
  </div>
  <div class="modal-body">
  <input type="button" class="add-row btn btn-success btn-xs" value="เพิ่มแถว" onclick="add()">
          <p>&nbsp;</p>
  <table class="table table-bordered" id="gg">
  <thead>
            <tr>
                <th>เลือก</th>
                <th>ชื่อยา</th>
                <th>ราคา</th>
            </tr>
        </thead>
        <tbody>
<input type="hidden" name="order" value="1">
<input type="hidden" name="count" id="count" value="">
<input type="hidden" name="idup" id="idup" value="<?php echo $_GET['idup']; ?>">
        </tbody>
    </table>
    <button type="button" class="delete-row btn btn-danger  btn-xs">ลบแถว</button>
<br>

  </div>
  <div class="modal-footer">
   <input type="submit" name="btnSave" id="btnSave" class="btn btn-small btn-success" value="บันทึก" />
    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="creload();">ปิด</button>
  </div>
   </form>
  <?php } ?>
  <script>
  function creload(){
    window.location.reload('emp_index.php?menu=ser');
  }

</script>