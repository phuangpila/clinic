<?php
include('include/connect.php');
$t="";
$txt="";
$sql=mysql_query("SELECT * FROM appoint where id='4'");
while($res=mysql_fetch_array($sql)){


$t .= ",{";
      $t .= '"title":';
      $t .= '"'.$res["note"].'",';
      $t .= '"start":"'.$res["date_app"].'"';
      $t .= "}"; 
}
      $txt = substr($t, 1);  

?>
 [
 <?php echo $txt; ?>
] 

 