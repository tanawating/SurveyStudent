<?php require 'main_header.php';?>

    <div class="content-wrapper">
        <section class="content">

	        <center><font color="black"><h3>เพิ่มข้อมูลนักเรียน</h3></font></center>
	        <br>
	        <form method="post" action="main_home_student_add_chk.php" id="form_add">
		        <div class="panel panel-primary">
	        		<div class="panel-body">
				        <div class="form-horizontal">
			                <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">Username :</label>
			                    <div class="col-sm-5">
			                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">Password :</label>
			                    <div class="col-sm-5">
			                        <input type="text" class="form-control" id="password"  name="password" placeholder="Password">
			                    </div>
			                </div>
			             </div>
		            </div>
		        </div>
				<div class="panel panel-primary">
	        		<div class="panel-body">
				        <div class="form-horizontal">
	                        <div class="form-group">
	                            <label class="control-label col-sm-4" for="Member_Title" name="Member_Title" id="Member_Title">คำนำหน้า :</label>
	                            <div class="col-sm-5">
	                                <label class="radio-inline">
	                                    <input type="radio" checked="checked" name="Member_Title" value="นาย">นาย
	                                </label>
	                                <label class="radio-inline">
	                                    <input type="radio" name="Member_Title"  value="นาง">นาง
	                                </label>
	                                <label class="radio-inline">
	                                    <input type="radio" name="Member_Title"  value="นางสาว">นางสาว
	                                </label>
	                            </div>
	                        </div>
	                        <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">ชื่อ :</label>
			                    <div class="col-sm-5">
			                        <input type="text" class="form-control" id="fname" name="fname" placeholder="">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">นามสกุล :</label>
			                    <div class="col-sm-5">
			                        <input type="text" class="form-control" id="lname" name="lname" placeholder="">  
			                    </div>
			                </div>

	                        <div class="form-group">
	                            <label class="control-label col-sm-4" for="std_sex" name="std_sex" id="std_sex">เพศ :</label>
	                            <div class="col-sm-5">
	                            	<label class="radio-inline">
	                                    <input type="radio" checked="checked" name="std_sex"  value="ชาย">ชาย
	                                </label>
	                                <label class="radio-inline">
	                                    <input type="radio" name="std_sex" value="หญิง">หญิง
	                                </label>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-sm-4" for="idcard">รหัสบัตรประชาชน :</label>
	                            <div class="col-sm-5">
	                                <input class="form-control" id="idcard"  name="idcard"  placeholder="">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-sm-4" for="std_level">ระดับชั้น :</label>
	                            <div class="col-sm-5">
	                                <select class="form-control" name="std_level" id="std_level">
	                                    <option value=""> กรุณาเลือกระดับชั้น </option>
	                                    <option value="มัธยมศึกษาปีที่ 1">มัธยมศึกษาปีที่ 1</option>
	                                    <option value="มัธยมศึกษาปีที่ 2">มัธยมศึกษาปีที่ 2</option>
	                                    <option value="มัธยมศึกษาปีที่ 3">มัธยมศึกษาปีที่ 3</option>
	                                </select>
	                            </div>
	                        </div>
			             </div>
		            </div>
		        </div>
		    </form>
	        <div>
	        	<center>
		        	<button type="button" onclick="save_user(this)" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> บันทึก</button>
		        	<a class="btn btn-warning" href="main_home_student.php"><span class="glyphicon glyphicon-share-alt"></span> กลับ</a>
	        	</center>
	        </div>

        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.maskedinput.js"></script>
	<script>

		$(document).ready(function($){
		  $("#idcard").mask("9-9999-99999-99-9");
		});
            
        function save_user(element) 
        {
            var username = $('#username').val();
            var password = $('#password').val();
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var idcard = $('#idcard').val();
            var std_level = $('#std_level').val();

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
            else if(std_level == '')
            {
                var text = 'กรุณาระบุ ระดับชั้น'
                alert(text); 
            }
            else
            {
                $('#form_add').submit();
            }

        }

        function alert(text)
        {
            swal("คำเตือน", text , "error");
        }

    </script>

<?php require 'main_footer.php';?>