<?php require 'main_header.php';?>

    <div class="content-wrapper">
        <section class="content">
            <center><img  height="60" width="60" src="images/book.png"></center>
	        <center><font color="black"><h3>ผลการพยากรณ์นักเรียนทั้งหมด</h3></font></center>        
            <br>


            <div class="panel-body">
                <div class="form-horizontal">

	                <?php
	                    $get_data = $con->query("SELECT AVG(level1) as level1 , AVG(level2) as level2 , AVG(level3) as level3, AVG(level4) as level4, AVG(level5) as level5 FROM prophecy");
                        
                        while($data = $get_data->fetch_assoc())
                        {
                            $result = array();
                            $result[] = $data;
                        }
	                ?>

	                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	                <br>
	                <table class="table table-bordered" id="datatable">
	                    <thead>
	                        <tr>
	                        	<th>ลำดับ</th>
	                            <th>Level 1</th>
	                            <th>Level 2</th>
	                            <th>Level 3</th>
	                            <th>Level 4</th>
	                            <th>Level 5</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <?php
	                            foreach($result as $result_tb){
	                                echo"<tr>";
	                                	echo "<td>คะแนน</td>";
	                                    echo "<td>".$result_tb['level1']."</td>";
	                                    echo "<td>".$result_tb['level2']."</td>";
	                                    echo "<td>".$result_tb['level3']."</td>";
	                                    echo "<td>".$result_tb['level4']."</td>";
	                                    echo "<td>".$result_tb['level5']."</td>";
	                                    
	                                echo"</tr>";
	                            }
	                        ?>
	                    
	                    </tbody>
	                </table>
	                <center><img  height="200" width="350" src="images/student_all.png"></center>

                </div>
            </div>

		    <!-- <table class="table table-bordered">
		        <thead style="background-color: #FFFFFF;">
			        <tr class="active">
			            <th><center>ลำดับ</center></th>
			            <th><center>ชื่อ</center></th>
			            <th><center>นามสกุล</center></th>
			            <th><center>ชั้น</center></th>
			            <th></th>
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
				                <td align="center"><?php echo $data["fname"]; ?></td>                     
				                <td align="center"><?php echo $data["lname"]; ?></td>
				                <td align="center"><?php echo $data["level"]; ?></td>
				                <td align="center">
				                    <a class="btn btn-primary btn-sm" href="main_home_check_list.php?id=<?php echo $data["id"]; ?>"><span class="glyphicon glyphicon-eye-open"></span> ตรวจสอบ</a>
				                </td>
				            </tr>
	            <?php
	        		$i++; }
	        	?>
		    </table>    -->

        </section>
    </div>

<?php require 'main_footer.php';?>