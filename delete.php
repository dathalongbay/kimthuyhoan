<?php 
	$ID = $_GET['ID'];
	//Kết nối đến server
	$conn = mysqli_connect("localhost","root","") or die ("Lỗi kết nối đến server");
	//Lựa chọn csdl
	$name = mysqli_select_db($conn,"quan_ly_sinh_vien") or die ("Không tồn tại csdl");
	// truy vấn dữ liệu
	$qr = mysqli_query($conn,"delete from sinhviendh7c1 where ID = '$ID' ") or die('lỗi truy vấn');
	if ($qr) {
		header("location:index.php");
	}
 ?>