<?php
	include('connect.php');
	$kh=$_SESSION['login'];
	$sl= "select * from thanh_vien where email='".$kh['email']."'";
	$exec= mysqli_query($connect, $sl);
	$row = mysqli_fetch_array($exec); 
?>
	<form action="?menu=exec_change_password" method="post">
		<table class="table">
			<tr>
				<td><label for="old_password">Mật khẩu cũ: </label></td>
				<td><input class="form-control" type="password" name="old_password" id="old_password" placeholder="Nhập mật khẩu cũ" required ></td>
			</tr>
			<tr>
				<td><label for="new_password">Mật khẩu mới: </label></td>
				<td><input class="form-control" type="password" name="new_password" id="new_password" placeholder="Nhập mật khẩu mới" required ></td>
			</tr>
			<tr>
				<td><label for="re_password">Nhập lại mật khẩu mới: </label></td>
				<td><input class="form-control" type="password" name="re_password" id="re_password" placeholder="Nhập lại mật khẩu mới" required ></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input class="btn btn-success" type="submit" name="submit" value="Cập nhật"></td>
			</tr>
		</table>
	</form>