<div class="product-info">
<?php
	include ('connect.php');
	$sl   = 'select * from san_pham join thongtinsp on san_pham.masp= thongtinsp.masp where san_pham.masp=' . $_GET['masp'];
	$exec = mysqli_query($connect, $sl);
	$row  = mysqli_fetch_array($exec);
?>	
	<div class="panel panel-warning">
    	<div class="panel-heading">
    		<span style="font-weight: bold; color: "><?php echo $row['tensp']; ?></span>
		</div>
    	<div class="panel-body">
			<form method="GET">
				<div class="img-sp col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<script>
						function img1(){
							document.getElementById('img').src="images/<?php echo $row['img']; ?>";
						}
						function img2(){
							document.getElementById('img').src="images/<?php echo $row['img1']; ?>";
						}
						function img3(){
							document.getElementById('img').src="images/<?php echo $row['img2']; ?>";
						}
						function img4(){
							document.getElementById('img').src="images/<?php echo $row['img3']; ?>";
						}						
					</script>
					<img id="img" class="img-thumbnail" src="images/<?php echo $row['img']; ?>">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div style="margin-left: -10px; padding-top: 10px;">
							<img class="img-thumbnail" src="images/<?php echo $row['img']; ?>" style="width: 50px; height: 50px;" onclick="img1();" alt="">
							<img class="img-thumbnail" src="images/<?php echo $row['img1']; ?>" style="width: 50px; height: 50px;" onclick="img2();" alt="">
							<img class="img-thumbnail" src="images/<?php echo $row['img2']; ?>" style="width: 50px; height: 50px;" onclick="img3();" alt="">
							<img class="img-thumbnail" src="images/<?php echo $row['img3']; ?>" style="width: 50px; height: 50px;" onclick="img4();" alt="">				
						</div>
					</div>
				</div>
				<div class="info_sp col-xs-12 col-sm-12 col-md-6 col-lg-6">			
					<input type="hidden" name="menu" value="addcart">
					<input type="hidden" name="masp" value="<?php echo $row['masp'] ?>">
					<span style="font-size: 20px; font-weight: bold;" name="tensp"><?php echo $row['tensp']; ?></span>
					<div class="jRating" data-average="<?php echo $avg; ?>" data-id="1"> 
					</div>
					<span style="color: #BB4040; font-weight: bold; font-size: 26px;" name="giasp"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></span></br>
					<span >Kho còn: <?php echo $row['soluong']; ?></span><br>
					<span style="color: black; font-size: 16px; font-weight: bold; margin-top: 15px;">Trạng thái: 
				<?php 
					if ($row['soluong'] > 0) {
						echo '<span style="color: blue; font-size: 18px; ">Còn hàng</span>';
				?>
						</span><br>
						<span style="margin-top: 10px;" >Số lượng: 
							<input type="number" style="width: 50px; height: 36px; border-radius: 10px; border: solid silver 0.1px; padding-left: 10px; " name="soluong" value="1"min="1" max="<?php echo $row['soluong'] ?>">
						</span><br>			
						<a href="?menu=mua_ngay&masp=<?php echo $row['masp']; ?>&soluong=1" style="padding: 15px; font-size: 18px;" class="btn btn-info" >Mua ngay</a>
						<input type="submit" class="btn btn-warning" style="padding: 15px; font-size: 18px" value="Thêm vào giỏ hàng">
				<?php
					}
					else {
						echo '<span style="color: red; font-size: 18px; ">Hết hàng</span>';					
					} 
				?>									
				</div>
			</form>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 10px;">
			<ul class="nav nav-pills">
				<li class="active">
					<br><a data-toggle="pill" href="#thong_tin">Mô tả</a><br>
				</li>		
			</ul>	
			<div class="tab-content">
				<div id="thong_tin" class="tab-pane fade in  active">
					<table class="table">
						<tr>				
							<td><?php echo $row['mota1']; ?></td>
						</tr>
						<tr>					
							<td><?php echo $row['mota2']; ?></td>
						</tr>
						<tr>					
							<td><?php echo $row['mota3']; ?></td>
						</tr>
						<tr>						
							<td><?php echo $row['mota4']; ?></td>
						</tr>
						<tr>
							<td><?php echo $row['mota5']; ?></td>
						</tr>
					</table>
				</div>			
			</div>
		</div>	
	</div>
</div>
</div>