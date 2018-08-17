<?php require 'main_header.php';?>
<?php
	$id = $_GET["id"];
	$sql = "select * from student where id='$id'";
	$query = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($query);
?>
    <div class="content-wrapper">
        <section class="content">
            <center><img  height="60" width="60" src="images/book.png"></center>
	        <center><font color="black"><h3>ตรวจสอบการพยากรณ์ของ <?php echo $data["prefix"]; ?> <?php echo $data["fname"]; ?> <?php echo $data["lname"]; ?></h3></font></center>        
            <br>
		        <div class="panel panel-primary">
	        		<div class="panel-body">
				        <div class="form-horizontal">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width:7%"><center>ครั้งที่</center></th>
                                    <th>ผลพยากรณ์</th>
                                    <th style="width:14%"><center>วันที่พยากรณ์</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $id = $_GET["id"];
                                    $sql = "select * from prophecy where id_student = '$id' ORDER BY id ASC";
                                    $i = 1;
                                    $query = mysqli_query($con, $sql);
                                    while ($data = mysqli_fetch_assoc($query)) 
                                    {
                                ?>
                                            <tr>
                                                <td align="center"><?php echo $i; ?></td>	
                                                <td align="left"><?php echo $data["result"]; ?></td>
                                                <td align="left"><?php echo $data["created_at"]; ?></td>
                                            </tr>
                                <?php
                                    $i++; }
                                ?>
                                </tbody>
                            </table>

			             </div>
		            </div>
		        </div>

                <center>
		        	<a class="btn btn-warning" href="main_home_check.php"><span class="glyphicon glyphicon-share-alt"></span> กลับ</a>
	        	</center>
 

        </section>
    </div>

<?php require 'main_footer.php';?>
