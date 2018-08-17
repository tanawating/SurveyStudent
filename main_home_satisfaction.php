<?php require 'main_header.php';?>

    <div class="content-wrapper">
        <section class="content">
			<center><img  height="60" width="60" src="images/pen.png"></center>
	        <center><font color="black"><h3>ดูระดับความพึงพอใจ</h3></font></center>

			<div class="panel panel-primary">
				<div class="panel-body">
					<div class="form-horizontal">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<table width="100%" class="table table-bordered">
							<thead>
							<tr class="active">
								<th style="width:7%"><center>ลำดับ</center></th>
								<th><center>คะแนนความพึงพอใจ</center></th>
								<th style="width:30%"><center>วันที่ประเมิน</center></th>
							</tr>
							</thead>
							<tbody>
							<?php
								$sql = "select * from score ORDER BY id DESC";
								$i = 1;
								$query = mysqli_query($con, $sql);
								while ($data = mysqli_fetch_assoc($query)) 
								{
							?>
										<tr>
											<td align="center"><?php echo $i; ?></td>	
											<td align="center"><?php echo $data["point"]; ?></td>
											<td align="center"><?php echo $data["created_at"]; ?></td>
										</tr>
							<?php
								$i++; }
							?>
							</tbody>
						</table>
						</div>
					<div class="col-sm-3"></div>
					</div>
				</div>
			</div>

        </section>
    </div>

<?php require 'main_footer.php';?>