<?php require 'main_header.php';?>

    <div class="content-wrapper">
        <section class="content">
			<center><img  height="60" width="60" src="images/edit.png"></center>
	        <center><font color="black"><h3>จัดการข้อมูลนักเรียน</h3></font></center>
	        <hr>
	        <form class="form-inline" name="searchform" id="searchform">
	        	<div align="center">
					 <div class="form-group">
					 <label for="textsearch" >ชื่อ-นามสกุล</label>
					 <input type="text" name="itemname" id="itemname" class="form-control" placeholder="" autocomplete="off">
					 </div>
					 <button type="button" class="btn btn-primary" id="btnSearch">
					 <span class="glyphicon glyphicon-search"></span>
					 ค้นหา
					 </button>
					 <button type="button" class="btn btn-success" id="btnReset">
					 <span class="glyphicon glyphicon-refresh"></span>
					 Reset
					 </button>
				</div>
			</form>
			<br>
		    <table class="table table-bordered" id="main_table">
		        <thead style="background-color: #FFFFFF;">
			        <tr class="active">
			            <th>ลำดับ</th>
			            <th>Username</th>
			            <th>Password</th>
			            <th>บัตรประชาชน</th>
			            <th>ชื่อ</th>
			            <th>นามสกุล</th>
			            <th>เพศ</th>
			            <th>ชั้น</th>
			            <th class="text-center"><a href="main_home_student_add.php" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> เพิ่มสมาชิก</a></th>
			        </tr>
		        </thead>
		        <?php
			        $sql = "select * from student ORDER BY id DESC";
			        $i = 1;
			        $query = mysqli_query($con, $sql);
			        while ($data = mysqli_fetch_assoc($query)) 
			        {
			    ?>
				            <tr style="background-color: #FFFFFF;">
				                <td align="center"><?php echo $i; ?></td>	
				                <td align="left"><?php echo $data["username"]; ?></td>
				                <td align="left"><?php echo $data["password"]; ?></td>
				                <td align="left"><?php echo $data["idcard"]; ?></td>
				                <td align="left"><?php echo $data["fname"]; ?></td>                     
				                <td align="left"><?php echo $data["lname"]; ?></td>
				                <td align="center"><?php echo $data["sex"]; ?></td>
				                <td align="center"><?php echo $data["level"]; ?></td>
				                <td align="center">
				                    <a class="btn btn-success btn-sm" href="main_home_student_edit.php?id=<?php echo $data["id"]; ?>"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>
				                    <a class="btn btn-danger btn-sm" href="main_home_student_del.php?id=<?php echo $data["id"]; ?>"  onclick="return  confirm('คุณต้องการลบข้อมูลใช่หรือไม่!\n กด OK เพื่อลบข้อมูล หรือ Cancel เพื่อยกเลิก');"><i class="fa fa-trash-o"></i> ลบ</a>
				                </td>
				            </tr>
	            <?php
	        		$i++; }
	        	?>
		    </table>       
		    <div class="loading"></div>
 			<div id="list-data">
        </section>
    </div>

 	<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
	 <script type="text/javascript">
	 $(function () {

	 	$("#btnReset").click(function()
	 	{
	 		$("#itemname").val('');
	 		$("#searchform").submit();

	 	})

		 $("#btnSearch").click(function () 
		 {
		 	$('#main_table').addClass('hidden');
			 $.ajax({
						 url: "main_home_student_search.php",
						 type: "post",
						 data: {itemname: $("#itemname").val()},
						 beforeSend: function () {
						 $(".loading").show();
						 },
						 complete: function () {
						 $(".loading").hide();
						 },
						 success: function (data) {
						 $("#list-data").html(data);
						 }
						 });
		});

		 $("#searchform").on("keyup keypress",function(e)
		 {
			 var code = e.keycode || e.which;
			 if(code==13){
			 $("#btnSearch").click();
			 return false;
			 }
		 });
	});
	 </script>

<?php require 'main_footer.php';?>