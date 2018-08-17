<?php require 'main_std_header.php';?>

<?php 
        if (!$_SESSION["session_username"])
        {
            Header("Location: index.php");
        }
        else
        {
?>

<?php 

	$id = $_SESSION["session_id"];
	$sql = "select * from student where id='$id'";
	$query = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($query);

?>

    <div class="content-wrapper">
        <section class="content">

	        <center><img  height="60" width="60" src="images/edit.png"></center>
	        <center><font color="black"><h3>แก้ไขข้อมูลส่วนตัว</h3></font></center>
	        <br>
	        <form method="post" action="main_std_home_info_chk.php" id="form_edit_info">
		        <div class="panel panel-primary">
	        		<div class="panel-body">
				        <div class="form-horizontal">
			                <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">Username :</label>
			                    <div class="col-sm-5">
			                        <input readonly="" value="<?php echo $data['username'] ?>" type="text" class="form-control" name="username" id="username">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">Password :</label>
			                    <div class="col-sm-5">
			                        <input value="<?php echo $data['password'] ?>" class="form-control" id="password"  name="password">
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
			                    <div class="col-sm-2">
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
			                        <input value="<?php echo $data['fname'] ?>" type="text" class="form-control" id="fname" name="fname">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">นามสกุล :</label>
			                    <div class="col-sm-5">
			                        <input value="<?php echo $data['lname'] ?>" type="text" class="form-control" id="lname" name="lname">  
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
	                                <input value="<?php echo $data['idcard'] ?>" class="form-control" id="idcard"  name="idcard">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-sm-4" for="std_level">ระดับชั้น :</label>
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
		        	<button type="button" onclick="save_info(this)" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> บันทึก</button>
	        	</center>
	        </div>

        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.maskedinput.js"></script>
	<script>

		$(document).ready(function($){
		  $("#idcard").mask("9-9999-99999-99-9");
		  console.log('GG');
		});

		function alert(text)
		{
			swal("คำเตือน", text , "error");
		}

		function save_info(element)
		{
			var password = $('#password').val();
			var prefix = $('#prefix').val();
			var fname = $('#fname').val();
			var lname = $('#lname').val();
			var sex = $('#sex').val();
			var idcard = $('#idcard').val();
			var level = $('#level').val(); 

			if(password == '')
			{
				var text = 'กรุณากรอก Password';
                alert(text); 
				
			}
			else if(prefix == '')
			{
				var text = 'กรุณากรอก คำนำหน้า';
                alert(text); 
			}
			else if(fname == '')
			{
				var text = 'กรุณากรอก ชื่อ';
                alert(text); 
			}
			else if(lname == '')
			{
				var text = 'กรุณากรอก นามสกุล';
                alert(text); 
			}
			else if(sex == '')
			{
				var text = 'กรุณากรอก เพศ';
                alert(text); 
			}
			else if(idcard == '')
			{
				var text = 'กรุณากรอก เลขบัตรประชาชน';
                alert(text); 
			}
			else if(level == '')
			{
				var text = 'กรุณากรอก ระดับชั้น';
                alert(text); 
			}
			else
			{
				$('#form_edit_info').submit();
			}
		}
	</script>

 <?php } ?>
<?php require 'main_std_footer.php';?>