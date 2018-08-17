<?php require 'main_header.php';?>

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
	$sql = "select * from admin where id='$id'";
	$query = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($query);

?>

    <div class="content-wrapper">
        <section class="content">

	        <center><img  height="60" width="60" src="images/edit.png"></center>
	        <center><font color="black"><h3>แก้ไขข้อมูลส่วนตัว</h3></font></center>
	        <br>
	        <form method="post" action="main_home_info_chk.php" id="form_edit_info">
		        <div class="panel panel-primary">
	        		<div class="panel-body">
				        <div class="form-horizontal">
			                <div class="form-group">
			                    <label for="name" class="col-sm-4 control-label">Username :</label>
			                    <div class="col-sm-5">
			                        <input value="<?php echo $data['username'] ?>" type="text" class="form-control" name="username" id="username">
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
			                    <label for="name" class="col-sm-4 control-label">เบอร์โทรศัพท์ :</label>
			                    <div class="col-sm-5">
			                        <input value="<?php echo $data['tel'] ?>" type="text" class="form-control" id="tel" name="tel">  
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

	<script>

		function alert(text)
		{
			swal("คำเตือน", text , "error");
		}

		function save_info(element)
		{
			var username = $('#username').val();
			var password = $('#password').val();
			var fname = $('#fname').val();
			var lname = $('#lname').val();
			var tel = $('#tel').val();

			if(username == '')
			{
				var text = 'กรุณากรอก Username';
                alert(text); 
				
			}
			else if(password == '')
			{
				var text = 'กรุณากรอก Password';
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
			else if(tel == '')
			{
				var text = 'กรุณากรอก เบอร์โทรศัพท์';
                alert(text); 
			}
			else
			{
				$('#form_edit_info').submit();
			}
		}
	</script>

 <?php } ?>
<?php require 'main_footer.php';?>