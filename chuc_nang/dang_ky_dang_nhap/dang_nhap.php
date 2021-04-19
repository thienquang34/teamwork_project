<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Đăng nhập';
    });

</script>
<?php
if(isset($_SESSION['login'])){
		include('chuc_nang/gio_hang/thanh_vien_form.php');
	}else{
?>
<form action="?menu=exec_dang_nhap" method="post">
	<table class="table">
		<tr>
			<td><label for="user">Email: </label></td>
			<td><input  class="form-control" type="text" name="email" id="user" placeholder="Nhập tên đăng nhập.." required ></td>
		</tr>
		<tr>
			<td><label for="pass">Mật khẩu:</label></td>
			<td><input  class="form-control" type="password" name="password" id="pass" placeholder="Nhập mật khẩu.." required ></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" class="btn btn-primary" value="Đăng nhập"></td>
		</tr>
	</table>
</form>
<?php
}
?>