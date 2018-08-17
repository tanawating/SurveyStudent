
		    <table class="table table-bordered">
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
		        	include 'connect.php';
			        $sql = "select * from student where fname like '%{$_POST['itemname']}%' OR lname like '%{$_POST['itemname']}%' ";
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
