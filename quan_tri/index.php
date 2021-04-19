<?php 
	session_start();
	include('chuc_nang/quan_tri/security.php');
	if(isset($login)){
 		include_once('chuc_nang/quan_tri/trang_chu.php');
 	}
 	elseif(isset($_POST['submit'])){
		include('../connect.php');
		$name= $_POST['username'];
		$pass= $_POST['password'];	
		//ma hoa mat khau
		$pass= md5($pass);
		$sl= "select * from quan_tri where name='".$name."' and pass='".$pass."'";
		$result= mysqli_query($connect, $sl);
		$row= mysqli_fetch_assoc($result);
		$kt= mysqli_num_rows($result);
		if($kt>0){
			$_SESSION['user']= $_POST['username'];
			$_SESSION['pass']= $_POST['password'];
			echo "<script>alert('Đăng nhập thành công');location.href='?menu=dashboard'; </script>";	
		}
		else{
			echo "<script>alert('Tên tài khoản hoặc mật khẩu sai'); </script>";
		}
		
	}else{
 		include('chuc_nang/quan_tri/login.php');	
 	}
 ?>