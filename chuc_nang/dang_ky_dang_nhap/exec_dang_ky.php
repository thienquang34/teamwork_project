<?php
	if(isset($_POST['submit'])){
		include('connect.php');
		$email = $_POST['email'];
		$sql= "select * from thanh_vien";
		$exec1=mysqli_query($connect, $sql);
		while($row= mysqli_fetch_array($exec1)){
			if($row['email']==$_POST['email']){
				$kt=1;
			}else{
				$kt=0;
			}
		}
		if($kt==0){			
			$password = $_POST['password'];
			$password = md5($password);
			$repass= $_POST['re-pass'];
			$repass= md5($repass);
			if($password==$repass){
				$hoten = $_POST['hoten'];
				$sdt = $_POST['sdt'];
				$diachi = $_POST['diachi'];	
				$sl="insert into thanh_vien values('','".$email."','".$password."','".$hoten."','".$sdt."','".$diachi."')";
				$exec= mysqli_query($connect,$sl);
				if($exec){
	?>
					<p class="alert alert-success">Đăng ký thành công.. Chúng tôi đã gửi bạn email thông tin tài khoản của bạn.
					<br>Bấm <a href="?menu=dang_nhap"> vào đây </a> để đăng nhập và mua hàng
					</p>
	<?php 
				}else{
					echo "Đăng ký thất bại <br>";
					echo 'Bấm<a href="javascript:history.back(-1);"> vào đây </a> để quay lại trang đăng ký';
				}
			}else{
				echo "<script> alert('Mật khẩu bạn nhập lại chưa chính xác'); location.href='?menu=dang_ky'; </script>";
			}
		}else{
			echo "<script> alert('Tên đăng nhập đã có người sử dụng.'); location.href='?menu=dang_ky'; </script>";
		}
	}else{
		if(isset($_POST['cancel'])){
			echo "<script> location.href='index.php'; </script>";
		}
	}
?>