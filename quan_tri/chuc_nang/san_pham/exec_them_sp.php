<?php
	if(!isset($login)){exit();}
?>
<?php
	if(isset($_POST['submit'])){
	include('../connect.php');
	$img_location ='../images/';
	if($_FILES['image1']['name']!=""){
		$image1= $_FILES['image1']['name'];
		$tmp_name1= $_FILES['image1']['tmp_name'];
		$img_location1= $img_location.basename($image1);
		if(move_uploaded_file($tmp_name1, $img_location1)){

		}else{
			unlink('../images/'.$image1);
		}
	}
	else{
		$image1="";
	}
	if($_FILES['image2']['name']!=""){
		$image2= $_FILES['image2']['name'];
		$tmp_name2= $_FILES['image2']['tmp_name'];
		$img_location2= $img_location.basename($image2);
		if(move_uploaded_file($tmp_name2, $img_location2)){

		}else{
			unlink('../images/'.$image2);
		}
	}
	else{
		$image2="";
	}
	if($_FILES['image3']['name']!=""){
		$image3= $_FILES['image3']['name'];
		$tmp_name3= $_FILES['image3']['tmp_name'];
		$img_location3= $img_location.basename($image3);
		if(move_uploaded_file($tmp_name3, $img_location3)){

		}else{
			unlink('../images/'.$image3);
		}
	}
	else{
		$image3="";
	}
	if($_FILES['image4']['name']!=""){
		$image4= $_FILES['image4']['name'];
		$tmp_name4= $_FILES['image4']['tmp_name'];
		$img_location4= $img_location.basename($image4);
		if(move_uploaded_file($tmp_name4, $img_location4)){

		}else{
			unlink('../images/'.$image4);
		}
	}
	else{
		$image4="";
	}
	$name = $_POST['name'];
	$name= mb_strtoupper($name);
	$cost = $_POST['cost'];
	$sql= "select max(masp) from san_pham";
	$qr= mysqli_query($connect, $sql);
	$row= mysqli_fetch_array($qr);
	$masp= $row['max(masp)']+1;
	echo $row['max(masp)'];
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
	$sl= "insert into san_pham(masp,tensp,giasp,soluong,img, img1,img2, img3,loaisp) values(".$masp.",'".$name."',".$cost.",".$soluong.",'".$image1."','".$image2."','".$image3."','".$image4."','".$loaisp."')";
	$sl1= "insert into thongtinsp(masp,mota1,mota2,mota3,mota4,mota5) values(".$masp.",'".$mota1."','".$mota2."','".$mota3."','".$mota4."','".$mota5."')";
	$exec= mysqli_query($connect,$sl);
	$exec1= mysqli_query($connect,$sl1);
	if($exec){
		echo "<script> alert('Thêm sản phẩm thành công'); location.href='?menu=ql_sanpham'; </script>";
	}
	else{
		//echo $sl."<br>".$sl1;
		//echo $_FILES['image1']['name'];
		echo "<script> alert('Thêm sản phẩm không thành công'); location.href='?menu=?menu=ql_sanpham'; </script>";
	}
}
	if(isset($_POST['cancel'])){
		header('location:index.php?menu=ql_sanpham');
	}
?>