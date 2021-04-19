<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../connect.php');
	$masp=$_GET['masp'];
	$sl= 'select * from san_pham  where masp='.$masp;
	$exec= mysqli_query($connect,$sl);
	$row= mysqli_fetch_array($exec);
?>
<div class="container-fluid">
<h1 class="mt-4">Nhập hàng</h1>
                       
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
	

	<form method="post" action="?menu=exec_nhap_hang" enctype="multipart/form-data">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<tr>
				<td><h4>Tên sản phẩm</h4></td>
				<td><h4>Giá</h4></td>
				<td><h4>Số lượng</h4></td>
				<td><h4>Loại sản phẩm</h4></td>

			</tr>
			<tr>
				<input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
				<td><input class="form-control form-control-user" type="text" id="name" name="name"  value="<?php echo $row['tensp']; ?>" disabled></td>
				<td><input class="form-control form-control-user" type="text" id="cost" name="cost"  value="<?php echo $row['giasp']; ?>" disabled></td>
				<td><input class="form-control form-control-user" type="text" id="soluong" name="soluong"  value="<?php echo $row['soluong']; ?>" required></td>
				<td>
					<select name="loaisp" id="loaisp"  disabled class="form-control form-control-user">
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
				<td><input class="btn btn-primary" type="submit" name="submit" value="Xác nhận">
				<a class="btn btn-primary" href="?menu=sp_hethang">Hủy</a>
			</td>
			</tr>
		</table>
	</form>
</div>
</div>
</div>
</div>