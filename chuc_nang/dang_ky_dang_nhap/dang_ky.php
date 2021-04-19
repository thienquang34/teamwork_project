<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Đăng ký';
    });

</script>
<div class="panel panel-primary">
    <div class="panel-heading">Đăng ký</div>
    <div class="panel-body">
    <form action="?menu=exec_dang_ky" method="post" role="form" data-toggle="validator">
	<table class="table">
		<tr>
			<td><label for="email">Email:</label> <span style="color: red;">(*)</span></td>
			<td><input type="email" name="email" id="email" class="form-control"  placeholder="Nhập địa chỉ Email.." required ></td>
		</tr>
		<tr>
			<td><label for="pass">Mật khẩu:</label> <span style="color: red;">(*)</span></td>
			<td><input type="password" name="password" id="pass" class="form-control" placeholder="Nhập mật khẩu.." required ></td>
		</tr>
		<tr>
			<td><label for="repass">Nhập lại mật khẩu:</label> <span style="color: red;">(*)</span></td>
			<td><input type="password" name="re-pass" class="form-control" id="repass" placeholder="Nhập lại mật khẩu.." required ></td>
		</tr>
		<tr>
			<td><label for="hoten">Họ và tên:</label> <span style="color: red;">(*)</span></td>
			<td><input type="text" name="hoten" id="hoten" class="form-control"  placeholder="Nhập họ và tên bạn.." required ></td>
		</tr>	
		<tr>
			<td><label for="sdt">Số điện thoại:</label> <span style="color: red;">(*)</span></td>
			<td><input type="text" name="sdt" id="sdt" class="form-control"  placeholder="Nhập số điện thoại.." required ></td>
		</tr>
		<tr>
			<td><label for="diachi">Địa chỉ:</label> <span style="color: red;">(*)</span></td>
			<td><input type="text" name="diachi" id="diachi" class="form-control"  required ></td>
		</tr>
		<tr>
			<td align="center"><input type="submit" class="btn btn-primary" name="submit" value="Đăng ký"></td></form>
			<td align="center"><form action="?menu=exec_dang_ky" action="post"><input type="submit" class="btn btn-primary" name="cancel" value="Hủy"></form></td>
		</tr>
	</table>
</form>
</div>
</div>
