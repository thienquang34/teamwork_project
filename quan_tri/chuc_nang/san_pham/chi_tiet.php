<?php
	if(!isset($login)){exit();}
?>
<div class="container-fluid">
                        <h1 class="mt-4">Chi tiết sản phẩm</h1>
                       
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php 
	include('../connect.php');
	$sl= 'select * from san_pham join thongtinsp on san_pham.masp= thongtinsp.masp where san_pham.masp='.$_GET['masp'];
	$exec= mysqli_query($connect, $sl);
	$row= mysqli_fetch_array($exec);
?>
<tr>
	<td>
		<h6>Tên sản phẩm:</h6>
	</td>
		<td><?php echo $row['tensp']; ?></td>
</tr>
<tr>
	<td>
		<h6>Giá sản phẩm</h6>
	</td>
	<td>
		<?php echo number_format($row['giasp'],0,",",".")."đ"; ?>
	</td>
</tr>
<tr>
	<td>
	<h6>Số lượng</h6>
	</td>
	<td><?php echo $row['soluong']; ?></td>
</tr>
<tr>
	<td>
		<h6>Loại sản phẩm</h6>
	</td>
	<td>
			
			
			
			<?php $loaisp= $row['loaisp'];
			switch ($loaisp) {
				case 'somi':
					echo "Áo sơ mi";
					break;
				case 'khoac':
					echo "Áo khoác";
					break;
				case 'thun':
					echo "Áo thun";
					break;
				case 'jean':
					echo "Quần jean";
					break;
				case 'kaki':
					echo "Quần kaki";
					break;
				case 'lung':
					echo "Quẩn lửng";
					break;
				case 'giay':
					echo "Giày";
					break;						
			}?>
		</td>
</tr>
<tr>
	<td>
		<h6>Hình ảnh</h6>
	</td>
	<td>
		<img src="../images/<?php echo $row['img']; ?>" alt="" name="img" width="80px" height="100px" = >
					<img src="../images/<?php echo $row['img1']; ?>" alt="" name="img1" width="80px" height="100px" >
					<img src="../images/<?php echo $row['img2']; ?>" alt="" name="img2" width="80px" height="100px" >
					<img src="../images/<?php echo $row['img3']; ?>" alt="" name="img3" width="80px" height="100px" >
				</td>
</tr>


					<tr>
						<tr>
							<td><h6>Mô tả 1:</h6></td>	
							<td><?php echo $row['mota1']; ?></td>
						</tr>	
						<tr>
							<td><h6>Mô tả 2:</h6></td>	
							<td><?php echo $row['mota2']; ?></td>
						</tr>		
						<tr>
							<td><h6>Mô tả 3:</h6></td>	
							<td><?php echo $row['mota3']; ?></td>
						</tr>		
						<tr>
							<td><h6>Mô tả 4:</h6></td>	
							<td><?php echo $row['mota4']; ?></td>
						</tr>		
						<tr>
							<td><h6>Mô tả 5:</h6></td>	
							<td><?php echo $row['mota5']; ?></td>
						</tr>					
					</tr>
					
</table>
</div>
</div>
</div>
<a class="btn btn-success" style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;"  href="?menu=sua_sp&masp=<?php echo $row['masp']; ?>">Sửa</a></td>
        <td><a class="btn btn-danger" style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;" onclick="return confirm('Bạn có muốn xóa không?');" href="?menu=xoa_sp&masp=<?php echo $row['masp']; ?>">Xóa</a>
</div>


