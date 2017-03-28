<?php 

 //include('include/connect.php');

//ฟังก์ชั่น insert การใช้งาน

/*	$data = array(
"type_name"=>$_POST["type"],
);
insert("tb_typepro",$data);*/

function insert($table,$data,$id="") {

$fields=""; $values="";
$i=1;

foreach($data as $key=>$val){

if($i!=1) { 
  $fields.=", "; $values.=", "; 
  }
$fields.="$key";
$values.="'$val'";
$i++;
}
$sql = "INSERT INTO $table ($fields) VALUES ($values)";

if(mysql_query($sql)){ 
    return true; 
}
else{ 
  die("SQL Error: ".$sql."".mysql_error()); 
  return false;
  }
}


//ฟังก์ชั่น update การใช้งาน

/*$newdata = array(

"field1"=>"newvalue1",

"field2"=>"newvalue2",

"field3"=>"newvalue3",

);

update("mytable",$newdata,"myfieldid = 1");*/

 function update($table,$data,$where) {

$update="";
$i=1;

foreach($data as $key=>$val){

if($i!=1){ 
  $update.=", "; 
}
if(is_numeric($val)){ 
  $update.=$key.'='.$val; 
}else{ 
  $update.=$key.' = "'.$val.'"'; 
}
$i++;
}
$sql = ("UPDATE $table SET $update WHERE $where");
if(mysql_query($sql)){
 return true; 
}else{ 
  die("SQL Error: ".$sql."".mysql_error()); 
  return false; 
  }
}


//ฟังก์ชั่น delete
/*delete("mytable","myfieldid = 1");*/
 function delete($table, $where){

$sql = "DELETE FROM $table WHERE $where";
if(mysql_query($sql)){ 
  return true; 
}else {
 die("SQL Error: ".$sql."".mysql_error()); 
 return false; 
  }
}

function Date_Mouth_Shot($str)
  {
    $strYear = date("Y",strtotime($str))+543;
    $strMonth= date("n",strtotime($str));
    $strDay= date("j",strtotime($str));
    $strHour= date("H",strtotime($str));
    $strMinute= date("i",strtotime($str));
    $strSeconds= date("s",strtotime($str));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai=$strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
  }
  function Date_Mouth_Shot_Time($str)
  {
    $t="เวลา";
    $strYear = date("Y",strtotime($str))+543;
    $strMonth= date("n",strtotime($str));
    $strDay= date("j",strtotime($str));
    $strHour= date("H",strtotime($str));
    $strMinute= date("i",strtotime($str));
    $strSeconds= date("s",strtotime($str));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai=$strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear,$t $strHour:$strMinute:$strSeconds น.";
  }

    function Date_Mouth_Long_Time($str)
  {
    $t="เวลา";
    $strYear = date("Y",strtotime($str))+543;
    $strMonth= date("n",strtotime($str));
    $strDay= date("j",strtotime($str));
    $strHour= date("H",strtotime($str));
    $strMinute= date("i",strtotime($str));
    $strSeconds= date("s",strtotime($str));
    $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    $strMonthThai=$strMonthCut[$strMonth];
    return "วันที่ $strDay $strMonthThai $strYear,$t $strHour:$strMinute:$strSeconds น.";
  }
  

 ?>
<script type="text/javascript">
	function popup(url, title, w, h) {  
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;  
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;  
              
    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;  
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;  
              
    var left = ((width / 2) - (w / 2)) + dualScreenLeft;  
    var top = ((height / 2) - (h / 2)) + dualScreenTop;  
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);  

    if (window.focus) {  
        newWindow.focus();  
    }  
} 
function confirmDelete(delUrl) {
  if (confirm("คุณต้องการลบข้อมูลหรือไม่")) {
   document.location = delUrl;
  }
}

function confirmAppoint_y(str) {
  if (confirm("คุณต้องการยืนยันการนัดหรือไม่")) {
   document.location = str;
  }
}

function confirmAppoint_n(str) {
  if (confirm("คุณต้องยกเลิกการนัดหรือไม่")) {
   document.location = str;
  }
}

</script>


