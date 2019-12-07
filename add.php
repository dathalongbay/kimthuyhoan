<?php 
   $a = $_POST['HOTEN'];
   $b = $_POST['GIOITINH'];
   $c = $_POST['NGAYSINH'];
   $diem = $_POST['diem'];
    $diemJson = json_encode($diem);

//kết nối sever
	$conn = mysqli_connect("localhost","root","") or die ("Lỗi kết nối đến server");
	//Lựa chọn csdl
	$name = mysqli_select_db($conn,"quan_ly_sinh_vien") or die ("Không tồn tại csdl");
	// truy vấn dữ liệu
	$qr = mysqli_query($conn,"insert into sinhviendh7c1(HOTEN,GIOITINH,NGAYSINH,diem) values('$a','$b','$c', '$diemJson')") or die('lỗi truy vấn');
	if ($qr) {
		header("location:index.php");
	}
 ?>