<?php require 'main_std_header.php';?>

<?php 
        if (!$_SESSION["session_username"])
        {
            Header("Location: index.php");
        }
        else
        {
?>
    <div class="content-wrapper">
        <section class="content">

        	<center><img  height="60" width="60" src="images/book.png"></center>
	        <center><font color="black"><h3>ผลพยากรณ์ทั้งหมด</h3></font></center>
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
                                    $id = $_SESSION["session_id"];
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
        </section>
    </div>

 <?php } ?>
<?php require 'main_std_footer.php';?>