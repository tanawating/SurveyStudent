<?php require 'main_header.php';?>

<?php
	
	$id = $_GET["id"];
	$sql = "select * from student where id='$id'";
	$query = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($query);
?>

    <div class="content-wrapper">
        <section class="content">

	        <center><font color="black"><h3>เพิ่มข้อมูลนักเรียน</h3></font></center>
	        <br>
	        <form method="post" action="main_home_student_edit_chk.php" id="form_edit">
			<input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
		        <div class="panel panel-primary">
	        		<div class="panel-body">
				        <div class="form-horizontal">
			                <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">Username :</label>
			                    <div class="col-sm-5">
			                        <input type="text" value="<?php echo $data["username"]; ?>" class="form-control" name="username" id="username" placeholder="Username">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">Password :</label>
			                    <div class="col-sm-5">
			                        <input type="text" value="<?php echo $data["password"]; ?>" class="form-control" id="password"  name="password" placeholder="Password">
			                    </div>
			                </div>
			             </div>
		            </div>
		        </div>
				<div class="panel panel-primary">
	        		<div class="panel-body">
				        <div class="form-horizontal">
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">คำนำหน้า :</label>
								<div class="col-sm-5">
									<select class="form-control" id="prefix"  name="prefix">
			                        	<?php if ($data['prefix'] == 'นาย'): ?>
			                        		<option value="นาย">นาย</option>
			                        		<option value="นาง">นาง</option>
			                        		<option value="นางสาว">นางสาว</option>
			                        	<?php endif ?>
			                        	<?php if ($data['prefix'] == 'นาง'): ?>
			                        		<option value="นาง">นาง</option>
			                        		<option value="นาย">นาย</option>
			                        		<option value="นางสาว">นางสาว</option>
			                        	<?php endif ?>
			                        	<?php if ($data['prefix'] == 'นางสาว'): ?>
			                        		<option value="นางสาว">นางสาว</option>
			                        		<option value="นาย">นาย</option>
			                        		<option value="นาง">นาง</option>
			                        	<?php endif ?>
			                        </select>
								</div>
							</div>
	                        <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">ชื่อ :</label>
			                    <div class="col-sm-5">
			                        <input type="text" value="<?php echo $data["fname"]; ?>" class="form-control" id="fname" name="fname" placeholder="">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">นามสกุล :</label>
			                    <div class="col-sm-5">
			                        <input type="text" value="<?php echo $data["lname"]; ?>" class="form-control" id="lname" name="lname" placeholder="">  
			                    </div>
			                </div>
	                        <div class="form-group">
	                            <label class="control-label col-sm-4" for="std_sex">เพศ :</label>
	                            <div class="col-sm-2">
			                        <select class="form-control" id="sex" name="sex">
			                        	<?php if ($data['sex'] == 'ชาย'): ?>
			                        		<option value="ชาย">ชาย</option>
			                        		<option value="หญิง">หญิง</option>
			                        	<?php endif ?>
			                        	<?php if ($data['sex'] == 'หญิง'): ?>
			                        		<option value="หญิง">หญิง</option>
			                        		<option value="ชาย">ชาย</option>
			                        	<?php endif ?>
			                        </select>
			                    </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-sm-4" for="idcard">รหัสบัตรประชาชน :</label>
	                            <div class="col-sm-5">
	                                <input value="<?php echo $data["idcard"]; ?>" class="form-control" id="idcard"  name="idcard"  placeholder="">
	                            </div>
	                        </div>
	                        <div class="form-group">
								<label class="control-label col-sm-4" for="level">ระดับชั้น :</label>
								<div class="col-sm-5">
									<select class="form-control" id="level" name="level">
			                        	<?php if ($data['level'] == 'มัธยมศึกษาปีที่ 1'): ?>
			                        		<option value="มัธยมศึกษาปีที่ 1">มัธยมศึกษาปีที่ 1</option>
			                        		<option value="มัธยมศึกษาปีที่ 2">มัธยมศึกษาปีที่ 2</option>
			                        		<option value="มัธยมศึกษาปีที่ 3">มัธยมศึกษาปีที่ 3</option>
			                        	<?php endif ?>
			                        	<?php if ($data['level'] == 'มัธยมศึกษาปีที่ 2'): ?>
			                        		<option value="มัธยมศึกษาปีที่ 2">มัธยมศึกษาปีที่ 2</option>
			                        		<option value="มัธยมศึกษาปีที่ 1">มัธยมศึกษาปีที่ 1</option>
			                        		<option value="มัธยมศึกษาปีที่ 3">มัธยมศึกษาปีที่ 3</option>
			                        	<?php endif ?>
			                        	<?php if ($data['level'] == 'มัธยมศึกษาปีที่ 3'): ?>
			                        		<option value="มัธยมศึกษาปีที่ 3">มัธยมศึกษาปีที่ 3</option>
			                        		<option value="มัธยมศึกษาปีที่ 1">มัธยมศึกษาปีที่ 1</option>
			                        		<option value="มัธยมศึกษาปีที่ 2">มัธยมศึกษาปีที่ 2</option>
			                        	<?php endif ?>
			                        </select>
								</div>
							</div>
			             </div>
		            </div>
		        </div>
		    </form>
	        <div>
	        	<center>
		        	<button type="button" onclick="edit_user(this)" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> บันทึก</button>
		        	<a class="btn btn-warning" href="main_home_student.php"><span class="glyphicon glyphicon-share-alt"></span> กลับ</a>
	        	</center>
	        </div>

        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.maskedinput.js"></script>
	<script type="text/javascript">

            $(document).ready(function($){
			  $("#idcard").mask("9-9999-99999-99-9");
			});

            function edit_user(element) 
            {
                var username = $('#username').val();
                var password = $('#password').val();
                var fname = $('#fname').val();
                var lname = $('#lname').val();
                var idcard = $('#idcard').val();
                var level = $('#level').val();
				var sex = $('#sex').val();
				var prefix = $('#prefix').val();

                if (username == '')
                {   
                    var text = 'กรุณากรอก Username'
                    alert(text); 
                }
                else if(password == '')
                {
                    var text = 'กรุณากรอก Password'
                    alert(text); 
                }
                else if(fname == '')
                {
                    var text = 'กรุณากรอก ชื่อ'
                    alert(text); 
                }
                else if(lname == '')
                {
                    var text = 'กรุณากรอก นามสกุล'
                    alert(text); 
                }
                else if(idcard == '')
                {
                    var text = 'กรุณากรอก เลขบัตรประชาชน'
                    alert(text); 
                }
                else if(level == '')
                {
                    var text = 'กรุณาระบุ ระดับชั้น'
                    alert(text); 
                }
				else if(sex == '')
                {
                    var text = 'กรุณาระบุ เพศ'
                    alert(text); 
                }
				else if(prefix == '')
                {
                    var text = 'กรุณาระบุ คำนำหน้า'
                    alert(text); 
                }
                else
                {
                    $('#form_edit').submit();
                }

            }

            function alert(text)
            {
                swal("คำเตือน", text , "error");
            }

        </script>

<?php require 'main_footer.php';?>