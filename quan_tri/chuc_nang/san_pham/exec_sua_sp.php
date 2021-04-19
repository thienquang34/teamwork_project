<?php
	if(!isset($login)){exit();}
?>
<?php
	if(isset($_POST['submit'])){
	include('../connect.php');
	$img_location ='../images/';
	$masp = $_POST['masp'];
	$name = $_POST['name'];
	$cost = $_POST['cost'];
	$loaisp = $_POST['loaisp'];
	$image_upload = $_FILES['image']['name'];
	$image= $_FILES['image']['name'];
	$image1= $_FILES['image1']['name'];
	$image2= $_FILES['image2']['name'];
	$image3= $_FILES['image3']['name'];
	$tmp_name= $_FILES['image']['tmp_name'];
	$tmp_name1= $_FILES['image1']['tmp_name'];
	$tmp_name2= $_FILES['image2']['tmp_name'];
	$tmp_name3= $_FILES['image3']['tmp_name'];
	$error= $_FILES['image']['error'];
	$tmp_name= $_FILES['image']['tmp_name'];
		if($image_upload==""){
			$img= $_POST['img'];
		}
		if($image_upload!=""){
			$img= $image_upload;
		}
		if($image1==""){
			$img1= $_POST['img1'];
		}
		if($image1!=""){
			$img1= $image1;
		}
		if($image2==""){
			$img2= $_POST['img2'];
		}
		if($image2!=""){
			$img2= $image2;
		}
		if($image3==""){
			$img3= $_POST['img3'];
		}
		if($image3!=""){
			$img3= $image3;
		}
		
	$soluong=$_POST['soluong'];
	if($soluong==""){
		$soluong=0;
	}
	$mota1 = $_POST['mota1'];
	$mota2 = $_POST['mota2'];
	$mota3 = $_POST['mota3'];
	$mota4 = $_POST['mota4'];
	$mota5 = $_POST['mota5'];
	$loaisp = $_POST['loaisp'];
	$sl= "update san_pham set tensp='".$name."',giasp=".$cost.",soluong=".$soluong.",img='".$img."',img1='".$img1."',img2='".$img2."',img3='".$img3."',loaisp='".$loaisp."' where masp=".$masp;
	$sql= "update thongtinsp set mota1='".$mota1."',mota2='".$mota2."',mota3='".$mota3."',mota4='".$mota4."',mota5='".$mota5."' where masp=".$masp;
	$exec1= mysqli_query($connect, $sql);
	$exec= mysqli_query($connect,$sl);
	if($exec){
		if($exec1){
		echo "<script> alert('Sửa sản phẩm thành công');
		location.href='?menu=chi_tiet&masp=$masp'; </script>";
	}
}
	else{
		echo "<script> alert('Sửa sản phẩm không thành công'); location.href='?menu=ql_sanpham'; </script>";
	}
}
	if(isset($_POST['cancel'])){
		header('location:index.php?menu=ql_sanpham');
	}
?>