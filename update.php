<?php  
	$u = $_POST['ID2'];
	$n = $_POST['HoTen2'];
	$p = $_POST['GioiTinh2'];
	$i = $_POST['NgaySinh2'];
	$conn = mysqli_connect("localhost","root","") or die ("Lỗi kết nối đến server");
	//Lựa chọn csdl
	$name = mysqli_select_db($conn,"quan_ly_sinh_vien") or die ("Không tồn tại csdl");
	$qr = mysqli_query($conn,"update sinhviendh7c1 set HoTen = '$n',GioiTinh = '$p',NgaySinh = '$i' where ID = '$u'") or die('lỗi truy vấn');
	if ($qr) {
		header("location:index.php");
	}

?>