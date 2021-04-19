<?php
	include('connect.php');
	if(isset($_POST['submit'])){
		$connect->begin_transaction();	
		$tenkh= $_POST['tenkh'];
		$sdt= $_POST['sdt'];
		$diachi= $_POST['diachi'];
		$sp_mua=$_POST['sp_mua'];
		$list_id= $_POST['list_id'];
		$kh=$_SESSION['login'];
		$email=$kh['email'];
		$mahd= rand(0,99999);
		$sql= "insert into hoa_don(mahd, email, tinh_trang) values('".$mahd."','".$email."','Chưa xử lý')";
		$rs=mysqli_query($connect,$sql);
		if($rs){
			foreach ($_SESSION['giohang'] as $masp => $sp) {
				$id_array[] = $masp;
			}
			$list_id = implode(',', $id_array);
			$sl = 'select * from san_pham where masp in (' . $list_id . ')';
			$exec = mysqli_query($connect, $sl);
			while ($row = mysqli_fetch_array($exec)) {
				$masp=$row['masp']; 
				$soluong=$_SESSION['giohang'][$row['masp']];
				$sl=$row['soluong'];
				$dongia=$row['giasp']; 
				if($soluong>$sl) {
					echo "<script> alert('Số lượng bạn mua nhiều hơn kho. Xin vui lòng giảm bớt số lượng'); location.href='?menu=gio_hang'; </script>";
					$connect->rollback();
					die();
				}else {
					$sql3="INSERT INTO `hoadon_chitiet`(mahd, masp, soluong, dongia) VALUES($mahd,$masp,$soluong,$dongia)";
					$rs3=mysqli_query($connect,$sql3);
					$sql_sl="UPDATE san_pham SET soluong=(soluong - '".$soluong."') WHERE masp='".$masp."'";
					$rs_sl=mysqli_query($connect,$sql_sl);
					$connect->commit();
				}
			}	
			unset($_SESSION['giohang']);
			echo '<p class="alert alert-success">Cảm ơn bạn đã mua hàng. Vui lòng giữ liên lạc khi nhân viên liên hệ.</p>';
			echo '<p class="alert alert-success">Bấm <a href="?menu=san_pham">vào đây</a> để quay lại mua hàng tiếp</p>';
		}
		else{
			echo "<script> alert('Hệ thống đang bận. Xin vui lòng thử lại sau'); location.href='?menu=san_pham'; </script>";
		}
	}
	else{
		unset($_SESSION['giohang']);
		echo "<script> location.href='index.php'; </script>";
	}	
?>	