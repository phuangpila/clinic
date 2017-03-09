<?php
error_reporting(0);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ซันเวย์คลีนิกทัตกรรม</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='assets/css/fonts.css' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    ซันเวย์คลีนิกทัตกรรม
                </a>
            </div>

            <ul class="nav">
                <li <?php if($_GET['menu']=='cus'){ echo 'class="active" '; } ?>>
                    <a  href="emp_index.php?menu=cus">
                        <i class="pe-7s-user"></i>
                        <p>ข้อมูลลูกค้า</p>
                    </a>
                </li>
                <li  <?php if($_GET['menu']=='his'){ echo 'class="active"'; } ?>>
                    <a href="emp_index.php?menu=his">
                        <i class="pe-7s-graph"></i>
                        <p>ประวัติการเข้ารักษา</p>
                    </a>
                </li>
                <li <?php if($_GET['menu']=='acc'){ echo 'class="active"'; } ?>>
                    <a href="emp_index.php?menu=acc">
                        <i class="pe-7s-note2"></i>
                        <p>ข้อมูลบัญชี</p>
                    </a>
                </li>

                <li <?php if($_GET['menu']=='pre'){ echo 'class="active" '; } ?>>
                    <a  href="emp_index.php?menu=pre">
                        <i class="pe-7s-user"></i>
                        <p>คำนำหน้าชื่อ</p>
                    </a>
                </li>

                <li <?php if($_GET['menu']=='list'){ echo 'class="active"'; } ?>>
                    <a href="emp_index.php?menu=list">
                        <i class="pe-7s-map-marker"></i>
                        <p>รายการที่ทำการรักษา</p>
                    </a>
                </li>
                <li <?php if($_GET['menu']=='ser'){ echo 'class="active"'; } ?>>
                    <a href="emp_index.php?menu=ser">
                        <i class="pe-7s-science"></i>
                        <p>ข้อมูลการบริการ</p>
                    </a>
                </li>
                <li <?php if($_GET['menu']=='report'){ echo 'class="active"'; } ?>>
                    <a href="emp_index.php?menu=report">
                        <i class="pe-7s-news-paper"></i>
                        <p>รายงานใบเสร็จ</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                
                </div>
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                </div>
<?php
if($_GET['menu']=='cus'){
    include('emp_show_customer.php');
}else if($_GET['menu']=='his'){
    include('emp_show_history.php');
}else if($_GET['menu']=='acc'){
    include('emp_show_accounting.php');
}else if($_GET['menu']=='pre'){
    include('emp_show_prefix.php');
}else if($_GET['menu']=='list'){
    include('emp_show_list_treat.php');
}else if($_GET['menu']=='ser'){
    include('emp_show_service.php');
}else if($_GET['menu']=='report'){
    include('emp_show_report.php');
}
?>
                        </div>
                    </div>


        <footer class="footer">
            <div class="container-fluid">
                <p  align="center">
                    &copy;  <a href="#"><script>document.write(new Date().getFullYear())</script></a>, m web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome <b>M</b>"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
