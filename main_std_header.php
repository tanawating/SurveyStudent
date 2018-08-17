<?php require 'connect.php'; ?>
<?php session_start();?>

<!DOCTYPE html>
<html>

	<head>
	
		<title>ระบบช่วยตัดสินใจในการศึกษา</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="images/icon.png">
		<link rel="stylesheet" href="assets/dashboard/css/AdminLTE.min.css">
		<link rel="stylesheet" href="assets/dashboard/css/skins/_all-skins.min.css">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

		      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	</head>

	<body class="hold-transition skin-blue sidebar-mini">

	    <div class="wrapper">

	        <header class="main-header">
	            <a href="main_std_home.php" class="logo">
	                <span class="logo-mini"><b>A</b>LT</span>
	                <span class="logo-lg"><b>Student</b></span>
	            </a>
	            <nav class="navbar navbar-static-top">
	            </nav>
	        </header>

	        <aside class="main-sidebar">
	            <section class="sidebar">
	                <div class="user-panel">
	                    <div class="pull-left image">
	                        <img src="images/student.png" class="img-circle" alt="User Image">
	                    </div>
	                    <div class="pull-left info">
	                        <p>
	                        	<br>
	                        	<?php 
									$id_home = $_SESSION["session_id"];
									$sql_home = "select * from student where id='$id_home'";
									$query_home = mysqli_query($con, $sql_home);
									$data_home = mysqli_fetch_assoc($query_home);
								?>
	                            <?php
	                                echo $data_home['fname'].' '.$data_home['lname'];
	                            ?>
	                        </p>
	                    </div>
	                </div>
	                <ul class="sidebar-menu" data-widget="tree">
	                    <li>
	                        <a href="main_std_home.php">
	                            <i class="fa fa-home fa-1x"></i><span>หน้าหลัก</span>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="main_std_home_info.php">
	                            <i class="fa fa-id-card-o fa-1x"></i><span>แก้ไขข้อมูลส่วนตัว</span>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="main_std_home_prophecy.php">
	                            <i class="fa fa-percent fa-1x"></i><span>พยากรณ์การเข้าเรียนต่อ</span>
	                        </a>
	                    </li>
						<li>
	                        <a href="main_std_home_prophecy_result.php">
	                            <i class="fa fa-eye fa-1x"></i><span>ดูผลการพยากรณ์</span>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="main_std_home_score.php">
	                            <i class="fa fa-line-chart"></i>
	                            <span>ประเมินเว็บไซต์</span>
	                        </a>
	                    </li>
	                     <li>
	                        <a href="logout.php">
	                            <i class="fa fa-sign-out
	                            "></i>
	                            <span>ออกจากระบบ</span>
	                        </a>
	                    </li>
	                </ul>
	            </section>
	        </aside>

