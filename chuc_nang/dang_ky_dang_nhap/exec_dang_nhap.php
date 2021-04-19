<?php 
	if(isset($_POST['submit'])){
		include('connect.php');
		$pass= $_POST['password'];
		$pass= md5($pass);
		$sl="select * from thanh_vien where email='".$_POST['email']."' and password='".$pass."'";
		$exec= mysqli_query($connect,$sl);
		$kt = mysqli_num_rows($exec);
		$dangnhap=mysqli_fetch_array($exec);
		if($kt>0){
			$_SESSION['login']= $dangnhap;
			echo "<script> alert('Đăng nhập thành công');</script>";
			echo "<script> location.href='index.php' </script>";		
		}
		else{
			echo "<script> alert('Đăng nhập thất bại'); location.href='?menu=dang_nhap'; </script>";
		}
	}
	if(isset($_POST['cancel'])){
		echo "<script> location.href='javascript: history.back(-1);'; </script>";
	}
?>