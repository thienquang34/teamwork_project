<?php
	if(isset($_POST['submit'])){
	include('connect.php');
	$kh= $_SESSION['login'];
	$hoten = $_POST['hoten'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	$diachi = $_POST['diachi'];
	$sl="update thanh_vien set hoten='".$hoten."',sdt='".$sdt."',diachi='".$diachi."' where email='".$kh['email']."'";
	$exec= mysqli_query($connect,$sl);
	if($exec){ 
		echo "<script> alert('Sửa thông tin thành công'); location.href='?menu=thanh_vien'; </script>";
	}
	else{
		echo $sl;
		echo "Chỉnh sửa thất bại <br>";
		echo 'Bấm<a href="javascript:history.back(-1);"> vào đây </a> để quay lại trang sửa chữa';
	}
	}
	if(isset($_POST['cancel'])){
	echo "<script> location.href='index.php'; </script>";
}
?>