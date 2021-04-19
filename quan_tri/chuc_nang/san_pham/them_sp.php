<?php
	if(!isset($login)){exit();}
?>
<div class="container-fluid">
	<h1 class="mt-4">Thêm sản phẩm mới</h1>
    <div class="card mb-4">
    	<div class="card-body">
            <div class="table-responsive">
				<form method="post" action="?menu=exec_them_sp" enctype="multipart/form-data">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<tr>
							<td><h4>Tên sản phẩm</h4></td>
							<td><h4>Giá</h4></td>
							<td><h4>Số lượng</h4></td>
							<td><h4>Loại sản phẩm</h4></td>
						</tr>
						<tr>
							<td><input class="form-control form-control-user" type="text" id="name" name="name" required></td>
							<td><input class="form-control form-control-user" type="text" id="cost" name="cost" required></td>
							<td><input class="form-control form-control-user" type="text" id="soluong" name="soluong" required></td>
							<td>
								<select class="form-control form-control-user" name="loaisp" id="loaisp" required >
									<option value="somi">Áo sơ mi</option>
									<option value="khoac">Áo khoác</option>
									<option value="thun">Áo thun</option>
									<option value="jean">Quần jean</option>
									<option value="kaki">Quần kaki</option>
									<option value="lung">Quần lửng</option>
									<option value="giay">Giày</option>
								</select>
							</td>
						</tr>
					</table>
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<tr>
							<td colspan="4"><h4>Hình ảnh</h4></td>
						</tr>
						<tr>
							<td class="right">
								<label for="image1">Ảnh 1:</label><br>
								<label for="image2">Ảnh 2:</label><br>
								<label for="image3">Ảnh 3:</label><br>
								<label for="image4">Ảnh 4:</label><br>
							</td>
							<td>
								<input type="file" id="image1" name="image1"  required ><br>
								<input type="file" id="image2" name="image2"><br>
								<input type="file" id="image3" name="image3"><br>
								<input type="file" id="image4" name="image4"><br>
							</td>
						</tr>
					</table>
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<tr>
										<td><h6>Mô tả 1:</h6></td>	
										<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="mota1" name="mota1" required ></td>
									</tr>	
									<tr>
										<td><h6>Mô tả 2:</h6></td>	
										<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="mota2" name="mota2"   ></td>
									</tr>			
									<tr>
										<td><h6>Mô tả 3:</h6></td>	
										<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="mota3" name="mota3"   ></td>
									</tr>			
									<tr>
										<td><h6>Mô tả 4:</h6></td>	
										<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="mota4" name="mota4"   ></td>
									</tr>			
									<tr>
										<td><h6>Mô tả 5:</h6></td>	
										<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="mota5" name="mota5"    ></td>
									</tr>	
					</table>
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<tr>
							<td><h5 for="noi_bat">Nổi bật: </h5></td>
							<td>
								<select name="noi_bat" id="noi_bat" class="form-control form-control-user">
									<option value="có"> Có</option>
									<option selected="" value="không">Không</option>
								</select>
							</td>
						</tr>
					</table>
					<input class="btn btn-primary" type="submit" name="submit" value="Thêm">
					<a class="btn btn-primary" href="?menu=ql_sanpham">Hủy</a>				
				</form>
			</div>
		</div>
	</div>
</div>