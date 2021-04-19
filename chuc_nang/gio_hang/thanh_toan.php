<script type="text/javascript">
    $(document).ready(function() {
        document.title = 'Giỏ hàng';
    });
</script>
<?php
	if(isset($_SESSION['login'])) {
		include('chuc_nang/gio_hang/thanh_vien_form.php');
	}else {
?>
		<p class="alert alert-warning">Bạn chưa đăng nhập.. Vui lòng <a href="?menu=dang_nhap">vào đây</a> để đăng nhập.<br></p>
		<p class="alert alert-warning">
		 Nếu bạn chưa có tài khoản thì có thể bấm <a href="?menu=dang_ky">vào đây</a> để tạo tài khoản mới</p>
<?php
	}
?>