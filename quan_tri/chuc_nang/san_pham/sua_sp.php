<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../connect.php');
	$masp=$_GET['masp'];
	$sl= 'select * from san_pham join thongtinsp on san_pham.masp= thongtinsp.masp where san_pham.masp='.$masp;
	$exec= mysqli_query($connect,$sl);
	$row= mysqli_fetch_array($exec);
?>
<div class="container-fluid">
<h1 class="mt-4">Sửa sản phẩm</h1>
                       
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
	

	<form method="post" action="?menu=exec_sua_sp" enctype="multipart/form-data">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<tr>
				<td><h4>Tên sản phẩm</h4></td>
				<td><h4>Giá</h4></td>
				<td><h4>Số lượng</h4></td>
				<td><h4>Loại sản phẩm</h4></td>

			</tr>
			<tr>
				<td><input class="form-control form-control-user" type="text" id="name" name="name"  value="<?php echo $row['tensp']; ?>" ></td>
				<td><input class="form-control form-control-user" type="text" id="cost" name="cost"  value="<?php echo $row['giasp']; ?>" ></td>
				<td><input class="form-control form-control-user" type="text" id="soluong" name="soluong"  value="<?php echo $row['soluong']; ?>" ></td>
				<td>
					<select name="loaisp" id="loaisp"   class="form-control form-control-user">
						<option value="somi" <?php if($row['loaisp']=="somi"){echo "selected";} 
						  ?> >Áo sơ mi</option>
						<option value="khoac" <?php if($row['loaisp']=="khoac"){echo "selected";} 
						  ?> >Áo khoác</option>
						  <option value="thun" <?php if($row['loaisp']=="thun"){echo "selected";} 
						  ?> >Áo thun</option>
						  <option value="jean" <?php if($row['loaisp']=="jean"){echo "selected";} 
						  ?> >Quần jean</option>
						  <option value="kaki" <?php if($row['loaisp']=="kaki"){echo "selected";} 
						  ?> >Quần kaki</option>
						  <option value="lung" <?php if($row['loaisp']=="lung"){echo "selected";} 
						  ?> >Quần lửng</option>
						  <option value="giay" <?php if($row['loaisp']=="giay"){echo "selected";} 
						  ?> >Giày</option>
					</select>
				</td>
			</tr>
		</table>
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<tr>
				<td colspan="2"><h4>Hình ảnh</h4></td>
			</tr>
			<tr>
				
				<td>
					<input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
					<input type="hidden" name="img" value="<?php echo $row['img']; ?>">
					<input type="hidden" name="img1" value="<?php echo $row['img1']; ?>">
					<input type="hidden" name="img2" value="<?php echo $row['img2']; ?>">
					<input type="hidden" name="img3" value="<?php echo $row['img3']; ?>">
					<img src="../images/<?php echo $row['img']; ?>" alt="" name="img" width="80px" height="100px" ><input type="file" id="image" name="image"   ><br>
					<img src="../images/<?php echo $row['img1']; ?>" alt="" name="img1" width="80px" height="100px" ><input type="file" id="image1" name="image1"><br>
					<img src="../images/<?php echo $row['img2']; ?>" alt="" name="img2" width="80px" height="100px" ><input type="file" id="image2" name="image2"><br>
					<img src="../images/<?php echo $row['img3']; ?>" alt="" name="img3" width="80px" height="100px" ><input type="file" id="image3" name="image3"><br>
				</td>
			</tr>
		</table>

		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			
						<tr>
							<td><h6>Mô tả 1:</h6></td>	
							<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="mota1" name="mota1"  value="<?php echo $row['mota1']; ?>"  ></td>
						</tr>	
						<tr>
							<td><h6>Mô tả 2:</h6></td>	
							<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="mota2" name="mota2"  value="<?php echo $row['mota2']; ?>"  ></td>
						</tr>			
						<tr>
							<td><h6>Mô tả 3:</h6></td>	
							<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="mota3" name="mota3"  value="<?php echo $row['mota3']; ?>"  ></td>
						</tr>			
						<tr>
							<td><h6>Mô tả 4:</h6></td>	
							<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="mota4" name="mota4"  value="<?php echo $row['mota4']; ?>"  ></td>
						</tr>			
						<tr>
							<td><h6>Mô tả 5:</h6></td>	
							<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="mota5" name="mota5"  value="<?php echo $row['mota5']; ?>"  ></td>
						</tr>					
					
			
		</table>
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<tr>
				<td><h5 for="noi_bat">Nổi bật: </h5></td>
				<td>
					<select name="noi_bat" id="noi_bat" class="form-control form-control-user">
						<option value="có" <?php if($row['noi_bat']=="có"){echo "selected";} ?> > Có</option>
						<option value="không" <?php if($row['noi_bat']=="không" OR $row['noi_bat']==""){echo "selected";} ?> >Không</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" name="submit" value="Sửa">
				<a class="btn btn-primary" href="?menu=ql_sanpham">Hủy</a>
			</td>
			</tr>
		</table>
	</form>
</div>
</div>
</div>
</div>