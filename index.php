<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
$conn= mysqli_connect("localhost","root","") or die ("lỗi kết nối đến server");
$name= mysqli_select_db($conn,"quan_ly_sinh_vien") or die("không tồn tại csdl");
$qr = mysqli_query($conn,"select * from sinhviendh7c1") or die('lỗi truy vấn');
 ?> <h2><a href="add1.php" title="">Thêm </a></h2>
 <table border="1">
 	<tr>
 		<th>ID</th>
 		<th>Họ Tên</th>
 		<th>Giới Tính</th>
 		<th>Ngày Sinh</th>
  	</tr>
 	<?php 

 	while ($rs = mysqli_fetch_assoc($qr)) {
 	    echo "<tr>";
 	    echo "<td>".$rs["ID"]."</td>";
 	    echo "<td>".$rs["HoTen"]."</td>";
 	    echo 	"<td>".$rs["GioiTinh"]."</td>";
 	    echo "<td>".$rs["NgaySinh"]."</td>";
 	    
 	   echo "<td><a href='update1.php?ID=".$rs['ID']."'>Sửa</a>|<a href='delete.php?ID=".$rs['ID']."' >Xóa</a></td>";
 	   echo '</tr>';
 	}
 	?>
 	</table>
</body>
</html>